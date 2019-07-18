<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Hotelier;
use App\User;
use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Redirect;


class LoginController extends Controller
{
    // Fonction pour lancer le formulaire de connexion
    public function login(){
      if(Sentinel::check() && Sentinel::inRole('admin')){
          return redirect('/admin-home');
      }else{
          return view('authentication.login');
      }
    }

    // Fonction pour se connecter à l'application
    public function postLogin(Request $request)
    {
            $login = $request->input('login');
            $pass = $request->input('password');
            try {

                $rememberMe = false;
                if (isset($request->remember_me)) {
                    $rememberMe = true;
                }

                if (Sentinel::authenticate(['email' => $login, 'password'=>$pass], $rememberMe) ||
                    Sentinel::authenticate(['username' => $login, 'password'=>$pass], $rememberMe)) {

                    // L'authentification s'est bien passée
                    $slug = Sentinel::getUser()->roles()->first()->slug;
                    if($slug == 'admin'){
                        return redirect('/admin-home');
                    }elseif(($slug == "user")){
                       // session(['hotels'=>Hotel::all()]);
                        return redirect('/');
                    }
                } else {

                    // Un problème est survenu lors de l'authentification
                    return redirect()->back()->with(['warning' => 'Le login ou le mot de passe est incorrect, vérifiez de nouveau ou créez un compte.']);
                }
            } catch (ThrottlingException $e) {
                $delay = $e->getDelay();
                return redirect()->back()->with(['error' => "Plusieurs tantatives de connexion ont été détectées, votre connexion sera de nouveau active dans $delay secondes."]);
            } catch (NotActivatedException $e) {
                return redirect()->back()->with(['information' => "Votre compte n'est pas encore activé, veuillez consultez votre mail pour l'activer."]);
            }
    }

    // Fonction pour déconnecter l'utilisateur du système
    public function logout(Request $request)
    {
      Sentinel::logout();
      $request->session()->flush();
      return Redirect::to('/login')->with('success', 'You have successfully logged out!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;
use Validator;

class RegistrationController extends Controller
{
    // Fonction qui lance le formulaire d'enregistrement d'un utilisateur sur le système
    public function register()
    {
      return view('authentication.register');
    }

    // Fonction qui enregistre effectivement l'utilisateur
    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom'=> 'required',
            'username'=> 'required|unique:users',
            'telephone_1'=> 'required',
            'email'=> 'required|unique:users',
            'password'=> 'bail|required|between:3,32',
            'password_confirmation' => 'bail|required|same:password',
        ],
            [
                'nom.required'=> 'Le nom est tres important.',
                'email.required'=> 'L\'email est requis pour l\'inscription a cette plateforme',
                'email.unique'=> 'Un utilisateur existe déjà avec cet email, changer',
                'telephone_1.required'=> 'Le numero de telephone est important',
                'username.required'=> 'Le numero de telephone est important',
                'username.unique'=> 'cet utilisateur existe déjà, changer le username svp !!!',
                'password.required'=> 'Le champ de mot de passe ne peut pas etre vide',
                'password.between'=> 'La taille d\'un mot de passe est entre 3 et 32 caractères',
                'password_confirmation.required' => 'Le champ de confirmation ne peut pas etre vide',
                'password_confirmation.same' => 'Le mot de passe et la confirmation doivent etre identique',
            ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
      $user = Sentinel::register($request->all());
      $activation = Activation::create($user);

      $role = Sentinel::findRoleBySlug('user');
      $role->users()->attach($user);

      $this->sendEmail($user, $activation->code);
      return redirect('/login');

    }


    // Fonction d'envoi de mail d'activation de compte
    private function sendEmail($user, $code)
    {
      Mail::send('mails.activation',[
        'user' => $user,
        'code' => $code
      ], function($message) use ($user){
        $message->to($user->email);
        $message->subject("Hello $user->last_name, activate your account.");
      });
    }
}

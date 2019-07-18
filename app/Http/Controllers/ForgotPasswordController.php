<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;


class ForgotPasswordController extends Controller
{
  // Gestion du mot de passe oublié
  public function forgotPassword(){
    return view('authentication.forgot-password');
  }

  public function postForgotPassword(Request $request){
    $user = User::whereEmail($request->email)->first();

    if($user->count() == 0)
    {
      return redirect()->back()->with([
        'success' => 'Le code de reinitialisation a été envoyé à votre adresse mail.'
      ]);
    }else{
      $reminder = Reminder::exists($user) ?: Reminder::create($user);
      $this->sendEmail($user, $reminder->code);

      return redirect()->back()->with([
        'success' => 'Le code de reinitialisation a été envoyé à votre adresse mail.'
      ]);
    }

  }

  private function sendEmail($user, $code)
  {
    Mail::send('mails.forgot-password', [
      'user' => $user,
      'code' => $code
    ], function($message) use ($user){
      $message->to($user->email);
      $message->subject("Bonjour $user->last_name, vous avez sollicité reinitialiser votre mot de passe.");
    });
  }


  public function resetPassword($email, $resetCode)
  {
    $user = User::byEmail($email);
    if($user->count() == 0){
      abort(404);
    }

    if ($reminder = Reminder::exists($user)) {
      if ($resetCode == $reminder->code)
        return view('authentication.reset-password');
      else
        return redirect('/');
    }else{
      return redirect('/');
    }
  }


  public function postResetPassword(Request $request, $email, $resetCode)
  {
    $this->validate($request, [
      'password' => 'confirmed|required|min:5|max:10',
      'password_confirmation' => 'required|min:5|max:10'
    ]);
    $user = User::byEmail($email);
    if($user->count() == 0){
      abort(404);
    }

    if ($reminder = Reminder::exists($user)) {
      if ($resetCode == $reminder->code){
        Reminder::complete($user, $resetCode, $request->password);
        return redirect('/login')->with('information','Please login with your new password.');
      }else
        return redirect('/');
    }else{
      return redirect('/');
    }
  }
}

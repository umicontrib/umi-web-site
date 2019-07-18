<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// GROUPE DE ROUTES ACCESSIBLE UNIQUEMENT PAR L'ADMINISTRATEUR
Route::group(['middleware' => 'admin'], function(){
  Route::get('/admin-home','AdminController@index');
});

// GROUPE DE ROUTES ACCESSIBLE UNIQUEMENT PAR LES UTILISATEURS AUTHENTIFIES
Route::group(['middleware' => 'users'], function(){
  Route::get('/user-home','UserController@index');
});

// GROUPE DE ROUTES ACCESSIBLE PAR TOUS LES VISITEURS DE LA PLATEFORME
Route::group(['middleware' => 'visiteurs'], function(){
  // Routes pour enregistrer un utilisateur
  Route::get('/register','RegistrationController@register');
  Route::post('/register','RegistrationController@postRegister');

  // Routes pour l'authentification d'un utilisateur
  Route::get('/login','LoginController@login');
  Route::post('/login','LoginController@postLogin');

  // Route pour la gestion du mot de passe oublié
  Route::get('forgot-password', 'ForgotPasswordController@forgotPassword');
  Route::post('forgot-password', 'ForgotPasswordController@postForgotPassword');

  Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
  Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');

  Route::post('/message','MessageController@createMessage');
});

// ROUTES PUBLIQUES

// Route pour l'activation de compte
Route::get('/activate/{email}/{activationCode}','ActivationController@activate');

// Route pour la deconnexion d'un utilisateur
Route::get('/logout','LoginController@logout');

// Route pour la page d'accueil
Route::get('/','IndexController@index');
Route::get('/about','IndexController@about');

Route::get('/register','RegistrationController@register');
Route::post('/register','RegistrationController@postRegister');
// Affichage du résultat de la recherche
Route::get('/recherche-service', 'IndexController@rechercheService');
<?php

namespace App\Http\Controllers;

use App\Hotel;
use DB;

class IndexController extends Controller
{
    // Page d'accueil de la plateforme
    public function index()
    {
      return view('index');
    }
    public function about(){
      return view('about');
    }
    //page des services
    public function service(){
      return view('service');
    }
    public function team(){
      return view('team');
    }
}

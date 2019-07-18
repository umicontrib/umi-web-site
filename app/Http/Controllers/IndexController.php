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
    public function comingSoon(){
      return view('coming-soon');
    }
    public function contact(){
      return view('contact');
    }
    public function faq(){
      return view('faq');
    }
    public function portfolio(){
      return view('portfolio');
    }
}

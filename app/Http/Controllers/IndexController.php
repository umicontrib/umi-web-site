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
}
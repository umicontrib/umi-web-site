<?php

namespace App\Http\Controllers;

use App\Hotelier;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin-home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
    
    return view('Ruta.index');
    
    }
    
    public function log()
    {
    return view('Ruta.log');
    }

    public function register(){
        return view('Ruta.register');
    }




}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
    
    return view('Ruta.index');    
    }

    public function index2()
    {   
    
    return view('Ruta.index2');    
    }
    
    
    public function log()
    {
    return view('Ruta.log.log');
    }

    
    public function register(){
        return view('Ruta.log.register');
    }
    public function pas(){
        return view('Ruta.log.pas');
    }

    public function job(){
        return view( 'Ruta.job.job');
    }

    public function price(){
        return view( 'Ruta.job.price');
    }

    public function client(){
        return view( 'Ruta.job.client');
    }

    public function invoice(){
        return view( 'Ruta.job.invoice');
    }

    public function config(){
        return view( 'Ruta.log.config');
    }

    public function prueba()
    {
        return view('Ruta.job.prueba');
    
}
}
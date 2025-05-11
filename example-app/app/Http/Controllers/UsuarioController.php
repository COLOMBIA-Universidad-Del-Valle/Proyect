<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuario;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificacionCorreo;


class UsuarioController extends Controller
{
    public function registrar(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:tb_usuarios,correo',
        'full_name' => 'required',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();                      
    }

    $usuario = new Usuario();
    $usuario->nombre = $request->input('full_name');
    $usuario->correo = $request->input('email');
    $usuario->contrasena = bcrypt($request->input('password'));
   
    $usuario->telefono = '0000000000';
    $usuario->tipo_usuario = 'usuario';
    $usuario->id_factura = 0;
    $usuario->id_cotizacion = 0;
    $usuario->id_funciones = 0;

    $usuario->save();

    return redirect()->back()->with('success', 'Usuario registrado correctamente.');
}

public function recuperarPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email'
    ]);

    $usuario = Usuario::where('correo', $request->email)->first();

    if (!$usuario) {
        return back()->with('error', 'El correo no está registrado.');
    }

    Mail::to($usuario->correo)->send(new VerificacionCorreo($usuario));

    return back()->with('success', 'Se ha enviado un correo de recuperación a tu dirección.');
}
}



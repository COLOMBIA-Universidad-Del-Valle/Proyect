<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuario;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificacionCorreo;
use Illuminate\Support\Facades\Hash;



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
    $usuario->contrasena = Hash::make($request->input('password'));
   
    $usuario->telefono = '0000000000';
    $usuario->tipo_usuario = 'usuario';
  
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

    public function login(Request $request)
{
    $request->validate([
        'email_login' => 'required|email',
        'password_login' => 'required',
    ]);

    $usuario = Usuario::where('correo', $request->email_login)->first();

    if ($usuario && Hash::check($request->password_login, $usuario->contrasena)) {

       session()->put('id_usuario', $usuario->id_usuario);
session()->put('usuario', $usuario->nombre);
session()->put('correo', $usuario->correo);

        return redirect()->route('vista.job')->with('success', 'Inicio de sesión exitoso.');
    } else {
        return redirect()->back()->withErrors(['email_login' => 'Credenciales incorrectas.'])->withInput();
    }
}
  


}
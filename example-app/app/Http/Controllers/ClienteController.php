<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index()
    {
        // Si quieres filtrar por usuario autenticado:
        $clientes = Cliente::where('usuario', Auth::id())->get();

        return view('clientes', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'nit' => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:500',
            'correo' => 'required|email|max:255',
        ]);

        Cliente::create([
            'usuario' => Auth::id(),
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'nit' => $request->nit,
            'direccion' => $request->direccion,
            'observaciones' => $request->observaciones,
            'correo' => $request->correo,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;
use App\Models\Item; // Si usas modelo Item
use App\Models\Cliente; // Si quieres crear cliente también

class CotizacionController extends Controller
{
    public function create()
    {
        return view('ruta.job.price');
    }

    public function store(Request $request)
    {
         

        $request->validate([
            'nombre' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:20',
            'items.*.descripcion' => 'required|string',
            'items.*.cantidad' => 'required|integer|min:1',
            'items.*.precio' => 'required|numeric|min:0',
        ]);

      
        $cliente = Cliente::firstOrCreate(
            ['nombre' => $request->cliente],
            [
                'apellido' => '', 
                'telefono' => $request->telefono,
                'correo' => $request->correo,
                'nit' => '',
                'direccion' => '',
                'observaciones' => '',
            ]
        );

        $cotizacion = Cotizacion::create([
            'usuario' => "2",

            'cliente' => $cliente->id_cliente,
            'fecha_cotizacion' => now(),
            'estado' => 'Pendiente'
        ]);

    
        foreach ($request->items as $item) {
            $cotizacion->items()->create([
                'descripcion' => $item['descripcion'],
                'cantidad' => $item['cantidad'],
                'precio' => $item['precio'],
            ]);
        }

        return redirect('/price')->with('success', 'Cotización creada correctamente.');
    }
}

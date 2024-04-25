<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            // Aquí coloca las reglas de validación para los campos de la venta
        ]);

        // Crear una nueva venta en la base de datos
        Venta::create($request->all());

        // Redirigir a la lista de ventas con un mensaje de éxito
        return redirect()->route('ventas.index')->with('success', 'La venta ha sido creada correctamente.');
    }

    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            // Aquí coloca las reglas de validación para los campos de la venta
        ]);

        // Actualizar la venta en la base de datos
        Venta::find($id)->update($request->all());

        // Redirigir a la lista de ventas con un mensaje de éxito
        return redirect()->route('ventas.index')->with('success', 'La venta ha sido actualizada correctamente.');
    }

    public function destroy($id)
    {
        // Eliminar la venta de la base de datos
        Venta::find($id)->delete();

        // Redirigir a la lista de ventas con un mensaje de éxito
        return redirect()->route('ventas.index')->with('success', 'La venta ha sido eliminada correctamente.');
    }
}


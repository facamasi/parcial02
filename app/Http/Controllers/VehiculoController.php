<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculos.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anio = $request->anio;
        $vehiculo->color = $request->color;
        // Aquí puedes agregar más atributos según la estructura de tu tabla de vehículos
        $vehiculo->save();

        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.edit', ['vehiculo' => $vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anio = $request->anio;
        $vehiculo->color = $request->color;
        // Aquí puedes agregar más atributos según la estructura de tu tabla de vehículos
        $vehiculo->save();

        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();

        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['vehiculos' => $vehiculos]);
    }
}

<!-- resources/views/ventas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Venta</h1>

    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <label for="vehiculo_id">Vehículo:</label>
        <select name="vehiculo_id" id="vehiculo_id">
            @foreach ($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca }} {{ $vehiculo->modelo }}</option>
            @endforeach
        </select>

        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
            @endforeach
        </select>

        <label for="fecha_venta">Fecha de Venta:</label>
        <input type="date" id="fecha_venta" name="fecha_venta">

        <label for="precio_final">Precio Final:</label>
        <input type="text" id="precio_final" name="precio_final">

        <!-- Agrega más campos según tus necesidades -->

        <button type="submit">Guardar</button>
    </form>
@endsection

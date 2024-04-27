<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
    </x-slot>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Listado de ventas</title>
    </head>
    <body>
        <div class="container">
            <h1>Listado de ventas</h1>
            <a href="{{ route('ventas.create') }}" class="btn btn-success">Agregar venta</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Vehículo</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fecha de venta</th>
                        <th scope="col">Precio final</th>
                        <!-- Agrega más columnas según sea necesario -->
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{ $venta->id }}</th>
                        <td>{{ $venta->vehiculo->marca }} {{ $venta->vehiculo->modelo }}</td>
                        <td>{{ $venta->cliente->nombre }} {{ $venta->cliente->apellido }}</td>
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>{{ $venta->precio_final }}</td>
                        <!-- Agrega más columnas según sea necesario -->
                        <td>
                            <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-info">Editar</a>
                            <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    </html>
</x-app-layout>


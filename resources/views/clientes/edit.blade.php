<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit cliente</h1>
        <form method="POST" action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{ $cliente->id }}">
                <div id="idHelp" class="form-text">Cliente Id</div>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" required class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre cliente" value="{{ $cliente->nombre }}">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" required class="form-control" id="apellido" aria-describedby="apellidoHelp" name="apellido" placeholder="Apellido cliente" value="{{ $cliente->apellido }}">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha Nacimiento:</label>
                <input type="date" required class="form-control" id="fecha" aria-describedby="fechaHelp" name="fecha" value="{{ $cliente->fecha_nacimiento }}">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" required class="form-control" id="direccion" aria-describedby="direccionHelp" name="direccion" placeholder="Dirección cliente" value="{{ $cliente->direccion }}">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" required class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" placeholder="Teléfono cliente" value="{{ $cliente->telefono }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email cliente" value="{{ $cliente->email }}">
            </div>
            <!-- Agrega más campos según sea necesario -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

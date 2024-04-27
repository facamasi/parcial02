<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos'; // Nombre de la tabla de vehículos en la base de datos
    protected $primaryKey = 'id'; // Clave primaria de la tabla de vehículos
    public $timestamps = false; // Deshabilita el manejo automático de los timestamps

    // Si tienes relaciones con otras tablas, como clientes o ventas, aquí puedes definirlas
    // Por ejemplo:
    
    // Relación con la tabla de clientes
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    // Relación con la tabla de ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'vehiculo_id', 'id');
    }
}

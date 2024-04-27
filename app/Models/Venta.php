<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Nombre de la clave primaria en la tabla

    // Define los campos que pueden ser asignados de forma masiva
    protected $fillable = [
        'vehiculo_id',
        'cliente_id',
        'fecha_venta',
        'precio_final',
        // Agrega más campos según sea necesario
    ];

    // Relación con el modelo de Vehiculo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    // Relación con el modelo de Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}

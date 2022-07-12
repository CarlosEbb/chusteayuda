<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table ='trabajadores';

    protected $fillable = [
        'user_id',
        'cliente_id',
        'nombre',
        'apellidos',
        'cedula',
        'fecha_de_nacimiento',
        'cargo',
        'direccion',
        'telefono',
        'genero',
        'deshabilitar',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

}

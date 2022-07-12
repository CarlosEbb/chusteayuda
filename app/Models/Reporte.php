<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $table ='reportes';

    protected $fillable = [
        'cliente_id',
        'tipo_id',
        'nombre_paciente',
        'sexo_paciente',
        'fecha_nacimiento',
        'nombre_representante',
        'telefono_representante',
        'correo',
        'direccion',
        'notificado',
    ];

    public function respuestas()
    {   
        return $this->hasMany(Respuesta::class, 'reporte_id');
    }
    

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function tipo()
    {   
        return $this->belongsTo(TipoReporte::class, 'tipo_id');
    }

}

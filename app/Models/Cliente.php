<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table ='clientes';

    protected $fillable = [
        'user_id',
        'direccion',
        'numero_contacto',
        'logo',
        'foto_encabezado',
        'color_encabezado',
        'color_texto_encabezado',
        'check_encabezado',
        'check_logo',
        'check_name',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class, 'cliente_id');
    }

    public function ausentismo()
    {
        return $this->hasMany(Ausentismo::class, 'cliente_id');
    }

    public function cocola()
    {
        return $this->hasMany(Cocola::class, 'cliente_id');
    }

    public function copasst()
    {
        return $this->hasMany(Copasst::class, 'cliente_id');
    }

    public function matrizPeligro()
    {
        return $this->hasMany(MatrizPeligro::class, 'cliente_id');
    }

    public function seguimientoAcciones()
    {
        return $this->hasMany(SeguimientoAcciones::class, 'cliente_id');
    }

    public function anual()
    {
        return $this->hasMany(Anual::class, 'cliente_id');
    }

    public function cargo()
    {
        return $this->hasMany(Cargo::class, 'cliente_id');
    }

    public function zonaLugar()
    {
        return $this->hasMany(ZonaLugar::class, 'cliente_id');
    }

    public function procesos()
    {
        return $this->hasMany(Procesos::class, 'cliente_id');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'cliente_id');
    }

    public function presupuesto()
    {
        return $this->hasMany(Presupuesto::class, 'cliente_id');
    }

    public function dataEPP()
    {
        return $this->hasMany(DataEPP::class, 'cliente_id');
    }
}

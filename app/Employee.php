<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // protected $table = 'employees';
    protected $fillable = [
        'foto',
        'name',
        'documento',
        'sexo',
        'rh',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'edad',
        'numero_telefono',
        'direccion',
        'cargo',
        'seccion_id',
        'alergias_medicamento',
        'telefono_emergencia',
        'enfermedad_laboral',
        'accidentes_trabajo',
        'enfermedad_comun',
        'covid'
    ];
    public function seccion(){
        return $this->belongsTo(Seccion::class);
        
    }
}

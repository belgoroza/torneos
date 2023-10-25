<?php

namespace App\Models\Torneos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $table = "torneo_persona";
    protected $fillable = ['documento_numero','nombres','apellidos','telefono','email','pais_nacimiento','fecha_nacimiento','ciudad_actual','domicilio_actual','status'];
}

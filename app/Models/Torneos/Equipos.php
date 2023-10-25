<?php

namespace App\Models\Torneos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;
    protected $table = "torneo_equipo";
    protected $fillable = ['user_id','user_codigo','organizacion_id','codigo','nombre','color_1','color_2','logo','lema','representante_id','categoria_id','descripcion','status'];
}

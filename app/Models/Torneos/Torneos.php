<?php

namespace App\Models\Torneos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;
    protected $table = "torneo";
    protected $fillable = ['user_id','codigo','nombre','fecha_inicio','fecha_fin','modalidad_id','categoria_id','status'];
}

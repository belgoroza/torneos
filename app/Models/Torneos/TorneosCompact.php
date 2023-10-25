<?php

namespace App\Models\Torneos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TorneosCompact extends Model
{
    use HasFactory;
    protected $table = "torneo_compact";
    protected $fillable = ['torneo_id','organizacion_id','equipo_id'];

    public function organizaciones()
    {
        return $this->hasMany(Organizaciones::class,'id','organizacion_id');
    }

    public function equipos()
    {
        return $this->hasMany(Equipos::class,'id','equipo_id')->select('id','nombre','codigo','logo');
        // return $this->hasMany('App\Models\Torneos\Equipos','id')->select('id','nombre','codigo');
    }
}

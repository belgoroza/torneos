<?php

namespace App\Models\Torneos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizaciones extends Model
{
    use HasFactory;
    protected $table = "torneo_organizacion";
    protected $fillable = ['torneo_id','user_id','user_codigo','organizacion','codigo','documento_tipo','documento_numero','pais','ciudad','direccion','telefono','representante','manager_nombre','manager_telefono','status'];

    public function torneos()
    {
        // return $this->hasMany('App\Models\Torneos\Organizaciones','torneo_id')->select('id','organizacion','codigo');
        return $this->hasMany('App\Models\Torneos\TorneosCompact','torneo_id');
    }

    public function organizaciones()
    {
        return $this->hasMany('App\Models\Torneos\TorneosCompact','organizacion_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;


    protected $table = "xp_agenda";
    protected $fillable = ['asunto','inicio','fin','alarma','notificar','telefono','comentario','status'];

}

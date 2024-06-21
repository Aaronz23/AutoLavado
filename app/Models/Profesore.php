<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesore extends Model
{
    use HasFactory;

    protected $table = "profesores";

    public function division(){
        return $this->belongsTo(Division::class,'id_division');
    }
    ///puestto

  

    public function puesto(){
        return $this->belongsTo(Puestos::class,'id_puesto');
    }
}

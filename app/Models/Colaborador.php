<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    //Indica a que tabla apunta el modelo
    protected $table = "colaboradores"; 

    //Relacion uno a muchos con tabla Ingresos
    public function ingresos(){
        return $this->hasMany(Ingreso::class);
    }
}

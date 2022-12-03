<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $fillable = ['colaborador_id', 'fecha_ingreso'];

    //Indica a que tabla apunta el modelo
    protected $table = "ingresos"; 

    //Relacion uno a uno con tabla colaboradores
    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }
}

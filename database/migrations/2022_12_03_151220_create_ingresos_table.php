<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->dateTime("fecha_ingreso");
            $table->unsignedBigInteger("colaborador_id");
            $table->unsignedBigInteger("tipo_ingreso_id");
            $table->foreign("colaborador_id")->references("id")->on('colaboradores');
            $table->foreign("tipo_ingreso_id")->references("id")->on('tipo_ingresos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
};

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Colaborador;
use App\Models\TipoIngreso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
             'email' => 'prueba@example.com',
         ]);

        Colaborador::factory(10)->create();

        TipoIngreso::create([
            'nombre' => "Entrada",
        ]);

        TipoIngreso::create([
            'nombre' => "Salida",
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tareas')->insert([
            'tareas'=> 'Ejemplo 1',
            'descripcion'=> 'Ejemplo de descripcion',
            'tipo'=> 'Escuela',
            'created_at'=> now(),
            'updated_at'=> now(),

        ]);

    }
}

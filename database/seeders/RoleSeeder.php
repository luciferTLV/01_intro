<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'detalle'=>"admistrador",
            'descripcion'=>"Encargado de manipular la aplicaion en su totalidad"
        ]);

        DB::table('roles')->insert([
            'detalle'=>"Secretaria",
            'descripcion'=>"Encargado de atender a los alumnos"
        ]);

        DB::table('roles')->insert([
            'detalle'=>"Estudiante",
            'descripcion'=>"Estudiante egresado"
        ]);

    }
}

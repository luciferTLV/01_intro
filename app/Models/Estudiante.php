<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estudiante extends Model
{
    use HasFactory;

    //mostrar todo los estudiantes 
    public function mostrar_estudiantes(){
        $estudiantes = DB::table('estudiantes')->paginate(5);
        return $estudiantes;

    }
}

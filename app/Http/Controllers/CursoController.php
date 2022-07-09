<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    
    public function mostrar()
    {
        
        $ciclo1 = Auth::user()->ciclo;
        $facultad1 = Auth::user()->facultad;

       $sql =  DB::table('cursos')->join('users','users.id','=','cursos.id_user')
        ->select("cursos.nombre",'cursos.ciclo', 'cursos.facultad','cursos.codigo','cursos.id')
        ->where('cursos.facultad',"=",$facultad1)
        ->where('cursos.ciclo',"=",$ciclo1)
        ->get();
          
        return view("mostrarCurso")->with("sql", $sql);
        
    
    }

}

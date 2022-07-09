<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Curso; 
use Illuminate\Support\Facades\Auth;

class MatriculaController extends Controller
{
  public function procesar(Request $request)
  {
    $curso2 = Curso::all(); 

    $curso2->checkbox = $request->input(""); 

   return view("matricula")->with("curso2",$curso2); 

    
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Alumno;
use App\Models\Estado;


class UsuariosController extends Controller
{
    function listar(){
        $alumnos = Alumno::orderby('edad', 'DESC')
                                        ->get();
                                        //consulta de SQL
                                        /*->toSql();
                                        echo $alumnos;die;*/
        //dd ($alumnos);
        return view('listado', compact('alumnos'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class EmpleadosController extends Controller
{
    function index(){
        $listado = DB::table("employees")->get();
        return view('empleados', compact('listado'));
    }
}
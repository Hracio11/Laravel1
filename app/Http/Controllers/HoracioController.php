<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoracioController extends Controller
{
    function listar(){
        return view("horacio");
    }
}

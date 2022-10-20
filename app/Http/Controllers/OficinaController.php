<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficinas;

class OficinaController extends Controller
{
   
   public function listar(){
      $office = Oficinas::get();
      return view('oficinas', compact('office'));
 }
}

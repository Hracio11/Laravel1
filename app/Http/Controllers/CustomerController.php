<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function listar(){
        $clientes = Customer::get();
        return dd($clientes); 
   }
}

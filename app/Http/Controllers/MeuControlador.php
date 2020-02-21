<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function mult($n1 , $n2){
       return $n1 + $n2;
    }
}

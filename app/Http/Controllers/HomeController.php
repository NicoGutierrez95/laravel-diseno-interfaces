<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ #método invoke, solo cuando queremos que el controlador administre una única ruta
        /*return view('welcome');*/
        return "Bienvenido a la página principal";
    }
}

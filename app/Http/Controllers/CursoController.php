<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return "Bienvenido a la página de cursos";
    }

    public function create() {
        return "En esta página puedes crear tus cursos.";
    }

    public function show($curso) {
        return "bienvenido al curso de $curso";
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*Aquí se definen las rutas del proyecto*/

#ruta simple con controlador
Route::get('/', HomeController::class);

/*
#rutas con métodos dentro de clases para controlar
Route::get('cursos', [CursoController::class, 'index']); # [archivoControlador::clase, 'método'];
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);
*/

#Grupos de rutas: cuando la ruta ocupa el mismo controlador y clase pero distintos métodos dentro de la misma se puede utilizar un grupo de rutas
Route::controller(CursoController::class)->group(function() {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
}); 

#Rutas con variable null
/*
Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) { #categoria como opcional $categoria?, puede ser null
    #este if se debe derivar a un controlador
    if($categoria) {
        return "Bienvenido al curso de $curso, de la categoria $categoria.";
    }else{
        return "bienvenido al curso de $curso.";
    }
});*/

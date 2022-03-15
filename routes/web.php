<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tarea', TareaController::class);
//Route::get('/tareas', [TareaController::class, 'index']);
//Route::get('/tareas/create', [TareaController::class, 'create']);
//Route::post('/tareas/store', [TareaControlle::class, 'store']);


Route::get('/hola-mundo', function () {
    return view('paginas/holamundo');
});


Route::get('/grabaciones/{nombre}/{anio?}/{cantidad?}', function ($nombre,$anio=null,$cantidad=null) {


    return view('paginas/grabaciones', compact('nombre', 'anio','cantidad'));
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [CadastroController::class, 'mostrarFormularioRegistro']);
Route::post('/registro', [CadastroController::class, 'processarRegistro']);
Route::get('/usuarios', [CadastroController::class, 'mostrarUsuariosCadastrados']);

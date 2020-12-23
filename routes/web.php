<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertasController;

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
Route::resource('/ofertas',
    OfertasController::class);
    //->middleware('auth');

Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/informacion', function () {
    return view('informacion');
});

Route::get('/ofertas', function () {
    return view('ofertas');
});

Route::get('/ofertas/{id}', function () {
    return view('carta-oferta');
});

Route::get('/mis-ofertas', function () {
    return view('mis-ofertas');
});

//Gestión parte privada - Mis Ofertas

Route::resource('mis-ofertas',
    OfertasController::class)
    ->middleware('auth');


// Control de usuarios - LoginController

Route::get('/login',
    [App\Http\Controllers\LoginController::class,'frmLogeo'])
    ->name('login');

Route::post('/login',
    [App\Http\Controllers\LoginController::class,'authenticate']);

Route::get('/logout', [
    App\Http\Controllers\LoginController::class,'logout'
]);

// Control de usuarios - UsersController

Route::post('usuario/registro', [
    App\Http\Controllers\UsersController::class, 'registrarUsuario'
]);

// Control de usuarios - DIRECTO - editar perfil
Route::get('editar-perfil',function() {
    return view('editar-perfil');
});



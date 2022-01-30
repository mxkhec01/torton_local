<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//rutas publicas
Route::get('usuario', [UsuarioController::class, 'index']);
Route::post('/login',[UsuarioController::class,'login']);

//Rutas protegidas
Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::get('viajes/{id}', [UsuarioController::class,'obten_viajes']);
    Route::post('/logout',[UsuarioController::class,'logout']);
});
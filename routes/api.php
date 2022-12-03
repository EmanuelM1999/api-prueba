<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\IngresoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta encargada del modelo de colaboradores
Route::apiResource("colaborador", ColaboradorController::class)->only(['show']);

//Ruta encargada del modelo de ingresos
Route::apiResource("ingreso", IngresoController::class)->only(['store', 'show']);

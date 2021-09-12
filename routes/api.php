<?php
use App\Torbica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorbicasController;
use App\Http\Controllers\KupovinasController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/torbicas', [TorbicasController::class, 'getAllTorbice']);
Route::post('/torbicas', [TorbicasController::class, 'addTorbica']);
Route::put('/torbicas/{torbica}', [TorbicasController::class, 'editTorbica']);
Route::delete('/torbicas/{torbica}', [TorbicasController::class, 'deleteTorbica']);

Route::get('/kupovinas', [KupovinasController::class, 'getKupovine']);
Route::post('/kupovinas', [KupovinasController::class, 'addKupovina']);

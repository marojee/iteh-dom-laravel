<?php

use App\Http\Controllers\AutenfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrzaveController;
use App\Http\Controllers\StadioniController;

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

Route::resource('drzave', DrzaveController::class)->only('index', 'show');
Route::resource('stadioni', StadioniController::class)->only('index', 'show');
Route::post('/registracija', [AutenfController::class, 'registracija']);
Route::post('/login', [AutenfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AutenfController::class, 'logout']);
    Route::resource('drzave', DrzaveController::class)->only('destroy', 'update');
});

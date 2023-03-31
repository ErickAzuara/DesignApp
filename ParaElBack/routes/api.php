<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControl;
use App\Http\Controllers\CareerControl; //La importacion de controller al la rutas de API

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

Route::post('/students',[StudentControl::class,'index']); //Es el enlazamientom entre el controller para los api y es GET
Route::post('/show_student',[StudentControl::class,'show']);
Route::post('/store_career',[CareerControl::class,'store']);
Route::post('/store_student',[StudentControl::class,'store']);
Route::post('/delete_student',[StudentControl::class,'destroy']);
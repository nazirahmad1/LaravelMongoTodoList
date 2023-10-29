<?php

use App\Http\Controllers\TodoController;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
;
Route::get('/', [TodoController::class,'index']);
Route::get('/task/create',[TodoController::class,'create']);
Route::post('/task/create',[TodoController::class,'store']);
Route::get('/task/{id}/edit',[TodoController::class,'edit']);
Route::put('/task/{id}/update',[TodoController::class,'update']);
Route::delete('/task/{id}/delete',[TodoController::class,'destroy']);


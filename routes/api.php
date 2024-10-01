<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get('/workers',[WorkerController::class,'index']);
route::post('/add_worker',[WorkerController::class,'store']);
route::get('/search/{id}',[WorkerController::class,'edit']);
Route::put('/update/{id}', [WorkerController::class, 'update']);
route::DELETE('/delete/{id}',[WorkerController::class,'destroy']);
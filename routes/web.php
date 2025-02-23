<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Upload;
use App\Http\Controllers\EmployController;

Route::get('/', function () {
    return view('welcome');
});


// Route::match(['get','post'],'upload',[Upload::class,'index']);
// Route::post('upload',[Upload::class,'index']);

Route::view('insert','dtainsert');
Route::post('insert',[EmployController::class,'insert']);
Route::get('list', [EmployController::class,'list']);
Route::get('delete/{id}',[EmployController::class,'delete']);
Route::get('edit/{id}',[EmployController::class,'showData']);
Route::put('edit-employ/{id}',[EmployController::class,'update']);
Route::get('search',[EmployController::class,'search']);
Route::post('delete-multiple',[EmployController::class,'deleteMultiple']);


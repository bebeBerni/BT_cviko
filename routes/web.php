<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/test', [TestController::class, 'testAction']);

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::get('/example/create2', [ExampleController::class, 'showForm2']);
Route::post('/example/result2', [ExampleController::class, 'processForm2']);

<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TimeApiController;
use App\Http\Controllers\TimeRpcController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/hello',[TestController::class,'testAction2'] );

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);

Route::prefix('rest')->group(function () {
    Route::get('/books', [BookRestController::class, 'index']);
    Route::get('/books/create', [BookRestController::class, 'create']);
    Route::post('/books', [BookRestController::class, 'store']);
    Route::get('/books/{id}', [BookRestController::class, 'show']);
    Route::get('/books/{id}/edit', [BookRestController::class, 'edit']);
    Route::delete('/books/{id}', [BookRestController::class, 'destroy']);
    Route::patch('/books/{id}', [BookRestController::class, 'update']);

   //Route::resource('books', BookRestController::class);
});

Route::prefix('restapi')->group(function () {
    Route::get('/books', [BookApiController::class, 'index']);
    Route::post('/books', [BookApiController::class, 'store']);
    Route::get('/books/{id}', [BookApiController::class, 'show']);
    Route::delete('/books/{id}', [BookApiController::class, 'destroy']);
    Route::patch('/books/{id}', [BookApiController::class, 'update']);

    //Route::apiresource('books', BookApiController::class);
});

Route::get('/time', [TimeApiController::class, 'getTime']);

Route::prefix('rpc')->group(function () {
    Route::get('/time', [TimeRpcController::class, 'showTime']);
});

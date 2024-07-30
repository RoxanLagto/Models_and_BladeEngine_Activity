<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});
    
Route::get('/books', [BookController::class, 'index']);
=======
Route::get('/', [BookController::class, 'books']);
>>>>>>> 90c51822e85230dbed609719ab4aaffad9811954

<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/users', UserController::class)
        ->except('index');

Route::get('/',[UserController::class,'index'])->name('users.index');


// Route::get('/show/users/{id}',UserController::class)->name('show-user');
// users.create
// users.store
// users.index
// users.edit
// users.update
// users.destroy

// Route::resourse('/posts',PostController::class);

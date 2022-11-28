<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, "login"])->name('login');
Route::get('/logout', [UserController::class, "logout"])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, "home"])->name('home');
    Route::get('/home', [UserController::class, "home"])->name('home');
    Route::get('/todos', [TodoController::class, "index"])->name('todo.index');
    Route::get('/todos/create', [TodoController::class, "create"])->name('todo.create');
    Route::get('/todos/{id}/get', [TodoController::class, "show"])->name('todo.show');
    Route::get('/todos/{id}/edit', [TodoController::class, "edit"])->name('todo.edit');
    Route::get('/todos/{id}/delete', [TodoController::class, "destroy"])->name('todo.delete');
    Route::patch('/todos/{id}', [TodoController::class, "update"])->name('todo.update');
    Route::post('/todos', [TodoController::class, "store"])->name('todo.store');

    Route::get('/me/{id}', [UserController::class, "me"])->name('user.me');
    Route::patch('/users/{id}/edit', [UserController::class, "edit"])->name('user.edit');
});
Route::get('/test', function () {
    return view('test');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php


Route::resource('todos', TodoController::class);
// Route to display the create todo form
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Route to store a new todo
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// Route to display a specific todo
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');

// Route to display the edit todo form
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// Route to update a todo
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

// Route to delete a todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');


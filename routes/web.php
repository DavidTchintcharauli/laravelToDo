<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::redirect('/', '/tasks');

Route::resource('tasks', TaskController::class);

Route::get('/tasks/create', [TaskController::class,'create'])->name('tasks.create');
Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');

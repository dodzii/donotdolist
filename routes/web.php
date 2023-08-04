<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');
Route::post('/tasks', 'App\Http\Controllers\TasksController@store');
Route::delete('/tasks/{task}', 'App\Http\Controllers\TasksController@destroy');
Route::get('/tasks/{task}/edit', 'App\Http\Controllers\TasksController@edit');
Route::patch('/tasks/{task}', 'App\Http\Controllers\TasksController@update');







require __DIR__.'/auth.php';

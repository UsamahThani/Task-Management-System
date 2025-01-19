<?php

use App\Http\Controllers\Task\TasksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('/auth/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/index', function () {
    return view('index');

});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');

Route::get('/tasks', [TasksController::class, 'index'])->middleware('auth')->name('tasks');

Route::get('/tasks/create', function () {
    return view('tasks.create');
})->middleware('auth')->name('tasks.create');

Route::post('/tasks', [TasksController::class, 'store'])->middleware('auth')->name('tasks.store');

Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->middleware('auth')->name('tasks.edit');
Route::post('/tasks/edit/{id}', [TasksController::class, 'update'])->middleware('auth')->name('tasks.update');

Route::get('/tasks/delete/{id}', [TasksController::class, 'delete'])->middleware('auth')->name('tasks.delete');
Route::delete('/tasks/{id}', [TasksController::class, 'destroy'])->middleware('auth')->name('tasks.destroy');
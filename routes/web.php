<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DashBoardController;

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

Route::get('/', [DashBoardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::post('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::get('/courses/{id}/destroy', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{id}/destroy', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::post('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
Route::get('/rooms/{room}/destroy', [RoomController::class, 'destroy'])->name('rooms.destroy');

Route::get('/change-password', [PasswordController::class, 'create'])->name('password.change');
Route::post('/change-password', [PasswordController::class, 'store'])->name('password.store');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::post('/create_profile', [App\Http\Controllers\HomeController::class, 'create_profile'])->name('create_profile');
Route::get('/showeditprofile/{id}', [App\Http\Controllers\HomeController::class, 'showeditprofile'])->name('showeditprofile');
Route::post('/updatenewprofile/{id}', [App\Http\Controllers\HomeController::class, 'updatenewprofile'])->name('updatenewprofile');

Route::get('/location_details', [App\Http\Controllers\HomeController::class, 'location_details'])->name('location_details');
Route::get('/map_location', [App\Http\Controllers\HomeController::class, 'map_location'])->name('map_location');
Route::get('/summary_internship', [App\Http\Controllers\HomeController::class, 'summary_internship'])->name('summary_internship');
Route::get('/teacher_notes', [App\Http\Controllers\HomeController::class, 'teacher_notes'])->name('teacher_notes');
Route::get('/work_day', [App\Http\Controllers\HomeController::class, 'work_day'])->name('work_day');


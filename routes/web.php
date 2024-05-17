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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/protfolio', function () {
    return view('protfolio');
});
Route::get('/services', function () {
    return view('services');
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');


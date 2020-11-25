<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use Laravel\Fortify\Fortify;

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
    return redirect()->route('home.index');
});

Route::resource('/home', PhotoController::class)->only(['index', 'create', 'store'])->middleware('auth');

// Auth::routes();
Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});

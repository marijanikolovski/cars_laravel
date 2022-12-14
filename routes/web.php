<?php

use App\Http\Controllers\CarsController;
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
    $name = 'Marija';
    $age = 39;

    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function() {
    $about = 'About us';

    return view('about', compact('about'));
});

Route::get('/cars/index', [CarsController::class, 'index']);

Route::get('/cars/show/{id}', [CarsController::class, 'show'])->name('single-car');
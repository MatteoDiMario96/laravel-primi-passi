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
    $data = [
        'name' => 'Matteo',
        'surname' => 'Di Mario',
        'age' => 27,
        'isMarried' => false
    ];
    return view('home', $data);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/work-with-us', function () {
    return view('work-with-us');
});

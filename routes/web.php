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
    return view('home',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
        "home" => "active",
    ]);
});

Route::get('/about_us', function () {
    return view('about_us',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
    ]);
});

Route::get('/contact_us', function () {
    return view('contact_us',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
    ]);
});

Route::get('/employee', function () {
    return view('employee',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
    ]);
});

Route::get('/product', function () {
    return view('product',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
    ]);
});


// Route::get('/home', function () {
//     return view('home',
//     [
//         "pagetitle" => "home",
//         "maintitle" => "Virgo Furnishers",
//     ]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

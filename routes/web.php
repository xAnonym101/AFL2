<?php

use App\Http\Controllers\Controller;
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
        "bg_color"=> "rgba(45,37,26,1)",
    ]);
});

Route::get('/about_us', function () {
    return view('about_us',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
        "about"=> "active",
        "bg_color"=> "rgba(31,35,37,100)",
    ]);
});

Route::get('/contact_us', function () {
    return view('contact_us',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
        "contact"=> "active",
        "bg_color"=> "rgba(45,37,26,1)",
    ]);
});

Route::get('/employee', function () {
    return view('employee',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
        "employee"=> "active",
        "bg_color"=> "rgba(45,37,26,1)",
    ]);
});

Route::get('/product', function () {
    return view('product',
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
        "product"=> "active",
        "bg_color"=> "rgba(45,37,26,1)",
    ]);
});

Route::get("/product/{id}", Controller::class, 'showDetail');


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

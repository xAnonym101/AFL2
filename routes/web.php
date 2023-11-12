<?php

use App\Http\Controllers\BranchesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WorkersController;
use Illuminate\Support\Facades\DB;
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
    return view('Home',
    [
        "pagetitle" => "Home",
        "maintitle" => "Virgo Furnishers",
        "home" => "active",
        "bg_color"=> "rgba(45,37,26,1)",
    ]);
});

Route::get('/About-Us', function () {
    return view('about_us',
    [
        "pagetitle" => "About Us",
        "maintitle" => "Virgo Furnishers",
        "about"=> "active",
        "bg_color"=> "rgba(31,35,37,100)",
    ]);
});

Route::get("/Employee/{id}", [WorkersController::class, 'list'])->name('workers');

Route::get("/Furnitures", [ProductsController::class,'furnitures']);

Route::get("/Furniture-Detailed/{id}", [ProductsController::class, 'showDetail'])->name('products.show');

Route::get('/Contact-Us', [BranchesController::class,'ContactUs']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

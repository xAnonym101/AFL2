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

Route::get("/", [Controller::class,'home']);

Route::get('/About-Us', [Controller::class,'about_us']);

Route::get("/About-Us", [Controller::class,'about']);

Route::get("/Employee/{id}", [WorkersController::class, 'list']);

Route::get("/Furnitures", [ProductsController::class,'furnitures']);

Route::get("/Furniture-Detailed/{id}", [ProductsController::class, 'showDetail']);

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

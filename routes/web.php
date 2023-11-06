<?php

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

Route::get('/home', function () {
    return view('home', 
    [
        "pagetitle" => "home",
        "maintitle" => "Virgo Furnishers",
    ]);
});

Route::get('/branch', function () {
    $branches = DB::table('branches')->get();
    return view('branch', 
    [
        "pagetitle" => "branches",
        "maintitle" => "Branches :",
        "branches"=> $branches
    ]);
});

Route::get('/workers', function () {
    $workers = DB::table('workers')->get();
    return view('workers', 
    [
        "pagetitle" => "workers",
        "maintitle" => "Workers :",
        "workers"=> $workers
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

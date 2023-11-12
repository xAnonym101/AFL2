<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view('home',
        [
            "pagetitle" => "Home",
            "maintitle" => "Virgo Furnishers",
            "home" => "active",
            "bg_color"=> "rgba(45,37,26,1)",
        ]
    );
    }
    public function about(){
        return view('about_us',
        [
            "pagetitle" => "About Us",
            "maintitle" => "Virgo Furnishers",
            "about"=> "active",
            "bg_color"=> "rgba(31,35,37,100)",
        ]
    );
}


    // Route::get('/About-Us', function () {
    //     return view('about_us',
    //     [
    //         "pagetitle" => "About Us",
    //         "maintitle" => "Virgo Furnishers",
    //         "about"=> "active",
    //         "bg_color"=> "rgba(31,35,37,100)",
    //     ]);
    // });



    // Route::get('/', function () {
    //     return view('Home',
    //     [
    //
    //     ]);
    // });
}

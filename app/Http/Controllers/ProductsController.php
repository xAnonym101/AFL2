<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BranchesController;
use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductsRequest $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }
    public function getDetail($pivot, $id)
    {
        $branchesController = new BranchesController();
        $locations = DB::table("branches_products")->where("products_id", $id)->get("branches_id");
        // print_r($locations);
        $result[] = $branchesController->getLocations($locations);

        // foreach ($pivot as $item) {
        //     if ($item->products_id == $id) {
        //         $name = $branchesController->getName($item->products_id);
        //         $locations[] = $name;
        //     }
        // }

        return $result;
    }

    public function showDetail($id)
    {
        $product = DB::table("products")->where("id", $id)->first();
        $pivot = DB::table("branches_products")->get();

        $array = $this->getDetail($pivot, $id);

        $uniqueLocations = is_array($array) ? array_unique(Arr::flatten($array)) : [];
        return view("productdetail", [

            "pagetitle" => "Details",
            "bg_color" => "rgba(45,37,26,1)",
            "product" => "active",
            "content" => $product,
            "result" => $uniqueLocations
        ]);
    }

    public function furnitures() {
        $content = DB::table("products")->get();

        return view("product", [
            "pagetitle" => "home",
            "maintitle" => "Virgo Furnishers",
            "product"=> "active",
            "bg_color"=> "rgba(45,37,26,1)",
            "content" => $content
        ]);
    }


}

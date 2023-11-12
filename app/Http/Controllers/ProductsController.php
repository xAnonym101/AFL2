<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BranchesController;
use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use Illuminate\Support\Facades\DB;
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
    public function getDetail($pivot, $content)
    {
        $branchesController = new BranchesController();
        $array = [];

        foreach ($pivot as $item) {
            if ($item->products_id == $content->id) {
                $name = $branchesController->getName($item->products_id);
                $array[] = $name;
            }
        }
        Log::info($array);

        return $array;
    }

    public function showDetail($id)
    {
        $product = DB::table("products")->where("id", $id)->first();
        $pivot = DB::table("branches_products")->get();

        $branchesController = new BranchesController();
        $array = $this->getDetail($pivot, $product);
        return view("productdetail", [

            "pagetitle" => "Details",
            "bg_color" => "rgba(45,37,26,1)",
            "product" => "active",
            "content" => $product,
            "array" => $array
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

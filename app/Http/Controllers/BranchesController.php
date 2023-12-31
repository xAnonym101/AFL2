<?php

namespace App\Http\Controllers;

use App\Models\branches;
use App\Http\Requests\StorebranchesRequest;
use App\Http\Requests\UpdatebranchesRequest;
use Illuminate\Support\Facades\DB;

class BranchesController extends Controller
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
    public function store(StorebranchesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(branches $branches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebranchesRequest $request, branches $branches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(branches $branches)
    {
        //
    }

    public function getLocations($content)
    {
        $branches = [];
        foreach ($content as $item) {
            $location = '';
            $result = DB::table("branches")->where("id", $item->branches_id)->pluck('branch_location');
            if ($result) {
                $location = $result;
            }
            $branches[] = $location;
        }

        return $branches;
    }

    public function furnitureCount($pivot, $branchID, $products)
    {
        $count = 0;
        foreach ($pivot as $pivot) {
            if ($pivot->branches_id == $branchID) {
                $stocks = DB::table("products")->where("id", $pivot->products_id)->pluck('stocks')->first();
                $count = $count + $stocks;
            }
        }
        return $count;
    }
    
    public function ContactUS()
    {
        $branches = DB::table("branches")->get();
        $pivot = DB::table("branches_products")->get();
        $products = DB::table("products")->get();
        $array = [];
        foreach ($branches as $branch) {
            $array[] = $this->furnitureCount($pivot, $branch->id, $products);
        }
        return view("contact_us", [
            "branches" => $branches,
            "pivot" => $pivot,
            'pagetitle' => "",
            "contact" => "active",
            "bg_color" => "rgba(45,37,26,1)",
            "furniture_count" => $array
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\workers;
use App\Http\Requests\StoreworkersRequest;
use App\Http\Requests\UpdateworkersRequest;

class WorkersController extends Controller
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
    public function store(StoreworkersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateworkersRequest $request, workers $workers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(workers $workers)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $weight;

    public function __construct() {
        $this->weight = new Weight();
    }
    public function index()
    {
        echo json_encode($this->weight->all());
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo json_encode($this->weight->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weight $weight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weight $weight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weight $weight)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Curve;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $curve;
    public function __construct() {
        $this->curve = new Curve();
    }

    public function index()
    {
        echo json_encode($this->curve->where('active', 1)->get());
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
        echo json_encode($this->curve->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curve $curve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curve $curve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curve $curve)
    {
        //
    }
}

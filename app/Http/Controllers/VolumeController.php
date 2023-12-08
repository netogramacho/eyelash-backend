<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $volume;
    public function __construct() {
        $this->volume = new Volume();
    }
    public function index()
    {
        echo json_encode($this->volume->all());
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
        echo json_encode($this->volume->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volume $volume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volume $volume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volume $volume)
    {
        //
    }
}

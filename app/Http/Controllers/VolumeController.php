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
    public function __construct()
    {
        $this->volume = new Volume();
    }
    public function index()
    {
        try {
            $volumes = $this->volume->where('active', 1)->get();

            return $volumes;
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $volume = $this->volume->findOrFail($id);

            return $volume;
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $this->volume->
                where(['id' => $id])->
                update([
                    'active' => 0
                ]);
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
}

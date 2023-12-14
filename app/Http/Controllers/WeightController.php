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
        try {
            $weights = $this->weight->where('active', 1)->get();

            return $weights;
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
            $weight = $this->weight->findOrFail($id);

            return $weight;
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
            $this->weight->
                where(['id' => $id])->
                update([
                    'active'=> 0,
                ]);
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
}

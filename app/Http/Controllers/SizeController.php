<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $size;
    public function __construct()
    {
        $this->size = new Size();
    }
    public function index()
    {
        try {
            $sizes = $this->size->where('active', 1)->get();

            return $sizes;
        } catch (\Exception $e) {
            response()->json(['error' => $e->getMessage()], $e->getCode());
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
            $size = $this->size->findOrFail($id);
            return $size;
        } catch (\Exception $e) {
            response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $this->size->
                where(['id' => $id])->
                update([
                    'active' => 0,
                ]);
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
}

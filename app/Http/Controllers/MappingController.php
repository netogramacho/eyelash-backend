<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

use App\Models\Mapping;

class MappingController extends Controller
{
    private $mapping;

    public function __construct() {
        $this->mapping = new Mapping();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $mappings = $this->mapping->where('active', 1)->get();

            return $mappings;
        } catch (Exception $e) {
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
            $mapping = $this->mapping->findOrFail($id);

            return $mapping;
        } catch (Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $this->mapping->
                where(['id' => $id])->
                update([
                    'active' => 0,
                ]);
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
}

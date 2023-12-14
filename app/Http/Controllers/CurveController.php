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
    public function __construct()
    {
        $this->curve = new Curve();
    }

    public function index()
    {
        try {
            $curves = $this->curve->where('active', 1)->get();

            return $curves;
        } catch (\Exception $e) {
            return response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $currentUser = auth()->userOrFail();
            $curve = new Curve();
            $curve->curve = $request->curve;
            $curve->user_id = $currentUser->id;
            $curve->save();

            return $curve;
        } catch (\Exception $e) {
            return response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $curve = $this->curve->findOrFail($id);

            return $curve;
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
            $this->curve->
                where(['id' => $id])->
                update([
                    'active' => 0
                ]);
        } catch (\Exception $e) {
            response()->json(['error'=> $e->getMessage()], $e->getCode());
        }
    }
}

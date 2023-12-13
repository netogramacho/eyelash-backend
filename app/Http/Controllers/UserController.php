<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{

    private $user;
    private $relations = ['curves', 'mappings', 'sizes', 'volumes', 'weights'];

    public function __construct() {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo json_encode($this->user->with($this->relations)->get());
        echo json_encode($this->user->where('active', 1)->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $this->user->create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
            ]);
        } catch (\Exception $e) {
            echo json_encode(['error'=> $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->user->where('id', $id)->with($this->relations)->get();
        echo json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->user->where(['id'=> $id])->update([
                'name'=> $request->name,
            ]);
        } catch (\Exception $e) {
            echo json_encode(['error'=> $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $this->user->where(['id'=> $id])->delete();
        } catch (\Exception $e) {
            echo json_encode(['error'=> $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

use App\Models\User;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{

    private $user;
    private $relations = ['curves', 'mappings', 'sizes', 'volumes', 'weights'];

    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = $this->user->where('active', 1)->get();
            return $users;
        } catch (Exception $e) {
            return response()->json(['error' => "Nenhum usuário encontrado."], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $verifyEmail = $this->user->where('email', $request->email)->first();
            if($verifyEmail) {
                throw new Exception('E-mail já cadastrado.', 400);
            }

            $uuid = Uuid::uuid4()->toString();

            $user = new User();
            $user->id = $uuid;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return $user;
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = $this->user->with($this->relations)->findOrFail($id);
            return $user;
        } catch (Exception $e) {
            return response()->json(['error' => "Usuário não encontrado"], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = $this->user->findOrFail($id);
            $user->name = $request->name;
            $user->save();

            return $user;
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $this->user->
                where(['id' => $id])->
                update([
                    "active" => 0
                ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage(), $e->getCode()]);
        }
    }

    public function resources() {

        try {
            $currentUser = auth()->userOrFail();

            $resources = $this->user->with($this->relations)->findOrFail($currentUser->id);

            return $resources;
        } catch (Exception $e) {
            return response()->json(['error' => "Usuário não encontrado"], 404);
        }
    }
}

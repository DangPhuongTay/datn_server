<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id','asc')->get();
        return response([
            'data'=>$user
        ]);
    }
    public function user_id($id)
    {
        $user_id = User::find($id);
        if($user_id){
            return response([
                'data' => $user_id,
                'status' => 200,
                'message' => 'ok'
            ]);
        }
        return response([
            'data' => null,
            'status' => 404,
            'message' => 'Data not found'
        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if($user) {
            $user->delete();
            return response([
                'status' => 200,
                'message' => 'Delete user success!'
            ]);
        }else{
            return response([
                'status' => 404,
                'message' => 'Delete user fail!'
            ]);
        }
        
    }
}

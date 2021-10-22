<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserApiController extends Controller
{

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => User::all(['id', 'name', 'email',])
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'data' => User::find($id, ['id', 'name', 'email',])
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|',
            'email' => 'required|string|',
        ]);

        $user = UsersModel::create($request->all());

        return response($user, 200);
    }
}

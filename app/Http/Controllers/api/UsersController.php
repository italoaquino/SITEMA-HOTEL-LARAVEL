<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        User::create($request->All());
    }

    public function show($id)
    {
        return user::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}

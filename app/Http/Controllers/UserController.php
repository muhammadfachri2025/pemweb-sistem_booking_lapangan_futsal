<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
    }

    public function store(Request $request)
    {
        User::create([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        User::where('id_user', $id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        User::where('id_user', $id)->delete();
        return back();
    }
}

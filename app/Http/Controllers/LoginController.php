<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $usuario = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $usuario->password)) {
            return response()->json($usuario, 200);
        } else {
            return response()->json("Credenciales incorrectas", 422);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ],401);
        }
        else{
            return response()->json([
                /*  'acces_token' => $token,
                 'token_type' => 'bearer' */
                 'message' => 'ingreso correctamente'

             ]);

        }
    }
    //
}

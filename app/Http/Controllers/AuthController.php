<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([]);

        $validate = Validator::make($request->all(), [
            'id_card_number' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $id_card_number = $request->input('id_card_number');
        $password = $request->input('password');

        $getSocietie = Societie::where('id_card_number', $id_card_number)->first();

        if ($getSocietie == null) {
            return response()->json([
                "message" => "Societie not found",
            ]);
        }

        if (!Hash::check($password, $getSocietie->password)) {
            return response()->json([
                "message" => "Invalid Password",
            ]);
        }

        $token = md5($id_card_number . $password);

        $getSocietie->login_tokens = $token;
        $getSocietie->save();

        return response()->json([
            "massage" => "Login Succes",
            "token" => $token,
            "data" => $getSocietie
        ]);
    }

    function logout(Request $request)
    {
        $token = $request->header('authorization');
        $getSocietie = Societie::where('login_tokens', $token)->first();

        if ($getSocietie != null) {
            $getSocietie->login_tokens = "";
            $getSocietie->save();
            return response()->json([
                "massage" => "Logout Success"
            ]);
        } else {
            return response()->json([
                "message" => "Invalid Token"
            ]);
        }
    }
}

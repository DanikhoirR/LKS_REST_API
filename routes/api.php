<?php

use App\Http\Controllers\AuthController;
use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/', function () {
    dd('Hello Api');
});

Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout']);

Route::post('regional', function (Request $request) {
    $token = $request->header('Authorization');
    $getSocietie = Societie::where('login_tokens', $token)->first();
    if ($getSocietie == null) {
        return response()->json([
            "massage" => "Invalid Token"
        ], 401);
    }
});

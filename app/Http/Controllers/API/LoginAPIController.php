<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LoginService;
use Illuminate\Support\Facades\Auth;
class LoginAPIController extends Controller
{
    protected $LoginService;

    public function __construct(LoginService $LoginService)
    {
        $this->LoginService = $LoginService;
    }
    public function loginortu(Request $request)
    {
        // Validasi input request
        $request->validate([
            'nik_ortu' => 'required|string',
            'password' => 'required|string',
        ]);

        // Panggil service untuk login
        $data = $this->LoginService->loginortu($request);

        // Mengembalikan response
        return response()->json([
            'user' => $data['user'],
            'token' => $data['token'],
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil logout'
        ], 200);
    }

    public function profile()
    {
        return response()->json([
            'status' => true,
            'data' => Auth::user()
        ], 200);
    }
}

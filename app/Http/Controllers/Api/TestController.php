<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'msg' => 'Hello! Your Laravel API is working perfectly.',
            'data' => [
                'user' => 'Gemma User',
                'role' => 'Developer'
            ]
        ], 200);
    }
}

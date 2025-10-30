<?php

namespace App\Http\Controllers;

use App\Services\Auth\AuthService;
use App\Services\Auth\Data\AuthLoginData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(private readonly AuthService $authService)
    {
    }

    public function login(Request $request): JsonResponse
    {
        $data = AuthLoginData::from($request);

        return $this->success($this->authService->login($data));
    }

    public function refresh(Request $request): JsonResponse
    {
        $request->validate([
            'refresh_token' => 'required',
        ]);

        $accessToken = $this->authService->refresh($request->refresh_token);

        return $this->success([
            'token' => $accessToken,
            'expires_at' => now()->addHour()->timestamp,
        ]);
    }

    public function user(Request $request): JsonResponse
    {
        return $this->success($request->user());
    }
}

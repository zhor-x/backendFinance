<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Services\Auth\Data\AuthLoginData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthService
{

    public function login(AuthLoginData $data)
    {
        $user = User::query()->where('email', $data->email)->first();

        if (!$user || !Hash::check($data->password, $user->password)) {
            throw new \Exception('Սխալ էլ․ փոստ կամ գաղտնաբառ');
        }

        $token = $user->createToken('auth_token')->accessToken;
        $refreshToken = Str::random(60);

        $user->update([
            'refresh_token' => Hash::make($refreshToken),
            'refresh_token_expires_at' => Carbon::now()->addDays(1),
        ]);

        return [
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
            ],
            'token' => $token,
            'refresh_token' => $refreshToken,
            'expires_at' => Carbon::now()->addHours(1)->timestamp,
            'refresh_expires_at' => $user->refresh_token_expires_at->timestamp,
        ];
    }

    public function refresh(string $refreshToken): string
    {
        $user = User::query()->whereNotNull('refresh_token')->first();

        if (
            !$user ||
            !Hash::check($refreshToken, $user->refresh_token) ||
            now()->greaterThan($user->refresh_token_expires_at)
        ) {
            throw new('Invalid or expired refresh token');
        }

        return $user->createToken('auth_token')->accessToken;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Firebase\JWT\JWT;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreLoginRequest;

class AuthController extends Controller
{
	public function login(StoreLoginRequest $request): JsonResponse
	{
		$authenticated = auth()->attempt($request->all());

		if (!$authenticated)
		{
			return response()->json('wrong email or password', 401);
		}

		$payload = [
			'exp' => Carbon::now()->addSeconds(300)->timestamp,
			'uid' => User::where('email', '=', request()->email)->first()->id,
		];

		$jwt = JWT::encode($payload, config('auth.jwt_secret'), 'HS256');

		$cookie = cookie('access_token', $jwt, 300, '/', config('auth.front_top_level_domain'), true, true, false, 'Strict');

		return response()->json('success', 200)->withCookie($cookie);
	}

	public function logout(): JsonResponse
	{
		$cookie = cookie('access_token', '', 0, '/', config('auth.front_top_level_domain'), true, true, false, 'Strict');

		return response()->json('success', 200)->withCookie($cookie);
	}

	public function me(): JsonResponse
	{
		return response()->json(
			[
				'message' => 'authenticated successfully',
				'user'    => jwtUser(),
			],
			200
		);
	}
}

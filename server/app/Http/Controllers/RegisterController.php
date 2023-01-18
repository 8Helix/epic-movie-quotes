<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
	public function register(StoreRegisterRequest $request): JsonResponse
	{
		$user = User::create(['username' => $request->username, 'email' => $request->email, 'password' => $request->password]);

		event(new Registered($user));

		return response()->json('success', 200);
	}

	public function verify(Request $request): RedirectResponse
	{
		$user = User::find($request->route('id'));

		if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
		{
			throw new AuthorizationException();
		}

		if ($user->markEmailAsVerified())
		{
			event(new Verified($user));
		}

		$path = $request->path();

		return redirect('http://127.0.0.1:5173/' . $path);
	}
}

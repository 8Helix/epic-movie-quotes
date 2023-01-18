<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|min:3|max:15|alpha_num',
			'email'    => 'required|email',
			'password' => 'required|confirmed|min:8|max:15|alpha_num',
		];
	}
}

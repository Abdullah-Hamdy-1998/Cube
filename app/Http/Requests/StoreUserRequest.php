<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha',
            'job_title' => 'alpha',
            'phone' => 'numeric',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:8',
            'permissions' => 'required'

        ];
    }

    public function messages()
    {
        return ['permissions.required' => 'The Access Permissions field is required.'];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|alpha_spaces|unique:users,name',
            'job_title' => 'alpha_spaces',
            'phone' => 'numeric|min:11',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed|min:8',
            'modules' => 'required',
            'user-avatar' => 'image|mimes:jpg,png,jpeg|max:2048',
        ];
    }

    public function messages()
    {
        return ['modules.required' => 'The Access Permissions field is required.'];
    }
}

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
            'name' => 'required|alpha|unique:users,name',
            'job_title' => 'alpha',
            'phone' => 'numeric|min:11',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed|min:8',
            'modules' => 'required'

        ];
    }

    public function messages()
    {
        return ['modules.required' => 'The Access Permissions field is required.'];
    }
}

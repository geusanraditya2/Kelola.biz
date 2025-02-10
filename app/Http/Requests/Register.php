<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Register extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'nohp' => 'required|digits_between:11,13|unique:users,nohp|regex:/^[0-9]+$/',
            'address' => 'required|string|max:500',
            'jurusan' => [
                'required',
                Rule::in([
                    'Rekayasa Perangkat Lunak',
                    'Teknik Komputer Jaringan',
                    'Teknik Elektronika Industri',
                    'Desain Komunikasi Visual',
                    'Desain Pemodelan dan Informasi Bangunan',
                    'Teknik Sepeda Motor',
                    'Teknik Kendaraan Ringan',
                ]),
            ],
            'password' => 'required|string|min:8|confirmed',
            'role_name' => 'required|string|max:255',
            'status' => [
                'required',
                Rule::in(['0', '1']) // Jika status hanya boleh 0 atau 1
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'username.required' => 'Username is required.',
            'username.unique' => 'This username is already taken.',
            'email.required' => 'Email is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already registered.',
            'nohp.regex' => 'Phone Number is Only For Number.',
            'nohp.unique' => 'This phone number is already taken.',
            'address.required' => 'Address is required.',
            'jurusan.required' => 'Major is required.',
            'jurusan.in' => 'Please select a valid major.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
            'role_name.required' => 'Rolename is required.',
            'status.required' => 'Status is required.',
        ];
    }
}

// Controller Method

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'identification' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
      'selfie' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
      'gcash' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        'firstname' => 'required|string|max:255',
        'middlename' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'birthday' => 'required|date',
        'address' => 'required|string|max:255',
        'users_id' => 'required|exists:IDType,id',
        'IDType'=> 'required|exists:IDType,id',
        'age' => 'required|integer', // Add age field validation
        'phonenumber' => 'required|string', // Add phonenumber field validation
        'gender_id' => 'required|integer', // Add gender_id field validation
        ];
    }
}

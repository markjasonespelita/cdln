<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfilesRequest extends FormRequest
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
            //
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'departments_id' => 'required',
            'year' => 'required',
            'birthdate' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'mothersname' => 'required',
            'fathersname' => 'required',
            'emergency_contact' => 'required',
        ];
    }
}

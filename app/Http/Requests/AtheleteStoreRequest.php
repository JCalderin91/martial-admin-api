<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AtheleteStoreRequest extends FormRequest
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
            'academy_id' => 'required',
            'belt_id' => 'required',
            'dni' => ['nullable', Rule::unique('athletes')->where(function($q){
                return $q->whereNotNull('dni');
            })],
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'blood_type' => 'required',
        ];
    }
}

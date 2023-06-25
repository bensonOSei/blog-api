<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if($this->method() === 'PUT') {
            return [
                'title' => 'string|required',
                'slug' => 'string',
                'body' => 'string|required'
            ];
        }
        return [
            'title' => 'sometimes|string|required',
            'slug' => 'sometimes|string',
            'body' => 'sometimes|string|required'
        ];
}
}

<?php

namespace App\Http\Requests\Level;

use Illuminate\Foundation\Http\FormRequest;

class LevelStoreRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:255', 'unique:levels,name'],
            'slug' => ['required', 'string', 'max:255', 'unique:levels,slug'],
            'description' => ['required', 'string'],
            'status' => ['required', 'string', 'in:draft,published,unpublished'],
        ];
    }
}

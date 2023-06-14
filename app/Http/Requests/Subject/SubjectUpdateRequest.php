<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class SubjectUpdateRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:255', 'unique:subjects,name,' . $this->subject->id],
            'slug' => ['nullable', 'string', 'max:255', 'unique:subjects,slug,' . $this->subject->id],
            'description' => ['nullable', 'string'],
            'status' => ['nullable', 'string', 'in:draft,published,unpublished'],
        ];
    }
}

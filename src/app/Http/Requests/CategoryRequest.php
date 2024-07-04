<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام دسته‌بندی الزامی است.',
            'name.unique' => 'نام دسته‌بندی باید منحصر به فرد باشد.',
            'parent_id.exists' => 'دسته‌بندی والد نامعتبر است.'
        ];
    }
}

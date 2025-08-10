<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'image' => 'required|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'short_description' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'sku' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }
}

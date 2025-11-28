<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0|max:99999999.99',
            'weight' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'product_category_id' => 'required|exists:product_categories,id',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:1024'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kategori harus di isi',
            'description.required' => 'Deskripsi harus di isi'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'name' => 'required|min:2',
            "description" => 'required|min:1',
            "age" => 'required|numeric|digits_between:4,4|min:1000|max:2025',
            "categories" => 'required|array|exists:categories,id',
            "image_url" => 'required|image',
            "duration" => 'required',
            "price" => 'required',
        ];
    }
}

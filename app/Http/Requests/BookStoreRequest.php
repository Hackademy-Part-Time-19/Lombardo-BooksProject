<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
            'title'=>'required|max:50',
            'description'=>'required|max:300',
            'price'=>'required',
            'image'=>'image|max:4096',
            'year'=>'required|digits_between:4,4|numeric|min:1000|max:' . (date('Y') + 1),

        ];
    }
}

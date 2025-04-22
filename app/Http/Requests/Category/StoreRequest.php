<?php

namespace App\Http\Requests\Category;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|max:500',
            'slug' => 'required|max:500|unique:categories',
 
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator){
        if ($this->expectsJson()) {
            $response = new Response($validator->errors(),422);
            throw new \Illuminate\Validation\ValidationException($validator,$response);
            }
    
    }
}

<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class PutRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [ //Reglas para las validaciones que debe de tener el usuario al momento de ingresar los datos 
            'title' => 'required|max:500',
            'slug' => 'required|max:500|unique:categories,slug,'.$this->route('category')->id,

        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator){
        if ($this->expectsJson()) {
            $response = new Response($validator->errors(),422);
            throw new \Illuminate\Validation\ValidationException($validator,$response);
            }
    
    }
}

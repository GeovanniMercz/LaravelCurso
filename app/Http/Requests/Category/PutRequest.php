<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

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
}

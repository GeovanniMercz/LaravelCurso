<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class PutRequest extends FormRequest
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
        return [ //Reglas para las validaciones que debe de tener el usuario al momento de ingresar los datos 
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:posts,slug,'.$this->route('post')->id,
            'content' => 'required|min:7|',
            'category_id' => 'required|integer',
            'description' => 'required|min:7',
            'posted' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:10240',

        ];
    }
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator){
        if ($this->expectsJson()) {
            $response = new Response($validator->errors(),422);
            throw new \Illuminate\Validation\ValidationException($validator,$response);
            }
    } 
}

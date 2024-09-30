<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        $request = [];
        if($this->method() == "POST"||$this->method() == "PUT")
        {
            $request= [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|',
            ];
           
        }
        return $request;
    }

    public function messages()
    {
        return [
     'name.required' => 'O campo nome é obrigatório.',
        'name.string' => 'O campo nome deve ser uma string.',
        'name.max' => 'O campo nome não pode ter mais de 255 caracteres.',
        
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'O campo e-mail deve ser um e-mail válido.',
        'email.unique' => 'O e-mail fornecido já está em uso.',
        
        'password.required' => 'O campo senha é obrigatório.',
        'password.string' => 'O campo senha deve ser uma string.',
        'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
        'password.confirmed' => 'A confirmação da senha não corresponde.', 
        ];  
    }
}

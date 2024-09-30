<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        $request = [];
        if($this->method() == "POST" || $this->method() == "PUT"){
            $request = [
               
                'name' => 'required',
                'email' => 'required|email',
                
               
            ];
        }
       return  $request;
    }
    public function messages()
    {
        return[
        'name.required' => 'O campo Nome é obrigatório.',
        'name.string' => 'O campo Nome deve ser uma string.',
        'name.max' => 'O campo Nome não pode ter mais de 255 caracteres.',
        'email.required' => 'O campo Email é obrigatório.',
        'email.string' => 'O campo Email deve ser uma string.',
        'email.max' => 'O campo Email não pode ter mais de 255 caracteres.',
        'email.email' => 'O campo Email Tem que ser do tipo email.',
        ];
    }

}

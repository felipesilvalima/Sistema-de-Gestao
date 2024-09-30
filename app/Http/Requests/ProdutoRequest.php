<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
                'valor' => 'required',
               
            ];
        }
       return  $request;
    }
    public function messages()
    {
        return [
            'name.required' => 'O campo Produto é obrigatório.',
            'name.string' => 'O campo Produto deve ser uma string.',
            'name.max' => 'O campo Produto não pode ter mais de 255 caracteres.',
            'valor.required' => 'O campo valor é obrigatório.',
            'valor.numeric' => 'O campo valor deve ser um número.',
            'valor.min' => 'O campo valor deve ser pelo menos 0.',
        ];
    }
}

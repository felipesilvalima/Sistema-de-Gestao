<?php declare(strict_types=1); 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendaRequest extends FormRequest
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
               
                'Produto_id' => 'required',
                'cliente_id' => 'required',
               
            ];
        }
       return  $request;
    
}

public function messages(): array
{
    return [
        'Produto_id.required' => 'O campo Produto é obrigatório.',
        'cliente_id.required' => 'O campo Cliente é obrigatório.',
        
    ];
}
}


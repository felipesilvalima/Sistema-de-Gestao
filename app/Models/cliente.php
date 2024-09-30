<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'name',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];
}

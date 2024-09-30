<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    protected $table = 'vendas'; 

    protected $fillable = [
        'numero_da_venda',
        'Produto_id',
        'cliente_id',
    ];

    public function produto() 
    {
        return $this->belongsTo(Produto::class, 'Produto_id');
    }

    public function cliente() 
    {
        return $this->belongsTo(cliente::class, 'cliente_id');
    }


}


<?php

namespace Database\Seeders;

use App\Models\venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        venda::create(
            [
                'numero_da_venda'=>'1',
                'produto_id'=> 10,
                'cliente_id'=> 5,
            ]
            );
    
    
               Venda::create(
            [
                'numero_da_venda'=>'2',
                'produto_id'=> 10,
                'cliente_id'=> 5,
            ]
            );
    }
}

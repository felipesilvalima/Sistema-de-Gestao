<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $totaldeprodutocadastrado = $this->buscaTotalProdutoCadastrado();
        $totaldeclientecadastrado = $this->buscaTotalclienteCadastrado();
        $totaldevendacadastrado = $this->buscaTotalvendaCadastrado();
        $totaldeusuariocadastrado = $this->buscaTotalUsuarioCadastrado();
       
      


        return view('dashboord.dashboord', compact('totaldeprodutocadastrado','totaldeclientecadastrado','totaldevendacadastrado','totaldeusuariocadastrado'));
    }
    public function buscaTotalProdutoCadastrado() {
        $findProduto = Produto::all()->count();

        return $findProduto;

    }
    public function buscaTotalclienteCadastrado() {
        $findcliente = cliente::all()->count();

        return $findcliente;


    }
    public function buscaTotalvendaCadastrado() {
        $findvenda = venda::all()->count();

        return $findvenda;


    }

    public function buscaTotalUsuarioCadastrado() {
        $findUsuario = User::all()->count();

        return $findUsuario;


    }

}

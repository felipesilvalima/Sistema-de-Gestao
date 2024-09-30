<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\Produto;
use App\Models\venda;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(Request $request) 
{
$pesquisar = $request->pesquisar ?? '';
$findCliente = cliente::where('name','LIKE',"%{$pesquisar}%")->get();

return view('clientes.cliente', compact('findCliente'));
}

public function show($id) 
{
$cliente= cliente::find($id);

if($cliente) {
    return view('clientes.visualizar', compact('cliente'));
} else {
    return redirect()->route('cliente.index')->with('id','cliente não encontrado!');
}

}

public function cadastrarcliente(ClienteRequest $request)
{
    if($request->method() == "POST") {
        cliente::create($request->all());
        return redirect()->route('cliente.index')->with('cadastrado','Cadastrado com sucesso');
    }
return view('clientes.cadastrar');
}

public function edit(ClienteRequest $request, $id)
{
    if($request->method() == "PUT") {
       cliente::find($id)->update($request->all());

        return redirect()->route('cliente.index')->with('edita','Atualizado com sucesso');
    } 
    $cliente = cliente::find($id);
    if($cliente){
        return view('clientes.edita',compact('cliente')); 
    } else{
        return redirect()->route('cliente.index')->with('id','Cliente não encontrado!');
    } 

}

public function delete($id)
{
    $produto = cliente::find($id);

    $vendasCount = venda::all()->where('cliente_id', $id)->count();
    if ($vendasCount > 0) {
    return redirect()->back()->with('errorvenda', 'Não é possível excluir o produto porque ele está associado a vendas.');
    } else {
        $produto->delete();
        return Redirect()->route('cliente.index')->with('success', 'Produto excluído com sucesso.');
    }
}
}

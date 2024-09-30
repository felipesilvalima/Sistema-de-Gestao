<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\venda;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
private $produto;
public function __construct(Produto $produto)
{
    $this->produto = $produto;
}
public function index(Request $request) 
{
$pesquisar = $request->pesquisar ?? '';
$findProduto = $this->produto->where('name','LIKE',"%{$pesquisar}%")->get();

return view('produtos.produto', compact('findProduto'));
}
public function cadastrarproduto(ProdutoRequest $request)
{
    
   
    if($request->method() == "POST") {
        $produto = $this->produto->create($request->all());
        return redirect()->route('produto.index')->with('cadastrado','Cadastrado com sucesso');
    }
return view('produtos.cadastrar');
}

public function edit(ProdutoRequest $request, $id)
{
    if($request->method() == "PUT") {
      $produto = $this->produto->find($id);
      $produto->update($request->all());
        return redirect()->route('produto.index')->with('edita','Atualizado com sucesso');
    } 
    $produto = $this->produto->find($id);
    if($produto){
        return view('produtos.edita',compact('produto')); 
    } else{
        return redirect()->route('produto.index')->with('id','Produto não encontrado!');
    } 

}

public function delete($id)
{
    $produto = $this->produto->find($id);
    
    $vendasCount = venda::all()->where('Produto_id', $id)->count();
    if ($vendasCount > 0) {
       
        return redirect()->back()->with('errorvenda', 'Não é possível excluir o produto porque ele está associado a vendas.');
    } else {
       
        $produto->delete();
        return Redirect()->back()->with('delete', 'Produto excluído com sucesso.');
    }
}

}
<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;
use App\Models\cliente;
use App\Models\Produto;
use App\Models\venda;
use App\Mail\comprovanteDeVenda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendaController extends Controller
{
    public function index(Request $request) 
    {
        $pesquisar = $request->pesquisar ?? '';
        $Findvendas= venda::where('numero_da_venda', 'LIKE', "%{$pesquisar}%")->get();
        return view('vendas.venda', compact('Findvendas'));
    } 

    public function cadastrarvendas(VendaRequest $request)
{
    $findNumeracao = venda::max('numero_da_venda') + 1;
    $findProduto = Produto::all();
    $findCliente = cliente::all();

    if($request->method() == "POST") {
        $data = $request->all();
        $data['numero_da_venda'] = $findNumeracao;
        venda::create($data);
        return redirect()->route('venda.index')->with('cadastrado','Cadastrado com sucesso');
    }
return view('vendas.cadastrar', compact('findNumeracao','findProduto','findCliente'));
}

public function delete($id)
{
venda::find($id)->delete();
return redirect()->back()->with('delete','Venda Excluida!');
}

public function enviarComprovantePorEmail($id)
{
    $buscarVenda = Venda::find($id);
    $ProdutoName = $buscarVenda->Produto->name;
    $ClienteEmail = $buscarVenda->Cliente->email;
    $ClienteName = $buscarVenda->Cliente->name;

    $sendMailData = 
    [
     'ProdutoName' => $ProdutoName,
     'ClienteName' => $ClienteName
    ];
    Mail::to($ClienteEmail)->send(new comprovanteDeVenda($sendMailData));
    return redirect()->route('venda.index',)->with('enviado','Email Enviado com successo');

}

}

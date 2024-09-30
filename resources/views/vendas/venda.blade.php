@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
      </div>
<div>
    <form action="{{route('venda.index')}}" method="get">
    <input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar Produtos">
    <button>Pesquisar</button>
    <button>🔄</button>
<a type="button" href="{{route('cadastrar.venda')}}" class="btn btn-success  float-end">Incluir Venda</a>
    </form>
 @include('mensagem.ms')
</div>
@if($Findvendas-> isEmpty())
<p style="color:crimson;">Venda não existe</p>
@endif
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NUMERO DA VENDA</th>
              <th scope="col">PRODUTO</th>  
              <th scope="col">CLIENTE</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Findvendas  as $venda)
            <tr>
              <td>{{$venda->numero_da_venda}}</td>
              <td>{{$venda->Produto->name}}</td>
              <td>{{$venda->cliente->name}}</td> 
              <td>
              <a  class="btn btn-danger" href="{{route('venda.delete',$venda->id)}}"onclick="return confirm('Tem certeza que deseja excluir este Venda?');">🗑️</a>
              <a  class="btn btn-info" href="{{route('enviarComprovantePorEmail.venda',$venda->id)}}">📩</a>
            </td>         
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@endsection
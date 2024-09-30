@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
      </div>
<div>
    <form action="{{route('produto.index')}}" method="get">
    <input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar Produtos">
    <button>Pesquisar</button>
    <button>🔄</button>
<a type="button" href="{{route('cadastrar.produto')}}" class="btn btn-success  float-end">Incluir Produto</a>
    </form>
 @include('mensagem.ms')
</div>
@if($findProduto-> isEmpty())
<p style="color:crimson;">Produto não existe</p>
@endif
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">PRODUTO</th>
              <th scope="col">VALOR</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($findProduto  as $produto)
            <tr>
              <td>{{$produto->id}}</td>
              <td>{{$produto->name}}</td>
              <td>{{number_format($produto->valor,2,',','.')}}</td> 
              <td>

            <a class="btn btn-info" href="{{ route('produto.edit', $produto->id) }}">✏️</a>
            <a class="btn btn-danger" href="{{ route('produto.delete', $produto->id) }}" onclick="return confirm('Tem certeza que deseja excluir este Produto?');">🗑️</a>  
        
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
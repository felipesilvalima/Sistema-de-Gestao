@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
      </div>
<div>
    <form action="{{route('cliente.index')}}" method="get">
    <input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar Clientes">
    <button>Pesquisar</button>
    <button>🔄</button>
<a type="button" href="{{route('cadastrar.cliente')}}" class="btn btn-success  float-end">Incluir Cliente</a>
    </form>
 @include('mensagem.ms')
</div>
@if($findCliente-> isEmpty())
<p style="color:crimson;">Cliente não existe</p>
@endif
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">CEP</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($findCliente  as $cliente)
            <tr>
              <td>{{$cliente->id}}</td>
              <td>{{$cliente->name}}</td>
              <td>{{$cliente->email}}</td>
              <td>{{$cliente->cep}}</td> 
              <td>
              <a class="btn btn-warning" href="{{ route('cliente.show', $cliente->id) }}">👁️</a>
              <a class="btn btn-info" href="{{ route('cliente.edit', $cliente->id) }}">✏️</a>
              <a class="btn btn-danger" href="{{ route('cliente.delete', $cliente->id) }}"onclick="return confirm('Tem certeza que deseja excluir este cliente?');">🗑️</a> 
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
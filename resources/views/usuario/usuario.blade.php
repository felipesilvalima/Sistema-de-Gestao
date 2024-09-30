@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuario</h1>
      </div>
<div>
    <form action="{{route('usuario.index')}}" method="get">
    <input type="text" name="pesquisar" id="pesquisar" placeholder="Pesquisar Produtos">
    <button>Pesquisar</button>
    <button>🔄</button>
<a type="button" href="{{route('cadastrar.usuario')}}" class="btn btn-success  float-end">Incluir Usuario</a>
    </form>
 @include('mensagem.ms')
</div>
@if($findUsuario-> isEmpty())
<p style="color:crimson;">Produto não existe</p>
@endif
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($findUsuario  as $usuario)
            <tr>
            <td>{{$usuario->id}}</td>
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->email}}</td>
              <td>

            <a class="btn btn-info" href="{{ route('usuario.edit', $usuario->id) }}">✏️</a>
            <a class="btn btn-danger" href="{{ route('usuario.delete', $usuario->id) }}" onclick="return confirm('Tem certeza que deseja excluir este Produto?');">🗑️</a>  
        
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
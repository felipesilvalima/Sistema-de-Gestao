@extends('index')

@section('content')

<form action="{{route('cadastrar.venda')}}" method="POST">
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar Nova Venda</h1>
</div>
  <div class="mb-3">    
    <label  class="form-label">NUMERAÇÃO DO VENDA</label>
    <input  class="form-control"  type="text" name="numero_da_venda" value="{{$findNumeracao}}" disabled>

    <div class="mb-3">
    <label class="form-label" >PRODUTO</label>
    <select class="form-select" name="Produto_id">
  <option selected disabled>Clique para selecionar</option>
  @foreach($findProduto as $produto)
  <option value="{{$produto->id}}">{{$produto->name}}</option>
  @endforeach
</select>
  </div>

  <div class="mb-3">
    <label class="form-label" >CLIENTE</label>
    <select class="form-select" name="cliente_id">
  <option selected disabled>Clique para selecionar</option>
  @foreach($findCliente as $cliente)
  <option value="{{$cliente->id}}">{{$cliente->name}}</option>
  @endforeach
</select>
  </div>


  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Produto</h1>
</div>

<form action="{{route('cadastrar.produto')}}" method="POST">
@include('mensagem.ms')
    @csrf
  <div class="mb-3">    
    <label  class="form-label">PRODUTO</label>
    <input class="form-control" name="name" placeholder="Produto" >
  </div>
  <div class="mb-3">
    <label class="form-label">VALOR</label>
    <input class="form-control" name="valor" placeholder="Valor" >
  </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection
@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Atualizar Produto</h1>
</div>

<form action="{{route('produto.edit',['id'=>$produto->id])}}" method="POST">
@include('mensagem.ms')
    @csrf
    @method('PUT')
  <div class="mb-3">    
    <label  class="form-label">PRODUTO</label>
    <input class="form-control" name="name"  value="{{$produto->name}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">VALOR</label>
    <input class="form-control" name="valor" value="{{$produto->valor}}">
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
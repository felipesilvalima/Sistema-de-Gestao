@extends('index')
@section('content')
<form action="{{route('cliente.edit',['id'=>$cliente->id])}}" method="POST">
@include('mensagem.ms')
    @csrf
    @method('PUT')
    <div class="mb-3">    
    <label  class="form-label">NOME</label>
    <input class="form-control" name="name" placeholder="Nome" value="{{$cliente->name}}"  >
  </div>
  <div class="mb-3">
    <label class="form-label">E-MAIL</label>
    <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{$cliente->email}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">ENDEREÇO</label>
    <textarea class="form-control" name="endereco" placeholder="Endereço">{{$cliente->endereco}}</textarea>

  </div>
  <div class="mb-3">
    <label class="form-label">COMPLEMENTO</label>
    <input class="form-control" name="logradouro" placeholder="Complemento" value="{{$cliente->logradouro}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">CEP</label>
    <input class="form-control" name="cep" placeholder="Cep" value="{{$cliente->cep}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">BAIRRO</label>
    <input class="form-control" name="bairro" placeholder="Bairro" value="{{$cliente->bairro}}">
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
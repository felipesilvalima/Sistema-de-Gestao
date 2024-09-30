@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Cliente</h1>
</div>

<form action="{{route('cadastrar.cliente')}}" method="POST">
  @include('mensagem.ms')
    @csrf
  <div class="mb-3">    
    <label  class="form-label">NOME</label>
    <input class="form-control" name="name" placeholder="Nome"  value="{{old('name')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">E-MAIL</label>
    <input  class="form-control" name="email" placeholder="E-mail" value="{{old('email')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">ENDEREÇO</label>
    <textarea class="form-control" name="endereco" placeholder="Endereço" ></textarea>

  </div>
  <div class="mb-3">
    <label class="form-label">COMPLEMENTO</label>
    <input class="form-control" name="logradouro" placeholder="Complemento" >
  </div>
  <div class="mb-3">
    <label class="form-label">CEP</label>
    <input class="form-control" name="cep" placeholder="Cep" >
  </div>
  <div class="mb-3">
    <label class="form-label">BAIRRO</label>
    <input class="form-control" name="bairro" placeholder="Bairro" >
  </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection
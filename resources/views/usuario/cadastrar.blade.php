@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Usuario</h1>
</div>

<form action="{{route('cadastrar.usuario')}}" method="POST">
@include('mensagem.ms')
    @csrf
  <div class="mb-3">    
    <label  class="form-label">NOME</label>
    <input class="form-control" name="name" placeholder="NOME"  value="{{old('name')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">EMAIL</label>
    <input class="form-control" name="email" placeholder="EMAIL" value="{{old('email')}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">SENHA</label>
    <input type="password" class="form-control" name="password" placeholder="SENHA" >
  </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection
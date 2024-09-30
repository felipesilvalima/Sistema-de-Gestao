@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Atualizar Usuario</h1>
</div>

<form action="{{route('usuario.edit',['id'=>$usuario->id])}}" method="POST">
  
    @csrf
    @method('PUT')
    <div class="mb-3">    
    <label  class="form-label">NOME</label>
    <input class="form-control" name="name" value="{{$usuario->name}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">EMAIL</label>
    <input class="form-control" name="email" value="{{$usuario->email}}"required>
  </div>
  <div class="mb-3">
    <label class="form-label">NOVA SENHA</label>
    <input type="password" class="form-control" name="password" value="" >
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
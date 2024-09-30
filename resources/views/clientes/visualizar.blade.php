@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Visualizar</h1>
</div>

<div>
<p>NOME: {{$cliente->name}}</p>

<p>EMAIL: {{$cliente->email}}</p>

<p>ENDEREÇO: {{$cliente->endereco}}</p>

<p>COMPLEMENTO: {{$cliente->logradouro}}</p>

<p>CEP: {{$cliente->cep}}</p>

<p>BAIRRO: {{$cliente->bairro}}</p>

<button class="btn btn-primary" onclick="javascript:history.go(-1)">Voltar</button>

</div>


@endsection


@extends('app')

@section('titulo')
cadastro
@stop

@section('conteudo')
<h4>CADASTRO</h4>
<form class="form" method="GET" action="/cadastrar">
  <div class="form-group">
    <input type="text" class="form-control" id="login" name="login" placeholder="Login ou Email">
  </div>

  <div class="form-group">
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  </div>

  <button class="btn btn-warning" onclick="submit(login, senha)" >Cadastrar</button>
</form>
@stop

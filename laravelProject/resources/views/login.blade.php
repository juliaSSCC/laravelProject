@extends('app')

@section('titulo')
login
@stop

@section('conteudo')
<h4>LOGIN</h4>
<form class="form" method="GET" action="/entrar">
  <div class="form-group">
    <input type="text" class="form-control" name="login" placeholder="Login ou Email">
  </div>

  <div class="form-group">
    <input type="password" class="form-control" name="senha" placeholder="Senha">
  </div>

  <button class="btn btn-warning" onclick="submit(login, senha)">Logar</button>
</form>

<a href="/cadastro">Cadastre-se</a>
@stop

@extends('app')

@section('titulo')
index
@stop

@section('conteudo')

<h1>USUARIOS</h1>


<table class="table table-striped table-bordered table-hover">
  <thead>
  <tr>
    <th>Login</th>
  </tr>
  <thead>
  <tbody>
  @foreach($usuarios as $usuario)
  <tr>

    <td>{{$usuario->login}}
      <form method="POST" action="/editar/{{$usuario->login}}">
        <button>EDITAR</button>
      </form>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

@stop

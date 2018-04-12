@extends('layouts.master')

@section('main')
<div>
    <ul>
      <li><a href="{{ url('/users') }}">Usuários</a></li>
      <li><a href="{{ url('/users/new') }}">Novo usuário</a></li>
      <li><a href="{{ url('/todo') }}">Listar Tarefas</a></li>
      <li><a href="{{ url('/todo/new') }}">Criar Tarefa</a></li>
    </ul>    
</div>
@endsection
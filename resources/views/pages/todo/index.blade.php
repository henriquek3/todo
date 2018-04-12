@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Tarefas</h1>
  </header>

  <section>
    <ul>
      @foreach ($todos as $todoToShow)
        <li>
          {{ $todoToShow->text }}, criado por {{ $todoToShow->user->name }}, {{ $todoToShow->created_at->diffForHumans() }} - 
          <a href="{{ url("/todo/{$todoToShow->id}/edit") }}">Atualizar</a>
        </li>
      @endforeach    
    </ul>
  </section>
</div>
@endsection
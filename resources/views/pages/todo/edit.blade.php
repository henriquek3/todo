@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Editar Tarefas</h1>
  </header>

  <section>
    <form action="{{ url()->current() }}" method="post">

      <input type="hidden" name="_method" value="put">
      {{ csrf_field() }}

      {{-- name --}}
      <div>
        <label for="">Descrição da Tarefa</label>
        <input type="text" name="text" required value="{{ $todoEdit->text }}">        
      </div>
            
      <div>
        <a href="{{ url('/') }}">Cancelar</a>
        <button type="submit">Salvar</button>
      </div>
    </form>

    <form action="{{ url()->current() }}" method="post">
      <input type="hidden" name="_method" value="delete">
      {{ csrf_field() }}
      <button type="submit">Remover</button>
    </form>
  </section>
</div>
@endsection
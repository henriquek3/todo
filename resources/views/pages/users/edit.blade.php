@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Editar usuário</h1>
  </header>

  <section>
    <form action="{{ url()->current() }}" method="post">

      <input type="hidden" name="_method" value="put">
      {{ csrf_field() }}

      {{-- name --}}
      <div>
        <input type="text" name="name" required value="{{ $userToEdit->name }}">
        <label for="">Nome</label>
      </div>

      {{-- cpf --}}
      <div>
        <input type="email" name="email" required value="{{ $userToEdit->email }}">
        <label for="">Email</label>
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
@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Novo usuário</h1>
  </header>

  <section>
    <form action="{{ url()->current() }}" method="post">
      
      {{ csrf_field() }}

      {{-- name --}}
      <div>
        <input type="text" name="name" required>
        <label for="">Nome</label>
      </div>

      {{-- cpf --}}
      <div>
        <input type="email" name="email" required>
        <label for="">Email</label>
      </div>

      {{-- cpf --}}
      <div>
        <input type="password" name="password" required>
        <label for="">Senha</label>
      </div>
      
      <div>
        <a href="{{ url('/') }}">Cancelar</a>
        <button type="submit">Salvar</button>
      </div>
    </form>
  </section>
</div>
@endsection
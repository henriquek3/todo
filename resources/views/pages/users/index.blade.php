@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Usuários</h1>
  </header>

  <section>
    <ul>
      @foreach ($users as $userToShow)
        <li>
          {{ $userToShow->name }} - 
          <a href="{{ url("/users/{$userToShow->id}/edit") }}">Atualizar</a>
        </li>
      @endforeach    
    </ul>
  </section>
</div>
@endsection
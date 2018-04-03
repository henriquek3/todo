@extends('layouts.master')

@section('main')
<div>
    <ul>
      <li><a href="{{ url('/users') }}">Usuários</a></li>
      <li><a href="{{ url('/users/new') }}">Novo usuário</a></li>
    </ul>
    @component('components.footer', [
        'message' => 'Jean Freitas'        
    ]) @endcomponent
    
</div>
@endsection
@extends('layouts.master')

@section('main')
<div>
  <header>
    <h1>Nova Tarefa</h1>
  </header>

  <section>
        <form action="{{ url()->current() }}" method="post">

                <input type="hidden" name="_method" value="post">
                {{ csrf_field() }}
          
                {{-- name --}}
                <div>
                  <label for="">Descrição da Tarefa</label>
                  <div>
                      <textarea rows="5" name="text" required></textarea>
                  </div>
                </div>
                      
                <div>
                  <a href="{{ url('/') }}">Cancelar</a>
                  <button type="submit">Salvar</button>
                </div>
              </form>
  </section>
</div>
@endsection
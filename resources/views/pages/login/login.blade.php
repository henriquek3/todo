@extends('layouts.master')

@section('main')

<form id="login" style="text-align: center;" action="{{ url()->current() }}" method="post">
    {{  csrf_field() }}
    <div>
        <label>Email</label>
        <input type="email" name="email" required>

        @if ($errors->get('auth')[0] ?? false)
            <p style="color: red">{{
                $errors->get('auth')[0]
            }}</p>
        @endif
    </div>
    <div>
        <label>Password</label> 
        <input type="password" name="password" required> 
    </div>
    <div>
        <button type="submit">Conectar</button>
    </div>
    
</div>

@endsection
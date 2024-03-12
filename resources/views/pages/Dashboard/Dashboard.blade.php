@extends('app')

@section('dashboard')
    <div class="container">
        ben vindo animal {{ Auth::user()->name }}
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>
@endsection

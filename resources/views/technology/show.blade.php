@extends('layouts.app')
@section('content')
    <div class="container p-5">



        <h1>
            {{ $technology->nome }}
        </h1>

        <a href="{{ route('technology.edit', $technology->id) }}">Modifica</a>

        <form method="POST" action="{{ route('technology.destroy', $technology->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
    @endsection

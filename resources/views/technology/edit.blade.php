@extends('layouts.app')

@section('content')
    <form class='create-form' method="POST" action="{{ route('technology.update', $technology->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="flex-row">
            <input placeholder='Inserisci nome' id="nome" type="text" class="lf--input form-control" name="nome"
                value="{{ $technology->nome }}" required>
        </div>

        <div class="flex-row">
            <input placeholder='Inserisci icona' id="icona" type="text" class="lf--input form-control" name="icona"
                value="{{ $technology->icona }}" required>
        </div>

        <button class="lf--submit" type="submit">Salva modifiche</button>
    </form>
@endsection

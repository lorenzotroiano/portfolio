@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Create new Project</h1>

        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">

            @csrf
            @method('POST')

            <label for="immagine">immagine</label>
            <br>
            <input type="file" name="immagine" id="immagine">
            <br>


            <label for="titolo">titolo</label>
            <br>
            <input type="text" name="titolo" id="titolo">

            <br>
            <label for="data">date</label>
            <br>
            <input type="date" name="data" id="data">
            <br>

            <label for="descrizione">descrizione</label>
            <br>
            <input type="text" name="descrizione" id="descrizione">
            <br>


            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->nome }}
                    </option>
                @endforeach
            </select>
            <br>
            @foreach ($technologies as $technology)
                <div class="form-check mx-auto" style="max-width: 300px">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology-{{ $technology->id }}">
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->nome }}
                    </label>
                </div>
            @endforeach
            <!-- Bottone di submit per inviare il form -->
            <input class="my-3" type="submit" value="CREATE">

        </form>
    </div>
@endsection

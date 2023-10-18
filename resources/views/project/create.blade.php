@extends('layouts.app')

@section('content')
    <form class='create-form' method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')


        <div class="flex-row">

            <input placeholder='Scegli immagine' id="immagine" type="file" class="lf--input form-control" name="immagine"
                autofocus>


            {{-- @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
        </div>



        <div class="flex-row">

            <input placeholder='Inserisci titolo' id="titolo" type="text" class="lf--input form-control"
                name="titolo" required>
        </div>


        <div class="flex-row">

            <input placeholder='Inserisci anno' id="anno" type="number" min="2023" max="2099" step="1"
                class="lf--input form-control" name="anno" required>


        </div>


        <div class="flex-row">

            <input placeholder='Inserisci descrizione' id="descrizione" type="text" class="lf--input form-control"
                name="descrizione" required>


        </div>



        <div class="flex-row">

            <input placeholder='Inserisci link' id="link" type="text" class="lf--input form-control" name="link"
                required>



        </div>


        <div class="flex-row">
            <select class="form-select" name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->nome }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="flex-row">


            @foreach ($technologies as $technology)
                <div class="form-check mx-auto">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology-{{ $technology->id }}">
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->nome }}
                    </label>
                </div>
            @endforeach
        </div>



        <input class="lf--submit" type="submit" value="CREATE">
    </form>
@endsection

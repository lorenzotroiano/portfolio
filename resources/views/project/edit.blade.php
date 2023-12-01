@extends('layouts.app')

@section('content')
    {{-- <div class="container text-center p-4">
        <form method="POST" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')






            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected($project->type->id === $type->id)>
                        {{ $type->nome }}
                    </option>
                @endforeach
            </select>
            <br>
            @foreach ($technologies as $technology)
                <div class="form-check mx-auto" style="max-width: 300px">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology-{{ $technology->id }}"
                        @foreach ($project->technologies as $projectTech)
                            @checked($technology -> id === $projectTech -> id) @endforeach>
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->nome }}
                    </label>
                </div>
            @endforeach



            <button type="submit">Salva modifiche</button>
        </form>
    </div> --}}


    <form class='create-form' method="POST" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="flex-row">
            @if ($project->immagine)
                <img src="{{ asset('storage/' . $project->immagine) }}" width="200px">
                <br>
            @endif
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
                name="titolo" value="{{ $project->titolo }}" required>


        </div>


        <div class="flex-row">

            <input placeholder='Inserisci anno' id="anno" type="number" min="2000" max="2099" step="1"
                class="lf--input form-control" name="anno" value="{{ $project->anno }}" required>


        </div>


        <div class="flex-row">

            <input placeholder='Inserisci descrizione' id="descrizione" type="text" class="lf--input form-control"
                name="descrizione" value="{{ $project->descrizione }}" required>


        </div>



        <div class="flex-row">

            <input placeholder='Inserisci link' id="link" type="text" class="lf--input form-control" name="link"
                value="{{ $project->link }}" required>



        </div>


        <div class="flex-row">
            <select class="form-select" name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected($project->type->id === $type->id)>
                        {{ $type->nome }}
                    </option>
                @endforeach
            </select>


        </div>


        <div class="flex-row">


            @foreach ($technologies as $technology)
                <div class="form-check mx-auto">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology-{{ $technology->id }}"
                        @foreach ($project->technologies as $projectTech)
                        @checked($technology->id === $projectTech->id) @endforeach>
                    <label class="form-check-label text-white" for="technology-{{ $technology->id }}">
                        {{ $technology->nome }}
                    </label>
                </div>
            @endforeach
        </div>





        <button class="lf--submit" type="submit">Salva modifiche</button>
    </form>
@endsection

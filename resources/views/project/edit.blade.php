@extends('layouts.app')

@section('content')
    <div class="container text-center p-4">
        <form method="POST" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- @if ($project->main_picture)
                <img src="{{ asset('storage/' . $project->main_picture) }}" width="200px">
                <br>
            @endif --}}
            {{-- <label for="main_picture">Main picture</label>
            <br>
            <input type="file" name="main_picture" id="main_picture">
            <br> --}}

            <label for="titolo">titolo:</label>
            <input type="text" name="titolo" value="{{ $project->titolo }}" required>

            <label for="data">data:</label>
            <input type="date" name="data" value="{{ $project->data }}" required>

            <label for="descrizione">descrizione:</label>
            <input type="text" name="descrizione" value="{{ $project->descrizione }}" required>


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
    </div>
@endsection

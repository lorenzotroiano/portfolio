@extends('layouts.app')
@section('content')
    <div class="container p-5">

        <img src="
        {{ asset($project->immagine ? 'storage/' . $project->immagine : 'storage/throjans.png') }}"
            width="200px">


        <h1>
            &#128193; {{ $project->titolo }}
        </h1>
        <h6> {{ $project->data }}</h6>
        <p>
            {{ $project->descrizione }}
        </p>
        <p>
            {{ $project->link }}
        </p>

        <span class="bg-warning"> Tipologia:
            {{ $project->type->nome }}
        </span>

        <div class="bg-warning">Tecnologie:
            @foreach ($project->technologies as $technology)
                <span>{{ $technology->nome }}</span>
            @endforeach
        </div>


        <a href="{{ route('project.edit', $project->id) }}">Modifica</a>

        @if ($project->immagine)
            <form class="d-inline" method="POST" action="{{ route('project.picture.delete', $project->id) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-primary" type="submit" value="DELETE PICTURE">
            </form>
        @endif


        <!-- Form per confermare l'eliminazione -->
        <form method="POST" action="{{ route('project.destroy', $project->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>



    </div>
@endsection

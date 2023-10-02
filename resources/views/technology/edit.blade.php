@extends('layouts.app')

@section('content')
    <div class="container text-center p-4">
        <form method="POST" action="{{ route('technology.update', $technology->id) }}" enctype="multipart/form-data">
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

            <label for="nome">nome:</label>
            <input type="text" name="nome" value="{{ $technology->nome }}" required>







            <button type="submit">Salva modifiche</button>
        </form>
    </div>
@endsection

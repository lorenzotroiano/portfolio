@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div> --}}

    <h1>Progetti!</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('project.show', $project->id) }}"> {{ $project->titolo }}</a>

            </li>
        @endforeach
    </ul>


    <h3 class="text-center">Progetti <a class="btn btn-primary" href="{{ route('project.create') }}">
            +
        </a></h3>



    <h2>Tecnologie</h2>
    <ul>
        @foreach ($technologies as $technology)
            <li>


                <a href="{{ route('technology.show', $technology->id) }}"> {{ $technology->nome }}</a>

            </li>
        @endforeach
    </ul>


    <h3 class="text-center">Tecnologie <a class="btn btn-primary" href="{{ route('technology.create') }}">
            +
        </a></h3>

    </div>
@endsection

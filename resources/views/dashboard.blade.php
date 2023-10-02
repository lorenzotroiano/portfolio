@extends('layouts.app')

@section('content')
    <div class="progetti p-5">
        <div class="d-flex">

            <h2 class="">Progetti</h2>

            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a class="btn btn-primary mx-3" href="{{ route('project.create') }}">
                        Aggiungi progetto
                    </a>
                </div>
            </div>

        </div>

        <div class="flex-project">

            @foreach ($projects as $project)
                <div class="d-flex justify-content-between flex-wrap w-100 p-4 align-items-center border-bottom">


                    <div>
                        <a class="link-body-emphasis link-underline-opacity-0 fs-4"
                            href="{{ route('project.show', $project->id) }}">
                            {{ $project->titolo }}</a>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a class=" btn btn-secondary text-white" href="{{ route('project.show', $project->id) }}">
                            Dettagli</a>

                        <a class="link-body-emphasis btn btn-light mx-3"
                            href="{{ route('project.edit', $project->id) }}">Modifica</a>

                        <form class="mx-3" method="POST" action="{{ route('project.destroy', $project->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>

    </div>







    <h2>Tecnologie</h2>
    <ul>
        @foreach ($technologies as $technology)
            <li>
                <a href="{{ route('technology.show', $technology->id) }}"> {{ $technology->nome }}</a>

            </li>
        @endforeach
    </ul>


    <span class="text-center">Tecnologie <a class="btn btn-primary" href="{{ route('technology.create') }}">
            +
        </a></span>

    </div>
@endsection

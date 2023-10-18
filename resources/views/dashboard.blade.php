@extends('layouts.app')

@section('content')
    <div class="progetti p-5">
        <div class="d-flex justify-content-between">

            <h2 class="text-white">Progetti</h2>

            <div class="d-flex justify-content-between">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mx-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tecnologie disponbili
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog p-3">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tecnologie</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body row row-cols-5 justify-content-around"
                                style="max-height: 200px; overflow-y: auto;">
                                @foreach ($technologies as $technology)
                                    <button class="btn btn-secondary m-1 fs-5"><a class="dropdown-item"
                                            href="{{ route('technology.show', $technology->id) }}">
                                            {{ $technology->nome }}</a></button>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <i
                        class="fa fa-gear"></i></button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Pannello di controllo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="d-flex justify-content-around align-items-center my-2">
                            <span>Progetto:</span>
                            <div class="">
                                <a class="btn btn-primary mx-3" href="{{ route('project.create') }}">
                                    Aggiungi nuovo progetto
                                </a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around align-items-center">
                            <span>Tecnologia:</span>
                            <a class="btn btn-primary max-3" href="{{ route('technology.create') }}">
                                Aggiungi nuova tecnologia
                            </a>
                        </div>



                    </div>
                </div>

            </div>

        </div>

        <div class="flex-project">

            @foreach ($projects as $project)
                <div class="d-flex justify-content-between flex-wrap w-100 p-4 align-items-center border-bottom">


                    <div>
                        <a class="link-body-emphasis link-underline-opacity-0 fs-4 text-white"
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







    {{-- <h2>Tecnologie</h2>
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

    </div> --}}
@endsection

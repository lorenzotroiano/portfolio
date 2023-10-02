<div class="container text-center">
    @extends('layouts.app')

    @section('content')
        <h1>Create new Technology</h1>

        <form method="POST" action="{{ route('technology.store') }}" enctype="multipart/form-data">

            @csrf
            {{-- @method('POST') --}}

            {{-- <label for="main_picture">Main picture</label>
    <br>
    <input type="file" name="main_picture" id="main_picture">
    <br> --}}


            <label for="nome">Nome</label>
            <br>
            <input type="text" name="nome" id="nome">





            <!-- Bottone di submit per inviare il form -->
            <input class="my-3" type="submit" value="CREATE">

        </form>
    </div>
@endsection

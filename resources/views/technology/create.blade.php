@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 pt-5">Create new Technology</h1>



    <form class='create-form' method="POST" action="{{ route('technology.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')


        <div class="flex-row">
            <input placeholder='Inserisci nome' id="nome" type="text" class="lf--input form-control" name="nome"
                required>
        </div>


        <div class="flex-row">
            <input placeholder='Inserisci icona' id="icona" type="text" class="lf--input form-control" name="icona"
                required>
        </div>
        <input class="lf--submit" type="submit" value="CREATE">
    </form>
@endsection

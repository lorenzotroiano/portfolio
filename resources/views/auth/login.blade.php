@extends('layouts.app')

@section('content')
    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4 row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Indirizzo Email</label>

            <div class="col-md-6">
                <input placeholder='Username' id="email" type="email"
                    class="lf--input form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-4 row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input placeholder='Password' id="password" type="password"
                    class="lf--input form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-4 row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Ricordami
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-4 row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit">
                    Login
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Password dimenticata?
                    </a>
                @endif
            </div>
        </div>
    </form> --}}


    <div class="container-fluid">
        <form class='login-form' method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex-row">
                <label class="lf--label" for="username">
                    <svg x="0px" y="0px" width="12px" height="13px">
                        <path fill="#B1B7C4"
                            d="M8.9,7.2C9,6.9,9,6.7,9,6.5v-4C9,1.1,7.9,0,6.5,0h-1C4.1,0,3,1.1,3,2.5v4c0,0.2,0,0.4,0.1,0.7 C1.3,7.8,0,9.5,0,11.5V13h12v-1.5C12,9.5,10.7,7.8,8.9,7.2z M4,2.5C4,1.7,4.7,1,5.5,1h1C7.3,1,8,1.7,8,2.5v4c0,0.2,0,0.4-0.1,0.6 l0.1,0L7.9,7.3C7.6,7.8,7.1,8.2,6.5,8.2h-1c-0.6,0-1.1-0.4-1.4-0.9L4.1,7.1l0.1,0C4,6.9,4,6.7,4,6.5V2.5z M11,12H1v-0.5 c0-1.6,1-2.9,2.4-3.4c0.5,0.7,1.2,1.1,2.1,1.1h1c0.8,0,1.6-0.4,2.1-1.1C10,8.5,11,9.9,11,11.5V12z" />
                    </svg>
                </label>
                <input placeholder='Username' id="email" type="email"
                    class="lf--input form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex-row">
                <label class="lf--label" for="password">
                    <svg x="0px" y="0px" width="15px" height="5px">
                        <g>
                            <path fill="#B1B7C4"
                                d="M6,2L6,2c0-1.1-1-2-2.1-2H2.1C1,0,0,0.9,0,2.1v0.8C0,4.1,1,5,2.1,5h1.7C5,5,6,4.1,6,2.9V3h5v1h1V3h1v2h1V3h1 V2H6z M5.1,2.9c0,0.7-0.6,1.2-1.3,1.2H2.1c-0.7,0-1.3-0.6-1.3-1.2V2.1c0-0.7,0.6-1.2,1.3-1.2h1.7c0.7,0,1.3,0.6,1.3,1.2V2.9z" />
                        </g>
                    </svg>
                </label>
                <input placeholder='Password' id="password" type="password"
                    class="lf--input form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <button type="submit" class='lf--submit'>
                Login
            </button>
        </form>
    </div>

    {{-- <a class='lf--forgot' href='#'>Forgot password?</a> --}}
@endsection

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .centered {
            position: absolute;
            left: 25%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-6">
                <img src="{{ asset('img/register.svg') }}" class="img-fluid" alt="">
                <div class="centered" style="top: 40%;"><h1><b>VASKOM</b></h1></div>
                <div class="centered" style="top: 50%;"><p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam sint nesciunt impedit!</b></p></div>
            </div>
            <div class="col-6">
                <div class="container d-flex h-100">
                    <div class="row align-self-center w-100">
                        <div class="col-8 mx-auto">
                            <div class="mb-3">
                                <h3><b>Selamat Datang</b></h3>
                                <p class="text-secondary">Silahkan masukkan email atau nomor telepon dan password
                                    Anda untuk mulai menggunakan aplikasi.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="mb-2">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="contoh : adam@gmail.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="mb-2">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukan password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-info" style="background-color: #41A0E4; color: white;">
                                        {{ __('MASUK') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

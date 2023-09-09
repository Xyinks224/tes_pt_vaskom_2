<style>
    .button-hover:hover {
        background-color: #41A0E4; /* Green */
        color: white;
    }
</style>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="..." height="36"></a>
        @guest
            <form class="w-50">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        @endguest
        <div class="d-flex">
            @guest
            <a href="{{ route('login') }}" class="btn btn-outline-info button-hover">MASUK</a>
            <a href="{{ route('register') }}" class="btn btn-info" style="background-color: #41A0E4; color: white; margin-left: 10px">DAFTAR</a>
            @else
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-list-4">
                <ul class="navbar-nav">
                    <li class="nav-item text-right">
                        <span class="text-info text-end" style="font-size: 12px">Hallo {{ Auth::user()->role }}.</span>
                        <p>{{ Auth::user()->name }}</p>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ Auth::user()->profile ?? asset('img/no_profile.svg') }}" width="40" height="40" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="text-center m-3">
                                <img src="{{ Auth::user()->profile ?? asset('img/no_profile.svg') }}" width="40" height="40" class="rounded-circle">
                                <div>
                                    <span>{{ Auth::user()->name }}</span>
                                    <p style="font-size: 10px">{{ Auth::user()->email }}</p>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
              </div>
            @endguest
        </div>
    </div>
    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

        </ul>

        <!-- Right Side Of Navbar -->
    </div> --}}
</nav>

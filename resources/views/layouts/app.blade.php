<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600&display=swap" rel="stylesheet" />

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .link-unstyled {
            color: inherit;
            text-decoration: inherit;
        }

        .link-unstyled:hover {
            color: inherit;
            text-decoration: underline;
        }

        ::placeholder {
            font-weight: 200;
            color: #000;
        }

        body {
            background-color: #fff;
        }

        button.cta-button {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        button.cta-button:hover {
            background-color: #000;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.4);
            color: #fff;
            transform: translateY(-7px);
        }

        button.cta-button:active {
            transform: translateY(-1px);
        }

        .mybox {
            width: 95%;
            max-width: 560px;
            min-height: 260px;
            padding: 20px;
            margin: 20px auto;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: #fff;
        }

        .mybucket>.d-flex>input {
            width: 70%;
        }

        .lister>li {
            /* display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center; */
            margin-bottom: 10px;
            min-height: 48px;
        }

        .lister>li>h2 {
            max-width: 75%;
            font-size: 18px;
            font-weight: 500;
            margin-right: auto;
            margin-bottom: 0px;
        }

        .lister>li>h2.done {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('js')

</html>

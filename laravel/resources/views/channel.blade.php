<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishub</title>
    {{-- <link rel="icon" type="image/png" href="path/to/your-icon.png"> --}}
    <link rel="icon" href="https://play-lh.googleusercontent.com/rCziw7h716n2XyJrfVDE9Cf8bJ1sGU7oDv9nq1APOQT1M5gPTy_EOP96DUQRD44tBnZN=w240-h480-rw" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <style>
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }
    </style>

</head>

<body>
    <button onclick="document.body.classList.toggle('dark-mode')">Toggle Dark Mode</button>
    <script>
        function toggleDarkMode() {
            var body = document.body;
            body.classList.toggle('dark-mode');
        }
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (localStorage.getItem('dark-mode') === 'true') {
                document.body.classList.add('dark-mode');
            }
        });

        document.body.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));
        });
    </script> --}}

    {{-- nav --}}
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">Dishub</a>

            <ul class="navbar-nav nav-underlinemb-2 mb-lg-0 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link"href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="channel">Channel</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Card --}}
    <div class="container-fluid">
        <br><br>
        <div class="flex">
            <div class="row">
                <div class="col">
                    <form action="{{ route('user') }}" method="get">
                        <div class="input-group">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" id="form1" name="query" class="form-control"
                                    placeholder="Search" value="{{ $query }}">
                            </div>
                            <button type="submit" class="btn btn-warning" data-mdb-ripple-init>
                                <i class="fas fa-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
                                        viewBox="0 0 488.4 488.4" xml:space="preserve">
                                        <path
                                            d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z"
                                            class="fill-black group-hover:fill-warna-50 duration-300" />
                                    </svg>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="btn btn-danger border-black" style="text-decoration: none">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" style="text-decoration: none" class="text-light"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-5 g-0">
            @foreach ($channel as $item)
                <div class="col">
                    <div class="card text-bg-secondary mt-5 mx-2">
                        <div class="card-header text-center text-bold">
                            {{ $item->content_type }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-bold">{{ $item->NAME }}</h5>
                            <p class="card-text fst-italic">{{ $item->DESCRIPTION }}</p>
                            <p class="badge bg-primary">{{ $item->country }}</p>
                            <p class="badge bg-danger">{{ $item->city }}</p>
                            <ul class="list-group">
                                <li class="list-group-item">Suscriber: {{ $item->suscribe }}</li>
                                <li class="list-group-item">Followers: {{ $item->followers }}</li>
                            </ul>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('subscribe.channel', ['id' => $item->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"
                                            style="width:100%">Subscribe</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="{{ route('follow.channel', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success"
                                            style="width:100%">Follow</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row row-cols-2 g-1">
        @foreach ($playlist as $sus)
            <div class="col">
                <div class="card text-bg-danger card mt-5 mx-2">
                    <div class="card-header">
                        {{ $sus->content_id }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sus->title }}</h5>
                        <p class="card-text">{{ $sus->created_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer style="margin-top: 5%;">
        <div class="row p-5 bg-dark">
            <div class="col text-center text-light">
                <h3>Currently user: {{ Auth::user()->name }}</h3>
            </div>
        </div>
    </footer>
</body>

</html>

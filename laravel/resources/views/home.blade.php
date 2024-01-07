<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body>

    {{-- nav --}}
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">Dishub</a>

            <ul class="navbar-nav nav-underlinemb-2 mb-lg-0 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="channel">Channel</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- card --}}
    <div class="container-fluid">
        <br><br>
        <div class="flex">
            <div class="row">
                <div class="col">
                    <form action="{{ route('users') }}" method="get">
                        <div class="input-group">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" id="form1" name="query" class="form-control"
                                    placeholder="Search" value="{{ $query }}">
                            </div>
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
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

        <div class="row row-cols-5 g-4">
            @foreach ($content as $item)
                <div class="col">
                    <div class="card mt-5 mx-2">
                        <div class="card-header">
                            {{ $item->channel_id }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->DESCRIPTION }}</p>
                            <a href="#" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Tabel untuk menampilkan riwayat data berdasarkan data yg telah di SEE/Lihat -->

        <footer style="margin-top: 5%;">
            <div class="row p-5 bg-dark">
                <div class="col text-center text-light">
                    <h3>test</h3>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>

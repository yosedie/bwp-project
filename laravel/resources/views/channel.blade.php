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
                    <a class="nav-link"href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="channel">Channel</a>
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
            <form action="{{ route('user')}}" method="get">
            <div class="input-group">
                <div class="form-outline" data-mdb-input-init>
                  <input type="search" id="form1" name="query" class="form-control" placeholder="Search" value="{{$query}}">
                </div>
                <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                  <i class="fas fa-search"></i>
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
</div>

        <div class="row row-cols-5 g-0">
            @foreach ($channel as $item)
                <div class="col">
                    <div class="card mt-5 mx-2">
                        <div class="card-header">
                            {{ $item->content_type }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->NAME }}</h5>
                            <p class="card-text">{{ $item->DESCRIPTION }}</p>
                            <span class="badge bg-primary">{{ $item->country }}</span>
                            <p class="card-text text-muted">{{ $item->city }}</p>
                            <ul class="list-group">
                                <li class="list-group-item">Suscriber: {{ $item->suscribe }}</li>
                                <li class="list-group-item">Followers: {{ $item->followers }}</li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row row-cols-2 g-1">
                @foreach ($playlist as $sus)
            <div class="col">
                <div class="card mt-5 mx-2">
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
                <h3>test</h3>
            </div>
        </div>
    </footer>
</body>

</html>

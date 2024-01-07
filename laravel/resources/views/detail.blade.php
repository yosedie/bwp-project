<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body>
    {{-- Nav --}}
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">Dishub</a>

            <ul class="navbar-nav nav-underlinemb-2 mb-lg-0 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('users') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('user') }}">Channel</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid mt-3">
        <a href="{{ url()->previous() }}"><button type="button" class="btn btn-outline-danger"><- Back</button></a>

        <div class="row mt-5">
            <div class="col text-center">
                <img src="/temp1.jpeg" alt="" style="width:600px; height:400px;">
            </div>
            <div class="col text-center my-5">
                <p><strong>Title: {{ $contents->title }}</strong></p>
                <br>
                <p>Description: {{ $contents->DESCRIPTION }}</p>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <span><strong>Comment</strong></span>
            <div class="col border border-black mx-5">
                <span><strong>{{ $user->name }}</strong> : <i>{{ $comments->COMMENT }}</i></span>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <span><strong>Watch Latered by:</strong></span>
            <div class="col border border-black mx-5">
                <span>{{ $user->name }}</span>
            </div>
        </div>
    </div>


    {{-- Footer --}}
    <footer class="fixed-bottom" style="margin-top: 5%;">
        <div class="row p-5 bg-dark">
            <div class="col text-center text-light">
                <h3>Currently user: {{ Auth::user()->name }}</h3>
            </div>
        </div>
    </footer>
</body>

</html>

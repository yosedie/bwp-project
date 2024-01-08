<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisHub</title>
    {{-- <link rel="icon" type="image/png" href="path/to/your-icon.png"> --}}
    <link rel="icon"
        href="https://play-lh.googleusercontent.com/rCziw7h716n2XyJrfVDE9Cf8bJ1sGU7oDv9nq1APOQT1M5gPTy_EOP96DUQRD44tBnZN=w240-h480-rw"
        type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

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

    {{-- Nav --}}
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/logo.png" alt="" width="50" height="40">
                Dishub
            </a>

            <ul class="navbar-nav nav-underline mb-2 mb-lg-0 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('users') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('user') }}">Channel</a>
                </li>
                <li>
                    <button class="btn btn-outline-light" onclick="document.body.classList.toggle('dark-mode')">Dark
                        Mode</button>
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

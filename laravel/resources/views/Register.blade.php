@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <h2>My Form</h2>
                        <form action="{{ url('/submit-form') }}" method="post">
                            @csrf
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>
                            <br>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                            <br>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Other stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Content -->
    @yield('content')
    <!-- Other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1"style="color:white; background-color: blue;">
    Retrive User
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2"style="color:white; background-color: blue;">
    All Admin
  </button>
    @isset($users)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                @if ($item->role == 'user')
                    <tr id="sid{{$item->id}}">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>{{ $item->updated_at}}</td>
                        <td>
                            <a href="javascript:void(0)" class="delete-user btn btn-danger" data-user-id="{{ $item->id }}">
                                Delete
                            </a>
                            {{-- <a
                            href="javascript:void(0)"
                            id="updateUserRoleBtncol"
                            type="button" class="btn btn-primary"
                            data-user-id="{{ $item->id }}"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModalupdate"
                            style="color:white; background-color: blue;">Update</a> --}}

                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    @else
        <p>No users available.</p>
    @endisset


    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}


  <!-- Modal update-->
  {{-- <div class="modal fade" id="exampleModalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    @foreach ($users as $user)
                        <form id="update-user-form-{{ $user->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="updateUser('{{route('update-user',$user->id)}}')">Update User</button>
                        </form>
                    @endforeach
                </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}

  <!-- Modal retrieve user-->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Retrieve User</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @isset($users)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        @if ($item->role == 'off')
                            <tr id="sid{{$item->id}}">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <a href="javascript:void(0)" class="retrive-user btn btn-danger" data-user-id="{{ $item->id }}">
                                        Retrieve
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No users available.</p>
            @endisset
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color:white; background-color: gray;">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>All Admin</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @isset($users)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        @if ($item->role == 'admin')
                            <tr id="sid{{$item->id}}">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->updated_at}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No Admin available.</p>
            @endisset
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color:white; background-color: gray;">Close</button>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>

    $(document).ready(function() {
    // Ajax request to create a user
    $('#create-user-form').submit(function(event) {
        event.preventDefault();

        // Collect form data
        var formData = $(this).serialize();

        // Make Ajax request
        $.ajax({
            url: '/updateUserRole' + id, // Adjust the route accordingly
            method: 'POST',
            data: formData,
            success: function(response) {
                console.log(response.message);
                // Add logic to refresh the users list or show success message
            },
            error: function(error) {
                console.error('Error creating user:', error.responseJSON);
            }
        });
    });

    // Ajax request to update a user
    $.put = function(url, data, callback, dataType){
        if ($.isFunction(data)){
            dataType = dataType || callback;
            callback = data;
            data = {};
        }
        return $.ajax({
            url: url,
            type: 'PUT',
            success: callback,
            data: data,
            dataType: dataType
        });
    };

    function updateUser(url) {
        // Extract user ID from the URL
        var userId = url.split('/').pop();

        // Collect form data
        var formData = $('#update-user-form-' + userId).serialize();

        // Make Ajax request using $.put
        $.put({
            url: url,
            data: formData,
            success: function (response) {
                console.log(response.message);
                // Optionally, show success message or perform other actions
                // For example, reload the page
                location.reload();
            },
            error: function (error) {
                console.error('Error updating user:', error.responseJSON);
            }
        });
    }


        $('.delete-user').on('click', function() {
            var userId = $(this).data('user-id');

            // Get CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Make AJAX request to change user role
            $.ajax({
                url: '/changeUserRole/' + userId,
                method: 'POST',
                data: {
                    role: 'off',
                    // Include CSRF token in the request
                    _token: csrfToken
                },
                success: function(response) {
                    console.log(response.message);
                    // Optionally, refresh the users list or show success message
                    fetchAndDisplayUsers();
                },
                error: function(error) {
                    console.error('Error changing user role:', error.responseJSON);
                }
            });
        });
        $('.retrive-user').on('click', function() {
            var userId = $(this).data('user-id');

            // Get CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Make AJAX request to change user role
            $.ajax({
                url: '/changeUserRole/' + userId,
                method: 'POST',
                data: {
                    role: 'user',
                    // Include CSRF token in the request
                    _token: csrfToken
                },
                success: function(response) {
                    console.log(response.message);
                    // Optionally, refresh the users list or show success message
                    fetchAndDisplayUsers();
                    $('#exampleModal1').modal('hide');fetchAndDisplayUsers();
                },
                error: function(error) {
                    console.error('Error changing user role:', error.responseJSON);
                }
            });
        });

        var selectedUserId;

        // Function to set the user information in the modal form
        function setUserInfo(userId, name, email) {
            selectedUserId = userId;
            $('#name').val(name);
            $('#email').val(email);
        }

    // Function to update the user using AJAX


        // Event listener for when the modal is shown
        $('#exampleModalupdate').on('show.bs.modal', function (event) {
            // Extract user ID from the button that triggered the modal
            var button = $(event.relatedTarget);
            var userId = button.data('user-id');

            // Get user information using AJAX and set it in the form
            $.ajax({
                url: '/user/' + userId + '/edit',
                method: 'GET',
                success: function (user) {
                    setUserInfo(user.id, user.name, user.email);
                },
                error: function (error) {
                    console.error('Error getting user information:', error.responseJSON);
                }
            });
        });
        function fetchAndDisplayUsers() {
            $.ajax({
                url: '/getUsers',
                method: 'GET',
                success: function(response) {
                    // Update the user list on the dashboard
                    $('#user-list').html(response);
                },
                error: function(error) {
                    console.error('Error fetching users:', error.responseJSON);
                }
            });
        }
});


</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="custom-script.js"></script>

</body>
</html>

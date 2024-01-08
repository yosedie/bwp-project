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
    <form id="create-user-form">
        <!-- Add your input fields for name, email, password, role, etc. -->
        <button type="submit">Create User</button>
    </form>


    @isset($users)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>updated_at</th>
                <th>Action</th>
                <!-- Add more columns as needed -->
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

                            {{-- <button id="updateUserRoleBtn" class="btn btn-danger">Delete</button> --}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            style="color:white; background-color: blue;">Update</button>

                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    @else
        <p>No users available.</p>
    @endisset


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>

                <div class="card-body">
                    <form id="update-user-form" method="POST" action="{{ route('update-user') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button id="updateUserBtn" type="submit" class="btn btn-primary" onclick="updateUser()" style="color:white; background-color: blue;">Update User</button>
                    </form>
                </div>
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
    $('.update-user').click(function() {
        var userId = $(this).data('user-id');
        var updatedName = prompt('Enter the updated name:');

        $.ajax({
            url: '/admin/users/' + userId, // Adjust the route accordingly
            method: 'PUT',
            data: { name: updatedName },
            success: function(response) {
                console.log(response.message);
                // Add logic to refresh the users list or show success message
            },
            error: function(error) {
                console.error('Error updating user:', error.responseJSON);
            }
        });
    });

    // Ajax request to delete a user
    // Handle "Delete" button click

    // $('#updateUserRoleBtn').on('click', function() {
    //     var id = $(this).data('user-id');

    //     // Make AJAX request to change user role
    //     $.ajax({
    //         url: '/changeUserRole/' + id,
    //         method: 'POST',
    //         data: { role: 'off' },
    //         success: function(response) {
    //             console.log(response.message);
    //             // Optionally, refresh the users list or show success message
    //             fetchAndDisplayUsers();
    //         },
    //         error: function(error) {
    //             console.error('Error changing user role:', error.responseJSON);
    //         }
    //     });
    // });
    // function create() {
    // $.get("{{ url('create') }}", {}, function (data, status) {

    //     $('#page').html(data);
    //     $('#exampleModal').modal('show');
    // });
    // function create() {
    //     var name = $("#name").val();
    //     $.ajax({
    //         type: "method",
    //         url: "url",
    //         data: "data",
    //         dataType: "dataType",
    //         success: function (response) {

    //         }
    //     });



    // Untuk modal halaman edit show
    // function show(id) {
    //         $.get("{{ url('show') }}/" + id, {}, function(data, status) {
    //             $("#exampleModalLabel").html('Edit Product')
    //             $("#page").html(data);
    //             $("#exampleModal").modal('show');
    //         });
    //     }

        // untuk proses update data
        // function update(id) {
        //     var name = $("#name").val();
        //     $.ajax({
        //         type: "get",
        //         url: "{{ url('update') }}/" + id,
        //         data: "name=" + name,
        //         success: function(data) {
        //             $(".btn-close").click();
        //             read()
        //         }
        //     });
        // }
        // $('#updateUserRoleBtn').on('click', function() {
        // var userId = $(this).data('user-id');
        // // Make AJAX request to update user role
        //     $.ajax({
        //         url: '/updateUserRole/' + userId,
        //         method: 'POST',
        //         data: { role: 'off' },
        //         success: function(response) {
        //             console.log(response.message);
        //             // Optionally, show success message or perform other actions
        //             // Refresh the users list after updating the role
        //             fetchAndDisplayUsers();
        //         },
        //         error: function(error) {
        //             console.error('Error updating user role:', error.responseJSON);
        //         }
        //     });
        // });
        // function fetchAndDisplayUsers() {
        //         $.ajax({
        //             url: '/getUsers', // Replace with the appropriate route to fetch users
        //             method: 'GET',
        //             success: function(response) {
        //                 // Update the user list on the dashboard
        //                 $('#user-list').html(response);
        //             },
        //             error: function(error) {
        //                 console.error('Error fetching users:', error.responseJSON);
        //             }
        //         });
        // }
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
        $('#updateUserBtn').click(function() {
            updateUser();
        });
        function updateUser() {
            // Collect form data
            var formData = $('#update-user-form').serialize();

            // Make Ajax request
            $.ajax({
                url: $('#update-user-form').attr('action'), // Use the form action URL
                method: 'POST',
                data: formData,
                success: function (response) {
                    console.log(response.message);
                    // Optionally, show success message or perform other actions
                    // For example, close the modal
                    $('#exampleModal').modal('hide');fetchAndDisplayUsers();
                },
                error: function (error) {
                    console.error('Error updating user:', error.responseJSON);
                }
            });
        }

    });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="custom-script.js"></script>

</body>
</html>

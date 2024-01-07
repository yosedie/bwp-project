<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Other stylesheets -->
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
                <th>ID</th>
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
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>{{ $item->updated_at}}</td>
                        <td>

                            <button class="delete-user btn btn-danger" data-user-id="{{ $item->id }}">Delete</button>
                            <button class="delete-user btn btn-primary" data-user-id="{{ $item->id }}">Update</button>
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
</x-app-layout>

<script>
    $(document).ready(function()) {
        // Ajax request to create a user
        $('#create-user-form').submit(function(event) {
            event.preventDefault();

            // Collect form data
            var formData = $(this).serialize();

            // Make Ajax request
            $.ajax({
                url: '/admin/users', // Adjust the route accordingly
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
        $('.delete-user').click(function() {
    var userId = $(this).data('user-id');

    if (confirm('Are you sure you want to delete this user?')) {
        $.ajax({
            url: '/admin/users/' + userId,
            method: 'DELETE',
            success: function(response) {
                console.log(response.message);
                // Add logic to refresh the users list or show success message
            },
            error: function(error) {
                console.error('Error deleting user:', error.responseJSON);
            }
        });
    }
    });
</script>
</body>
</html>

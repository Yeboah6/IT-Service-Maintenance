<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="padding: 20px;">
                <div class="table-wrapper">
                    <div class="table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach ($user as $user)
                                <tr>
                                    <td>{{$user -> id}}</td>
                                    <td>{{$user -> name}}</td>
                                    <td>{{$user -> email}}</td>
                                    <td>{{$user -> role}}</td>
                                    <td>{{$user -> created_at}}</td>
                                    <td>{{$user -> updated_at}}</td>
                                    <td><a href="#"><button type="submit" class="btn btn-secondary" style="color:black; background-color: red">Delete</button></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
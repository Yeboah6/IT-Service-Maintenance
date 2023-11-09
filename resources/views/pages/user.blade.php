<x-app-layout>
    <div class="user-container">
        <div class="py-12" style="margin-left: 2px;margin-top:100px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding: 20px;margin-top: 25px;">
                    <div class="table-wrapper">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
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
                                        <!-- <td>{{$user -> role}}</td> -->
                                        <td>{{$user -> created_at}}</td>
                                        <td>{{$user -> updated_at}}</td>
                                        <td><a href="{{url('/delete-user/'.$user -> id)}}" class="btn btn-danger" style="font-size: 0.85rem;">Delete</a></td>
                                    </tr>            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
  .user-container {
    /* margin-top: 200px; */
    position: relative;
    top: -102px;
    margin-left: 219px;
    height: 200px;
    width: 1130px;
    background-color: red;
}
</style>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container wrapper">
                    <div class="tech-wrapper" style="margin: 20px;margin-left: 950px">
                    <h1 class="btn btn-primary"><a href="add-technicians" :active="request()->routeIs('technicians')"><span>+</span> Add</a></h1>
                    </div>
                    <div class="table-wrapper">
                        <div class="table">
                            <table class="table table-bordered table-striped" >
                                <thead>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($technician as $technician)
                                    <tr>
                                        <td>{{ $technician -> name }}</td>
                                        <td>{{ $technician -> number }}</td>
                                        <td>{{ $technician -> email }}</td>
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{ $technician -> status }}</span></td>
                                        <td>{{ $technician -> department }}</td>
                                        <td><a href="{{url('/delete-technician/'.$technician -> id)}}" class="btn btn-danger" style="font-size: 0.85rem;">Delete</a></td>

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
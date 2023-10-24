<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800  sm:rounded-lg" style="padding:5px;margin-top:-60px;margin-left:-20px;width:1130px">
                <div class="container wrapper">
                    <div class="card-wrapper">
                        <div class="card card-3" style="font-weight: bold; font-size: 1.2rem;">
                            <p>{{$wordCount}}</p>
                            <h5>Total</h5>
                        </div>
                        <div class="card card-3" style="font-weight: bold; font-size: 1.2rem;">
                            <p>{{$assignCount}}</p>
                            <h5>Assigned</h5>
                        </div>
                        <div class="card card-3" style="font-weight: bold; font-size: 1.2rem;">
                            <p>{{$users}}</p>
                            <h5>Users</h5>
                        </div>
                    </div>

                    <div class="table-wrapper">
                        <div class="table">
                            <table class="table table-bordered table-striped" >
                                <thead>
                                    <th>Reporter Name</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th> 
                                    <th>Assign To</th> 
                                    <th>Action</th> 
                                </thead>
                                
                                
                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident[0] -> status}}</span></td>
                                        <td>{{$incidnet -> from}}</td>
                                        <td>{{$incidnet -> assigne_to}}</td>
                                        <td><a href="{{url('/delete/'.$incidnet -> id)}}" class="btn btn-danger" style="font-size: 0.85rem;">Delete</a></td>
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


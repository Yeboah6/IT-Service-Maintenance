<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg" style="padding:5px;margin-top:-30px;">
                <div class="container wrapper">
                    <div class="card-wrapper">
                        <div class="card card-3">
                            <p>{{$wordCount}}</p>
                            <h5>Total</h5>
                        </div>
                        <div class="card card-3">
                            <p>{{$assignCount}}</p>
                            <h5>Not Assigned</h5>
                        </div>
                        <div class="card card-3">
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
                                    <th>From (Unit/Department)</th> 
                                    <th>Assign To</th> 
                                </thead>

                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td>Submitted</td>
                                        <td>{{$incidnet -> from}}</td>
                                        <td>{{$incidnet -> assigne_to}}</td>
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

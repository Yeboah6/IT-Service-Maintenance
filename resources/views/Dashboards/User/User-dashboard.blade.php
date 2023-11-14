<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container wrapper" >
                    <div class="table-wrapper">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter Name</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Status</th>
                                    <th>Summary</th>
                                    <th>From (Unit/Department)</th> 
                                </thead>

                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td>{{$incidnet -> statusCheck}}</td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td>{{$incidnet -> from}}</td>
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






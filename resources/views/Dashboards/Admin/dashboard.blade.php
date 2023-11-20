<x-app-layout>
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  sm:rounded-lg">
                <div class="container wrapper">
                   
                    
                    <div class="card-container" id="cardId">
                        <div class="card-wrapper" style="margin-left: 95px;">
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Incidents <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span></li>
                                <li>{{$wordCount}}</li>
                                <li>28 Completed</li>
                            </ul>
                            
                            </div>
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Incident Assigned <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span></li>
                                <li>{{$assignCount}}</li>
                                <li>Assigned</li>
                            </ul>
                            </div>
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Users <span><i class="fa fa-user-o" aria-hidden="true"></i></span></li>
                                <li>{{$users}}</li>
                                <li>Users</li>
                            </ul>
                            </div>
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Technicians <span><i class="fa fa-user-o" aria-hidden="true"></i></span></li>
                                <li>{{$technicians}}</li>
                                <li>2 Available</li>
                            </ul>
                                <p></p>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                    <!-- <span >Expand Dashboard</span> -->
                    <div class="table-wrapper" style="margin-left: 190px;width:1050px;font-size:0.9rem;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
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
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incidnet -> statusCheck}}</span></td>
                                        <td>{{$incidnet -> from}}</td>
                                        <td>{{$incidnet -> assign_to}}</td>
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

<style>

.toggleDashboard {
    width: 1357px;
    /* width: 100%; */
    /* margin-left: -100px; */
    margin-left: -87px;
    background-color: blue;
}

</style>

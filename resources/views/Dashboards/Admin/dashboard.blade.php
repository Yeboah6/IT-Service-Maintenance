<x-app-layout>
    <div class="card-container" id="cardId">
    <div class="py-12" style="margin-top: 90px;"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  sm:rounded-lg">
                <div class="container wrapper">
                        <div class="card-wrapper" style="margin-left: 180px;margin-top: -170px;">
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Incidents <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span></li>
                                <li>{{$wordCount}}</li>
                                <li>{{$resolved}} Resolved</li>
                            </ul>
                            
                            </div>
                            <div class="card card-3" style="font-weight: bold; font-size: 1rem;">
                            <ul>
                                <li>Incident Assigned <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span></li>
                                <li>{{$assignCount}}</li>
                                <li>{{$unassigned}} Unassigned</li>
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
                    <div class="table-wrapper" style="margin-left: 180px;width:1090px;font-size:0.9rem;margin-top:100px;">
                    <div class="tech-wrapper" style="margin: 20px;margin-left: 970px">
                        <h1 class="btn btn-primary"><a href="create-incident" :active="request()->routeIs('technicians')"><span style="color: white;">+</span> Add</a></h1>
                    </div>
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Ticket No.</th>
                                    <th>Reporter Name</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th> 
                                    <th>Assign To</th> 
                                    <!-- <th>Technician Status</th>  -->
                                    <th>Action</th> 
                                </thead>
                                
                                
                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td></td>
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

/* Admin-Dashboard */

.card-container {
    position: absolute;
    top: 63px;
    height: 150px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}

.card-wrapper {
    /* margin-top: -50px; */
    display: flex;
    justify-content: space-around;
    margin: -75px;
}

.card-3 {
  width: 200px;
}

.card {
  height: 130px;
  margin-top: 100px;
  padding: 15px;
  background-color: whitesmoke;
}

.card li {
  margin: 7px;
}

.toggleDashboard {
    width: 1357px;
    margin-left: -87px;
    background-color: blue;
}

</style>

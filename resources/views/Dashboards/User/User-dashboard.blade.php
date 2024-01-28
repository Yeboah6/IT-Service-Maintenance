<x-app-layout>
<div class="userDashboard-container" id="cardId">
    <div class="py-12" style="margin-top: 90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: -15px;margin-top: -40px;">
                <div class="container wrapper">
                    <div class="table-wrapper" style="margin-top: 30px;font-size:0.9rem;width:1070px;margin-left: 0;">
                        <div class="table">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <th>Ticket No.</th>
                                    <th>Reported By</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Status</th>
                                    <th>Summary</th>
                                    <th>From (Department)</th> 
                                    <th>Assigned To</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    @foreach($incident as $incident)
                                    <tr>
                                        <td>{{$incident -> ticket_no}}</td>
                                        <td>{{$incident -> reported_by}}</td>
                                        <td>{{$incident -> issue_type}}</td>
                                        <td>{{$incident -> issue}}</td>
                                        <td>{{$incident -> urgency}}</td>
                                    @if ($incident -> statusCheck == "Submitted")
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</span></td>
                                    @elseif ($incident -> statusCheck == "Pending")
                                        <td><span style="background-color: yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{$incident -> statusCheck}}</span></td>
                                    @else
                                        <td><span style="background-color: green;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</span></td>
                                    @endif
                                        <td>{{$incident -> description}}</td>
                                        <td>{{$incident -> from}}</td>
                                        <td>
                                    @foreach ($techName as $name)
                                        @if ($name -> id == $incident -> technician_id)
                                            {{ $name -> name }}
                                        @endif
                                    @endforeach
                                        </td>
                                    
                                        <td scope="col"><a href="{{url('/view-more/'.$incident -> id)}}" class="btn btn-primary" style="font-size: 0.85rem;">Details</a></td>
                                            
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
    </div>
</x-app-layout>


<style>

.userDashboard-container {
    position: absolute;
    top: 64px;
    height: 150px;
    width: 84%;
    background-color: #1995AD;
    left: 219px;
}
</style>



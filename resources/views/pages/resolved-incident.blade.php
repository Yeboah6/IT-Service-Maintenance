<x-app-layout>
    <div class="resolved-container" id="cardId">
        <div class="py-12" style="margin-left: 2px;margin-top:100px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 45px;margin-left:163px;width: 1110px;">
                    <div class="container wrapper">
                        <div class="table-wrapper" style="font-size: 0.9rem;margin-top: 25px;width:1085px;">
                            <div class="table">
                                <table class="table table-bordered table-striped" >
                                    <thead>
                                        <th>Ticket No</th>
                                       <th>Reporter Name</th>
                                       <th>Issue Type</th>
                                       <th>Issue</th>
                                       <th>Urgency</th>
                                       <th>Description</th>
                                       <th>Status</th>
                                       <th>From (Department)</th>
                                       <th>Assigned To</th>
                                       <th>Action</th>
                                    </thead>

                                        <tbody>
                                            @foreach ($resolved as $resolved)
                                            <tr>
                                                <td>{{$resolved -> ticket_no}}</td>
                                                <td>{{ $resolved -> reporter }}</td>
                                                <td>{{ $resolved -> issue_type }}</td>
                                                <td>{{ $resolved -> issue }}</td>
                                                <td>{{ $resolved -> urgency }}</td>
                                                <td>{{ $resolved -> description }}</td>
                                                <td><span style="background-color: green;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{ $resolved -> statusCheck }}</span></td>
                                                <td>{{ $resolved -> from }}</td>
                                                <td>{{ $resolved -> assign_to }}</td>
                                                <td><a href="{{url('/view-more/'.$resolved -> id)}}" class="btn btn-primary">Details</a></td>
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
  .resolved-container {
    position: relative;
    top: -140.8px;
    height: 150px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}
</style>
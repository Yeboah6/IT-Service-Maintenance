<x-app-layout>
    <div class="pending-container" id="cardId">
        <div class="py-12" style="margin-left: 2px;margin-top:100px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 55px;margin-left:163px;width: 1110px;">
                    <div class="container wrapper">
                        <div class="table-wrapper" style="font-size: 0.9rem;margin-top:25px;width:1085px;">
                            <div class="table">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-light">
                                        <th>Ticket No.</th>
                                       <th>Reported By</th>
                                       <th>Issue Type</th>
                                       <th>Issue</th>
                                       <th>Urgency</th>
                                       <th>Description</th>
                                       <th>Status</th>
                                       <th>From (Cell)</th>
                                       <th>Assigned To</th>
                                       <th colspan="2" style="text-align: center;">Action</th>
                                    </thead>

                                    <tbody>
                                        @foreach ($displaySearch as $display)
                                            <tr>
                                            <td>{{$display -> ticket_no}}</td>
                                                <td>{{ $display -> reporter }}</td>
                                                <td>{{ $display -> issue_type }}</td>
                                                <td>{{ $display -> issue }}</td>
                                                <td>{{ $display -> urgency }}</td>
                                                <td>{{ $display -> description }}</td>
                                                <td><span style="background-color: yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{ $display -> statusCheck }}</span></td>
                                                <td>{{ $display -> from }}</td>
                                                <td>
                                                @foreach ($techName as $name)
                                                @if ($name -> id == $display -> technician_id)
                                                    {{$name -> name}}
                                                @endif
                                                    
                                                @endforeach
                                                </td>
                                                
                                                <td><a href="{{url('/view-more/'.$display -> id)}}" class="btn btn-primary">Details</a></td>
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
  .pending-container {
    position: relative;
    top: -140.8px;
    height: 150px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}
</style>
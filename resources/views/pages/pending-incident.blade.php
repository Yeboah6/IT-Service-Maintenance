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
                                            @foreach ($pending as $pending)
                                            <tr>
                                                <td>{{$pending -> ticket_no}}</td>
                                                <td>{{ $pending -> reported_by }}</td>
                                                <td>{{ $pending -> issue_type }}</td>
                                                <td>{{ $pending -> issue }}</td>
                                                <td>{{ $pending -> urgency }}</td>
                                                <td>{{ $pending -> description }}</td>
                                                <td><span style="background-color: yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{ $pending -> statusCheck }}</span></td>
                                                <td>{{ $pending -> from }}</td>
                                                <td>
                                                @foreach ($techName as $name)
                                                @if ($name -> id == $pending -> technician_id)
                                                    {{$name -> name}}
                                                @endif
                                                    
                                                @endforeach
                                                </td>
                                                
                                                <td><a href="{{url('/view-more/'.$pending -> id)}}" class="btn btn-primary">Details</a></td>
                                                <form action="{{url('/resolve-incident/'.$pending -> id)}}" method="post">
                                                    @csrf
                                                <td><button type="submit" class="btn btn-primary" style="background-color: blue;">Done</button></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                <p onclick="on()">Click</p>
                                <div id="overlay" onclick="off()">
                                    Overlay Text
                                </div>
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

#overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}






</style>

<script>
      function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

</script>
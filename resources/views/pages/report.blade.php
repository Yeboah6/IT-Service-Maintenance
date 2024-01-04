<x-app-layout>
<div class="report-container" id="cardId" style="margin-left: 0;">
    <div class="py-12" style="margin-left: -75px;margin-top:50px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg" style="margin-top:-5px;margin-left:240px;">
                <div class="container wrapper">
                    <form action="{{url('report')}}" method="GET" role="search">
                        @csrf
                    <ul>
                    <li>

                    @php
                        $hardwareUser = auth()->user()-> email == "hardwareadmin@gmail.com";
                        $networkUser = auth()->user()-> email == "networkadmin@gmail.com";
                    @endphp
                        <label>Issue Type</label>
                        <br>
                            @if ($hardwareUser)
                            <input type="text" class="form-control" style="width: 200px;border-radius:6px;padding-left: 50px;" name="Hardware" value="Hardware" readonly>
                                
                            @elseif ($networkUser)
                            <input type="text" class="form-control" style="width: 210px;border-radius:6px" value="Network" readonly>
                            @endif
                       
                    </li>

                     <li>
                    <label >Technician</label>
                        <br>
                    <select name="technician">
                    <option selected>--Select Technician---</option>
                        @foreach ($technician as $tech)
                        <option value="{{ $tech -> id }}">{{$tech -> name}}</option>
                        @endforeach
                    </select>
                    </li>

                    <li>
                    <label>Ticket No.</label>
                    <br>
                    <!-- <form action="{{url('report-search')}}" method="GET" role="search"> -->
                        <input type="search" class="form-control" style="width: 210px;border-radius:6px" name="ticketNo" >
                    </li>
                   
                    <!--<li>
                        <label for="">Date</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li>
                    <li>
                        <label for="">Date</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li> -->
                    <li>
                        <br>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </li>
                    </ul>
                    <!-- </form> -->
                    </form>
                </div>

               
                    <div class="table-wrapper" style="margin-top: 25px;width:1100px;font-size:0.9rem;margin-left: -35px;">
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
                                    <th>Assign To</th> 
                                    <th>Action</th>
                                </thead>
                            
                                <tbody>
                                     @foreach ($issueType as $issueType)
                                        <tr>
                                            <td>{{$issueType -> ticket_no}}</td>
                                            <td>{{ $issueType -> reporter }}</td>
                                            <td>{{ $issueType -> issue_type }}</td>
                                            <td>{{ $issueType -> issue }}</td>
                                            <td>{{ $issueType -> urgency }}</td>
                                            <td>{{ $issueType -> description }}</td>
                                        @if ($issueType -> statusCheck == "Submitted")
                                            <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$issueType -> statusCheck}}</span></td>
                                        @elseif ($issueType -> statusCheck == "Pending")
                                            <td><span style="background-color: yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{$issueType -> statusCheck}}</span></td>
                                        @else
                                            <td><span style="background-color: green;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$issueType -> statusCheck}}</span></td>
                                        @endif
                                            <td>{{ $issueType -> from}}</td>

                                            <td>
                                                @foreach ($technician as $name)
                                                    @if ($name -> id == $issueType -> technician_id)
                                                        {{ $name -> name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td><a href="{{url('/view-more/'.$issueType -> id)}}" class="btn btn-primary">Details</a></td>
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

    .wrapper select {
        border-radius: 5px;
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }

    .report-container {
    margin-top: 200px;
    position: relative;
    top: -243px;
    margin-left: 75px;
    height: 100px;
    width: 100%;
    background-color: #1995AD;
}

.wrapper ul {
    display: flex;
    margin-left: -28px;
}

.wrapper li {
    margin: 10px;
}

</style>
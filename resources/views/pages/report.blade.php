<x-app-layout>
<div class="report-container" id="cardId" style="margin-left: 0;">
    <div class="py-12" style="margin-left: 20px;margin-top:50px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg" style="margin-top:-5px;margin-left:240px;">
                <div class="container wrapper">
                    <form action="{{url('report')}}" method="get" role="search">
                        @csrf
                    <ul>
                    <li>
                        <label>Issue Type</label>
                        <br>
                        <select name="issue_type">
                       <option value="Hardware">Hardware</option>
                       <option value="Network">Network</option>
                       <option value="">Software</option>
                        </select>
                        <!-- <br> -->
                    </li>

                    <li>
                    <label for="">Technician</label>
                    <br>
                        <select name="technician">
                        <option value="">---Select Technician---</option>
                            @foreach ($technician as $tech)
                                <option value="{{$tech -> name}}">{{$tech -> name}}</option>
                            @endforeach
                        
                    </select>
                    </li>
                    <!-- <li>
                    <label for="">Month</label>
                    <br>
                        <select name="month">
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                        <option value="">May</option>
                        <option value="">June</option>
                        <option value="">July</option>
                        <option value="">August</option>
                        <option value="">September</option>
                        <option value="">October</option>
                        <option value="">November</option>
                        <option value="">December</option>
                    </select>
                    </li> -->
                    <!-- <li>
                    <label for="">Month</label>
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
                    </form>
                </div>

               
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>

                            <!-- <tbody>
                                            @foreach ($search as $search)
                                            <tr>
                                                <td>{{$search -> ticket_no}}</td>
                                                <td>{{ $search -> reporter }}</td>
                                                <td>{{ $search -> issue_type }}</td>
                                                <td>{{ $search -> issue }}</td>
                                                <td>{{ $search -> urgency }}</td>
                                                <td>{{ $search -> description }}</td>
                                                <td><span style="background-color: green;font-size:0.85rem;padding:4px;color:black;border-radius: 6px">{{ $search -> statusCheck }}</span></td>
                                                <td>{{ $search -> from }}</td>
                                                <td>{{ $search -> assign_to }}</td>
                                                <td><a href="{{url('/view-more/'.$search -> id)}}" class="btn btn-primary">Details</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody> -->
                        </div>
                    </div> 
                     <!-- <button class="accordion" style="width: 200px;">January</button>
                <div class="panel">
                </div> -->
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
        /* background-color: red; */
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

/* .accordion:after {
  content: '\02795';
  font-size: 8px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.activebtn:after {
  content: "\2796"; 
} */


 /*
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.5s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
} */
</style>


<!-- <script>

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activebtn");


    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script> -->
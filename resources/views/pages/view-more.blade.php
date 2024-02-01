<x-app-layout>

 
@php
  $hardwareUser = auth()->user()-> email == "hardwareadmin@gmail.com"; // detecting the user type
  $networkUser = auth()->user()-> email == "networkadmin@gmail.com";
@endphp

@if($hardwareUser)
  @include('Dashboards.Admin.sideNav')
@elseif ($networkUser)
  @include('Dashboards.Admin.sideNav')
@else
  @include('Dashboards.User.sideNav')
@endif

<!--  -->

<div class="view-more-container">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: -7px;margin-top:40px;width: 1080px;">
        <h1 style="margin-top: 30px;">Personel Details</h1>
        
        <div class="list-container">
            <ul class="list-service">
                <li style="font-size: 0.93rem;">Service Number:</li>
                <li>{{$incident -> service_number}}</li>
            </ul>

            <ul class="list-name">
                <li style="font-size: 0.93rem;">First Name:</li>
                <li>{{$incident -> first_name}}</li>
            </ul>
            <ul class="list-name">
                <li style="font-size: 0.93rem;">Last Name:</li>
                <li>{{$incident -> last_name}}</li>
            </ul>
            <ul class="list-name">
                <li style="font-size: 0.93rem;">email:</li>
                <li>{{$incident -> email}}</li>
            </ul>
            <ul class="list-number">
                <li style="font-size: 0.93rem;">Number:</li>
                <li>{{$incident -> number}}</li>
            </ul> 
        </div>

        <h1 style="margin-top: 60px;">Incident Details</h1>
        <div class="inner-display">
                <ul class="ticket">
                    <li>Ticket No.:</li>
                    <li>{{$incident -> ticket_no}}</li>
                </ul>
                <ul class="issue">
                    <li>Issue:</li>
                    <li>{{$incident -> issue}}</li>
                </ul>
                <ul class="issueType">
                    <li>Summary:</li>
                    <li>{{$incident -> summary}}</li>
                </ul>
                <ul class="issue">
                    <li>Issue:</li>
                    <li>{{$incident -> issue}}</li>
                </ul>
                <ul class="urgency">
                    <li>Urgency:</li>
                    <li>{{$incident -> urgency}}</li>
                </ul>
                <ul class="urgency">
                    <li>Status:</li>
                    @if ($incident -> statusCheck == "Resolved")
                    <li style="background-color:green;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</li>
                    @elseif ($incident -> statusCheck == "Submitted")
                    <li style="background-color:blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</li>
                    @elseif ($incident -> statusCheck == "Pending")
                    <li style="background-color:yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px;">{{$incident -> statusCheck}}</li>
                      @endif
                    
                </ul>
                <ul class="from">
                    <li>From:</li>
                    <li>{{$incident -> from}}</li>
                </ul>
                <ul class="assignTo">
                    <li>Assigned To:</li>
                    @foreach ($name as $name)
                    @if ($name -> id == $incident -> technician_id)
                      <li>{{$name -> name}}</li>
                    @endif
                    
                    @endforeach
                    
                </ul>
            <ul class="description">
                <li>Description:</li>
                <li>{{$incident -> description}}</li>
            </ul>
            </div>
        <div class="assignedDetails">
          <h4>Reported By:</h4>
          <ul class="assigned-details">
            <li>{{$incident -> reported_by}}</li>
          </ul>
        </div>
        
        </div>
       
    </div>
</div>
</div>
</x-app-layout>

<style>


.view-more-container {
    position: relative;
    top: -82px;
    margin-left: 220px;
    height: 150px;
    width: 83.7%;
    background-color: #1995AD;
    transition: 0.5s;
}

.assignedDetails {
    margin-left: 900px;
    margin-bottom: 30px;
}

    .list-container {
        display: flex;
        justify-content: space-around;
        font-size: 0.95rem;
    }

    .list-service {
        display: flex;

    }

    .list-service li {
      margin: 15px;
    }

    .list-name  {
        display: flex;
    }

    .list-name li {
        margin: 15px;
    }

    .list-number {
        display: flex;
    }

    .list-number li {
        margin: 15px;
    }

    li:first-of-type {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .incident-details li{
        margin: 10px;
    }

    .inner-display {
        justify-content: space-around;
    }

    .inner-display ul {
        margin: 20px;
    }

    .inner-display li {
        margin: 7px;
    }

    .assigned-details {
        display: block;
    }

    .ticket {
        display: flex;
    }

    .issueType {
        display: flex;
    }

    .issue {
        display: flex;
    }

    .urgency {
        display: flex;
    }

    .from {
        display: flex;
    }

    .assignTo {
        display: flex;
    }

    .assigned-details li {
      margin-left: 20px;
    }

    h1, h4 {
        font-size: 1.5rem;
        font-weight: bold;
        padding: 10px;
        margin-left: 10px;
    }

    h4 {
      font-size: 1.2rem;
    }
</style>

<script>

//   sideNav Dropdown
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }


</script>
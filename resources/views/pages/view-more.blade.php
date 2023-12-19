<x-app-layout>


 <!-- Sidebar -->
 
<!-- <span onclick="closeDashboard()" style="position:absolute;top: 18px;left:250px;"><i class="fa fa-bars bars" aria-hidden="true"></i></span> -->
<div id="mySidenav" class="sidenav">

  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:55px;">
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 15px;margin-top:50px">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
      <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:0.9rem;color:aliceblue;margin-left:5px;">
        {{ __('Dashboard') }}
      </x-nav-link>
  </div>
  <button class="dropdown-btn" style="margin-left: -15px;"><span><i class="fa fa-plus-square-o" aria-hidden="true" style="margin: 15px;margin-top:15px;font-size: 0.9rem;"></i></span>Incidents</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
          <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
            {{ __('Create Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
        <span><i class="fa fa-list" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
          <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
            {{ __('Assign Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
        <span><i class="fa fa-hourglass-half" style="color: whitesmoke;margin-top:7px;"></i></span>
          <x-nav-link :href="route('pending-incident')" class="font" :active="request()->routeIs('pending-incident')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
            {{ __('Pending Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
        <span><i class="	fa fa-thumbs-o-up" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
          <x-nav-link :href="route('resolved-incident')" class="font" :active="request()->routeIs('resolved-incident')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
            {{ __('Resolved Incident') }}
          </x-nav-link>
      </div>
    </div>
    <button class="dropdown-btn" style="margin-left: -15px;margin-top: 10px;"><span><i class="fa fa-user-o" aria-hidden="true" style="margin: 15px;margin-top:15px;"></i></span>Technicians</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
        <span><i class="fa fa-user-plus" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
        <x-nav-link :href="route('add-technicians')" class="font" :active="request()->routeIs('add-technicians')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
          {{ __('Add Technicians') }} 
        </x-nav-link>
      </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
    <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
    <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
      {{ __('Technicians') }} 
    </x-nav-link>
  </div>
  </div>
  <button class="dropdown-btn" style="margin-left: -15px;margin-top: 15px;"><span><i class="fa fa-building-o" aria-hidden="true" style="margin: 15px;margin-top:10px;"></i></span>Departments</button>
  <div class="dropdown-container">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:15px;">
      <span><i class="fa fa-plus" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
      <x-nav-link :href="route('add-department')" class="font" :active="request()->routeIs('add-department')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
        {{ __('Add Department') }} 
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 5px;margin-top:10px;">
      <span><i class="fa fa-building-o" aria-hidden="true" style="color: whitesmoke;margin-top:7px;"></i></span>
      <x-nav-link :href="route('department')" class="font" :active="request()->routeIs('department')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
        {{ __('Department') }} 
      </x-nav-link>
    </div>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 15px;margin-top: 25px;">
    <span><i class="fa fa-file" aria-hidden="true"></i></span>
    <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
      {{ __('Report') }}
    </x-nav-link>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 15px;margin-top:40px">
    <span><i class="fa fa-users"></i></span>
    <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:0.9rem;color:aliceblue;margin-left:10px;">
     {{ __('Users') }} 
    </x-nav-link>
  </div>
</div>

<div id="main">

</div>

<div class="view-more-container">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: -7px;margin-top:40px;width: 1080px;">
        <h1 style="margin-top: 30px;">Personel Details</h1>
        <div class="list-container">
            <ul class="list-service">
                <li>Service Number:</li>
                <li>Cv12133658</li>
            </ul>

            <ul class="list-name">
                <li>Name:</li>
                <li>Solomon</li>
            </ul>
            <ul class="list-number">
                <li>Number:</li>
                <li>14314342234</li>
            </ul> 
        </div>

        <h1 style="margin-top: 60px;">Incident Details</h1>
        <div class="inner-display">
                <ul class="ticket">
                    <li>Ticket No.:</li>
                    <li>TK5050</li>
                </ul>
                <ul class="issueType">
                    <li>Issue Type:</li>
                    <li>Hardware</li>
                </ul>
                <ul class="issue">
                    <li>Issue:</li>
                    <li>Can't connect to Wi-Fi</li>
                </ul>
                <ul class="urgency">
                    <li>Urgency:</li>
                    <li>High</li>
                </ul>
                <ul class="from">
                    <li>From:</li>
                    <li>Programming Cell</li>
                </ul>
                <ul class="assignTo">
                    <li>Assigned To:</li>
                    <li>Philip</li>
                </ul>
            <ul class="description">
                <li>Description:</li>
                <li>ihgrhrmb r bjior iojr ib iiiioil j ijoijfpowe wwj jwihwofof</li>
            </ul>
            </div>
        <div class="assigned-details">
            <h3>Reported By:</h3>
            <li>Hardware Admin</li>
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

    .list-container {
        display: flex; 
        /* border: 1px solid #1995AD; */
        justify-content: space-around;
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
        /* display: flex; */
        /* border: 1px solid red; */
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

    /* .middle-display {
        display: flex;
        border: 1px solid red;
        justify-content: space-around;
    } */

    .urgency {
        display: flex;
    }

    .from {
        display: flex;
    }

    .assignTo {
        display: flex;
    }

    h1, h3 {
        font-size: 1.5rem;
        font-weight: bold;
        padding: 10px;
        margin-left: 10px;
        /* margin-top: 50px; */
    }
</style>

<script>
  //   Dashboard ToggleEvent
function closeDashboard() {
  document.getElementById("cardId").classList.toggle("toggleDashboard");
  document.getElementById("mySidenav").classList.toggle("sidenavToggle");
  // document.getElementById("inputId").classList.toggle("formToggle");
}

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
<x-app-layout>
<span onclick="closeDashboard()" style="position:absolute;top: 18px;left:250px;"><i class="fa fa-bars bars" aria-hidden="true"></i></span>
<div id="mySidenav" class="sidenav">
  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:85px;">
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:50px">
    <span><i class="fa fa-home" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
      {{ __('Dashboard') }}
    </x-nav-link>
  </div>
  <button class="dropdown-btn" style="margin-left: -5px;"><span><i class="fa fa-plus-square-o" aria-hidden="true" style="margin: 15px;font: size 1.1rem;color:whitesmoke"></i></span>Incidents</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
        <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
          {{ __('Create Incident') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-list" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
            {{ __('Assign Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-hourglass-half" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('pending-incident')" class="font" :active="request()->routeIs('pending-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Pending Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="	fa fa-thumbs-o-up" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('resolved-incident')" class="font" :active="request()->routeIs('resolved-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Resolved Incident') }}
          </x-nav-link>
      </div>
    </div>
    <button class="dropdown-btn" style="margin-left: -5px;margin-top: 15px;"><span><i class="fa fa-user-o" aria-hidden="true" style="margin: 15px;color:whitesmoke"></i></span>Technicians</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
        <x-nav-link :href="route('add-technicians')" class="font" :active="request()->routeIs('add-technicians')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
          {{ __('Add Technicians') }} 
        </x-nav-link>
      </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
    <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
      {{ __('Technicians') }} 
    </x-nav-link>
  </div>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
    <span><i class="fa fa-file" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
      {{ __('Report') }}
    </x-nav-link>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:40px">
    <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1.1rem;color:aliceblue;margin-left:10px;">
     {{ __('Users') }} 
    </x-nav-link>
  </div>
</div>

<div id="main">

</div>



  <div class="assign-to-container" id="cardId">
    <div class="py-12" style="margin-left: 2px;margin-top:100px;">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 30px;margin-left:30px;">
          <div class="container wrapper" style="margin-top: 30px;">

            <form action="{{url('/assign-to/'.$incident -> id)}}" method="POST" class="row g-3">
              @csrf
              <div class="col-md-6">
                <label class="form-label">Type of Issue</label>
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="issue_type" value="{{$incident -> issue_type}}" readonly>
              </div>
              <div class="col-md-6">
                <label class="form-label">Issue</label>
                <input type="text" class="form-control" style="width: 500x;border-radius:6px" name="issue" value="{{$incident -> issue}}" readonly>
              </div>
    
              <div class="col-md-6">
                <label class="form-label">Reported By</label>
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reporter" value="{{$incident -> reporter}}" readonly>
              </div>
              <div class="col-md-4">
                <label class="form-label">Urgency</label>
                  <input type="text" class="form-control" style="width: 130px;border-radius:6px" name="urgency" value="{{$incident -> urgency}}" readonly>
              </div>
              <div class="col-md-2" style="margin-left: -200px">
                <label class="form-label">From</label>
                <input type="text" class="form-control" placeholder="Unit or Department" style="width: 363px;border-radius:6px" name="from" value="{{$incident -> from}}"  readonly>
              </div>
    
              <div class="col-12">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" placeholder="Problem description" style="height:50px;border-radius:6px" name="description" value="{{$incident -> description}}"  readonly>
              </div>

              <div class="col-md-2">
                <label class="form-label">Assign To <span>*</span></label>
                <select name="assign_to" class="form-control" style="width:220px;" >
                  <option> ---Select Technician--- </option>
                  @foreach ($technician as $technician)
                  <option value="{{ $technician -> name }}">{{ $technician -> name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:30px;color:red">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</x-app-layout>

<style>
  .assign-to-container {
    position: relative;
    top: -181px;
    margin-left: 220px;
    height: 200px;
    width: 1146px;
    background-color: #1995AD;
    transition: 0.5s;
}


.sidenav {
  height: 100%; /* 100% Full-height */
  width: 250px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #283655; /* Green*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: -200px;
  font-size: 36px;
  margin-left: 150px;
}

/* .sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  color: whitesmoke;
  display: block;
  border: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
} */

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

#main {
  transition: margin-left .5s;
  padding: 20px;
}

span {
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}

.bars {
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Admin-Dashboard */

.card-container {
    position: relative;
    top: -139px;
    margin-left: 78px;
    height: 200px;
    width: 100%;
    background-color: red;
    transition: 0.5s;
}

.card-wrapper {
    margin-top: 50px;
    display: flex;
    justify-content: space-around;
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

.fa-caret-down {
  float: right;
  padding-right: 8px;
} 

.sidenavToggle {
  width: 0;
}

.toggleDashboard {
    width: 1357px;
    margin-left: -87px;
    background-color: blue;
}
</style>


<!-- End of style -->

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
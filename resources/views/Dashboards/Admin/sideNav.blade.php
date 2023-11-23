
 <!-- Sidebar -->
 
<span onclick="closeDashboard()" style="position:absolute;top: 18px;left:250px;"><i class="fa fa-bars bars" aria-hidden="true"></i></span>
<div id="mySidenav" class="sidenav">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="margin-left:-150px;">&times;</a> -->
  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:85px;">
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:50px">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
      <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
        {{ __('Dashboard') }}
      </x-nav-link>
  </div>
  <button class="dropdown-btn" style="margin-left: -5px;"><span><i class="fa fa-plus-square-o" aria-hidden="true" style="margin: 15px;font: size 1rem;"></i></span>Incidents</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Create Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-list" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
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
    <button class="dropdown-btn" style="margin-left: -5px;margin-top: 15px;"><span><i class="fa fa-user-o" aria-hidden="true" style="margin: 15px;"></i></span>Technicians</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
        <span><i class="fa fa-user-plus" aria-hidden="true" style="color: whitesmoke;"></i></span>
        <x-nav-link :href="route('add-technicians')" class="font" :active="request()->routeIs('add-technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
          {{ __('Add Technicians') }} 
        </x-nav-link>
      </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
    <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
      {{ __('Technicians') }} 
    </x-nav-link>
  </div>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;">
    <span><i class="fa fa-file" aria-hidden="true"></i></span>
    <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
      {{ __('Report') }}
    </x-nav-link>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:40px">
    <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
    <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
     {{ __('Users') }} 
    </x-nav-link>
  </div>
</div>

<div id="main">

</div>

<!-- Style -->
<style>
  
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


.sidenav a:hover {
  color: red;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: -200px;
  font-size: 36px;
  margin-left: 150px;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  color: whitesmoke;
  display: block;
  border: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.sidenav a:hover, .dropdown-btn:hover {
  color: #1995AD;
}

.active {
  background-color: #283655;
  color: white;
}

.dropdown-container {
  display: none;
  background-color: #1995AD;
  padding: 6px;
  padding-left: 8px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

#main {
  transition: margin-left .5s;
  padding: 20px;
}

span {
  color: #1995AD;
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

.fa-caret-down {
  float: right;
  padding-right: 8px;
} 

.sidenavToggle {
  width: 0;
}
</style>


<!-- End of style -->
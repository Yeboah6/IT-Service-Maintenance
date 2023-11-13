
 <!-- Sidebar -->
 
<span onclick="openNav()" style="position:absolute;top: 18px;left:250px;"><i class="fa fa-bars bars" aria-hidden="true"></i></span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="margin-left:-150px;">&times;</a>
  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:60px;" onclick="hideNav()">
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;margin-top:20px">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
      <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px">
        {{ __('Dashboard') }}
      </x-nav-link>
  </div>
  <button class="dropdown-btn" style="margin-left: -25px;"><span><i class="fa fa-plus-square-o" aria-hidden="true" style="margin: 15px;"></i></span>Incidents</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px;">
            {{ __('Create Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-list" aria-hidden="true" style="color: whitesmoke;"></i></span>
          <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px;">
            {{ __('Assign Incident') }}
          </x-nav-link>
      </div>
    </div>
    <button class="dropdown-btn" style="margin-left: -25px;"><span><i class="fa fa-user-o" aria-hidden="true" style="margin: 15px;"></i></span>Technicians</button>
    <div class="dropdown-container">
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
        <x-nav-link :href="route('add-technicians')" class="font" :active="request()->routeIs('add-technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px;">
          {{ __('Add Technicians') }} 
        </x-nav-link>
      </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
    <span><i class="fa fa-user-o" aria-hidden="true" style="color: whitesmoke;"></i></span>
    <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px;">
      {{ __('Technicians') }} 
    </x-nav-link>
  </div>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
    <span><i class="fa fa-file" aria-hidden="true"></i></span>
    <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px">
      {{ __('Report') }}
    </x-nav-link>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
    <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
    <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1rem;color:aliceblue;margin-left:10px;margin-top:10px">
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
  background-color: #2C5F2D; /* Green*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* .sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
} */

.sidenav a:hover {
  color: #f1f1f1;
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
  color: red;
}

.active {
  background-color: #2C5F2D;
  color: white;
}

.dropdown-container {
  display: none;
  background-color: red;
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
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}

.bars {
  cursor: pointer;
}

.toggleClass {
  width: "250px";
  margin-left: "0";
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Admin-Dashboard */

.card-container {
    /* margin-top: -200px; */
    position: relative;
    top: -140px;
    margin-left: 133px;
    height: 200px;
    width: 1137px;
    background-color: red;
    transition: 0.5s;
}
.card-wrapper {
    margin-top: 50px;
    /* margin-bottom: 50px;  */
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
</style>

<!-- End of style -->

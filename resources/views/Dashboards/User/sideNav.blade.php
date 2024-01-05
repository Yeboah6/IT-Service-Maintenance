
<!-- <span onclick="closeDashboard()" style="position:absolute;top: 18px;left:250px;"><i class="fa fa-bars bars" aria-hidden="true"></i></span> -->
<div id="mySidenav" class="sidenav">
  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:85px;">
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:30px">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
      <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
        {{ __('Dashboard') }}
      </x-nav-link>
  </div>

  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:30px">
        <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
          <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Create Incident') }}
          </x-nav-link>
      </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:30px">
        <span><i class="fa fa-hourglass-half"></i></span>
          <x-nav-link :href="route('user-pending')" class="font" :active="request()->routeIs('user-pending')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Pending Incident') }}
          </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 25px;margin-top:30px">
        <span><i class="	fa fa-thumbs-o-up" aria-hidden="true"></i></span>
          <x-nav-link :href="route('user-resolved')" class="font" :active="request()->routeIs('user-resolved')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
            {{ __('Resolved Incident') }}
          </x-nav-link>
      </div>
</div>

<div id="main">

</div>

<style>
  
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 220px; /* 0 width - change this with JavaScript */
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


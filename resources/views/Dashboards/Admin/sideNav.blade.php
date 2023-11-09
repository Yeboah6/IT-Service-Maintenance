
 <!-- Sidebar -->

<div class="sidenav side-nav-wrapper">
  <div>
    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:60px;">
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

<!-- Style -->
<style>

.side-nav-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  /* height: 657px; */
  width: 220px;
  background-color: #2C5F2D;
  /* padding-top: 200px; */
  line-height: 50px;
}

.sidenav {
  height: 100%;
  padding-top: 20px;
}


span {
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  color: whitesmoke;
  display: block;
  border: none;
  /* background: none; */
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
</style>

<!-- End of style -->

<script>
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
 
<!-- 
<nav>
    <div class="side-nav-wrapper">
           <div>
                
                    <img src="image/GAF.png" alt="GAF" style="width: 50%;margin-left:60px;margin-top:-195px">
                
            </div> 
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
        <p>Layouts & Pages</p>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Create Incident') }}
            </x-nav-link>
        </div> 
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-list" aria-hidden="true"></i></span>
            <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Assign Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
             {{ __('Technicians') }} 
            </x-nav-link>
        </div>
        <p>UI</p>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-file" aria-hidden="true"></i></span>
            <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Report') }}
            </x-nav-link>
        </div>
        <p>Components</p>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
             {{ __('Users') }} 
            </x-nav-link>
        </div>
    </div>

</nav>
-->
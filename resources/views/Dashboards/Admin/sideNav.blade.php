
 <!-- Sidebar -->
 <div class="side-nav-wrapper">

 <div class="sidenav side-nav-wrapper">
 <!-- <div> -->
 <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:60px;">
 <!-- </div> -->
 <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
  <button class="dropdown-btn">Incidents</button>
  <div class="dropdown-container">
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
                {{ __('Create Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-list" aria-hidden="true"></i></span>
            <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
                {{ __('Assign Incident') }}
            </x-nav-link>
        </div>
    <!-- <a href="#">Link 3</a> -->
  </div>
  <button class="dropdown-btn">Technicians</button>
  <div class="dropdown-container">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('add-technicians')" class="font" :active="request()->routeIs('add-technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
             {{ __('Add Technicians') }} 
            </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('technicians')" class="font" :active="request()->routeIs('technicians')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
             {{ __('Technicians') }} 
            </x-nav-link>
    </div>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-file" aria-hidden="true"></i></span>
            <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
                {{ __('Report') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1rem;color:aliceblue;margin-left:30px;">
             {{ __('Users') }} 
            </x-nav-link>
        </div>
</div>
</div>


<style>

.side-nav-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  height: 657px;
  width: 220px;
  background-color: #2C5F2D;
  /* padding-top: 200px; */
  line-height: 50px;
}

.sidenav {
  height: 100%;
  padding-top: 20px;
}

.card-wrapper {
  margin-top: 50px;
  margin-bottom: 50px; 
    display: flex;
  justify-content: space-around;
}

.card-3 {
  width: 120px;
}

.card {
  padding: 15px;
  text-align: center;
  background-color: whitesmoke;
}

span {
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
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
  color: #f1f1f1;
}

.active {
  background-color: #262626;
  color: white;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>

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

<style>


/* .main-container {
  margin-left: 200px;
}

.font {
  font-size: 1.5rem;
}



td {
    font-size: 0.85rem;
}

td a {
  font-size: 0.85rem;
} */
</style>
<nav>
    <div class="side-nav-wrapper">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
        <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
        <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Create Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
        <span><i class="fa fa-list" aria-hidden="true"></i></span>
            <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Assign Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
        <span><i class="fa fa-file" aria-hidden="true"></i></span>
            <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Report') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
             {{ __('Users') }} 
            </x-nav-link>
        </div>
    </div>
</nav>

<style>
    .side-nav-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  background-color: black;
  height: 689px;
  width: 220px;
  background-color: #4d2323;
  padding-top: 200px;
  line-height: 50px;
}

.main-container {
  margin-left: 200px;
}

.font {
  font-size: 1.5rem;
}

.card-wrapper {
  margin-top: 50px;
  display: flex;
}

.card-wrapper {
  display: flex;
  justify-content: space-around;
  margin-bottom: 50px;
}

.card-3 {
  width: 120px;
}

.card {
  padding: 15px;
  text-align: center;
}


span {
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}
</style>
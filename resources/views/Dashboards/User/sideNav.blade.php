<nav>
    <div class="side-nav-wrapper">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="font-size: 1.1em;color:aliceblue;">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
                <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span> 
                    <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size: 1.1em;color:aliceblue;">
                        {{ __('Create Incident') }}
                    </x-nav-link>
                </div>
    </div>

</nav>

<style>
    .side-nav-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  background-color:  #2C5F2D;
  height: 689px;
  width: 220px;
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
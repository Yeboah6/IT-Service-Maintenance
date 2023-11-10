<nav>
    <div class="side-nav-wrapper">
    <div>
                <!-- <a href="/"> -->
                    <img src="image/GAF.png" alt="GAF" style="width: 30%;margin-left:60px;margin-top:-195px">
                <!-- </a> -->
            </div> 
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
    <span><i class="fa fa-home" aria-hidden="true"></i></span>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="font-size:1rem;color:aliceblue;margin-left:10px;">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 6px;">
                <span><i class="fa fa-plus-square-o" aria-hidden="true"></i></span> 
                    <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size: 1rem;color:aliceblue;margin-left:10px;">
                        {{ __('Create Incident') }}
                    </x-nav-link>
                </div>
    </div>

</nav>

<style>
    .side-nav-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  background-color: #2C5F2D;
  height: 100%;
  width: 220px;
  padding-top: 200px;
  line-height: 50px;
}

/* .main-container {
  margin-left: 200px;
} */

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
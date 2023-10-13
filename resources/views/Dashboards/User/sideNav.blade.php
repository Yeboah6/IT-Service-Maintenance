<nav>
    <div class="side-nav-wrapper">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="font-size: 1.3em;color:aliceblue;">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
                    <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size: 1.3em;color:aliceblue;">
                        {{ __('Create Incident') }}
                    </x-nav-link>
                </div>
    </div>

</nav>
<nav>
    <div class="side-nav-wrapper">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
            <x-nav-link :href="route('dashboard')" class="font" :active="request()->routeIs('dashboard')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
            <x-nav-link :href="route('create-incident')" :active="request()->routeIs('create-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Create Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
            <x-nav-link :href="route('assign-incident')" class="font" :active="request()->routeIs('assign-incident')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Assign Incident') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
            <x-nav-link :href="route('report')" class="font" :active="request()->routeIs('report')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Report') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="margin: 20px;">
            <x-nav-link :href="route('users')" class="font" :active="request()->routeIs('users')" style="font-size:1.1rem;color:aliceblue;margin-left:30px;">
                {{ __('Users') }}
            </x-nav-link>
        </div>
    </div>

</nav>
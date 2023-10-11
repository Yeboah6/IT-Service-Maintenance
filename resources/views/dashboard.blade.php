<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container wrapper">
                        <div class="card-wrapper">
                            <div class="card">
                                <p>11</p>
                                <h5>Reported</h5>
                            </div>
                            <div class="card">
                                <p>11</p>
                                <h5>Resolved</h5>
                            </div>
                            <div class="card card-3">
                                <p>11</p>
                                <h5>Total</h5>
                            </div>
                        </div>

                        <div class="table-wrapper">
                            <div class="table">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>Reporter Name</th>
                                        <th>Issue Type</th>
                                        <th>Issue</th>
                                        <th>Urgency</th>
                                        <th>Summary</th>
                                        <th>From (Unit/Department)</th> 
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container wrapper">
                    <div class="tech-wrapper" style="margin: 20px;margin-left: 950px">
                    <h1 class="btn btn-primary"><a href="add-technicians" :active="request()->routeIs('technicians')"><span>+</span> Add</a></h1>
                    </div>
                    <div class="table-wrapper">
                        <div class="table">
                            <table class="table table-bordered table-striped" >
                                <thead>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Department</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
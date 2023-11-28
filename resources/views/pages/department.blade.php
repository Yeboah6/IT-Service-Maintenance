<x-app-layout>
<div class="card-container" id="cardId">
    <div class="py-12" style="margin-top: 90px;"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: -25px;margin-left:230px">
                <div class="container wrapper">
                <div class="tech-wrapper" style="margin: 10px;margin-left: 870px">
                        <h1 class="btn btn-primary"><a href="add-department" :active="request()->routeIs('add-department')"><span style="color: white;">+</span> Add</a></h1>
                    </div>
                    <div class="table-wrapper" style="margin-top: 20px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Departmet</th>
                                    <th>Cell</th>
                                </thead>

                                <tbody>
                                    @foreach ($department as $department)
                                        <tr>
                                            <td>{{ $department -> department }}</td>
                                            <td>{{ $department -> cell }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

<style>
    .card-container {
    position: absolute;
    top: 63px;
    height: 150px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}
</style>
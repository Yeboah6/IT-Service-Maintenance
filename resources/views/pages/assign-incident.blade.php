<x-app-layout>
<div class="assign-container">
    <div class="py-12" style="margin-left: 2px;margin-top:100px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 35px;">
                <div class="container wrapper" style="margin-top: 50px;">
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
                                    <th>Action</th> 
                                </thead>

                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td>{{$incidnet -> from}}</td>
                                        <td><a href="{{'/assign-to/'.$incidnet -> id}}" class="btn btn-primary" style="font-size: 0.85rem;">Assign To</a></td>
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
  .assign-container {
    /* margin-top: 200px; */
    position: relative;
    top: -101px;
    margin-left: 220px;
    height: 200px;
    width: 1146px;
    background-color: red;
}
</style>
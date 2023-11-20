<x-app-layout>
<div class="assign-container" id="cardId">
    <div class="py-12" style="margin-left: 150px;margin-top:90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 50px;margin-left:100px">
                <div class="container wrapper" >
                    <div class="table-wrapper" style="margin-left:20px;width:970px;font-size:0.9rem;margin-top:25px;">
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
    top: -141px;
    /* margin-left: -5px; */
    height: 200px;
    width: 100%;
    background-color: red;
    transition: 0.5s;
}

.toggleDashboard {
    width: 1453px;
    /* width: 100%; */
    /* margin-left: -100px; */
    margin-left: -87px;
    background-color: blue;
  }
</style>
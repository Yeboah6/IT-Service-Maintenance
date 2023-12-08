<x-app-layout>
<div class="assign-container" id="cardId">
    <div class="py-12" style="margin-left: 150px;margin-top:90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 55px;margin-left:70px;width: 1110px;">
                <div class="container wrapper" >
                    <div class="table-wrapper" style="width:1085px;font-size:0.9rem;margin-top:25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Ticket No.</th>
                                    <th>Reporter Name</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Unit/Department)</th> 
                                    <th>Action</th> 
                                </thead>
                                
                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td></td>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td><span style="background-color: yellow;font-size:0.85rem;padding:4px;color:black;border-radius: 6px"></span></td>
                                        <td>{{$incidnet -> from}}</td>
                                        <td><a href="{{'/assign-to/'.$incidnet -> id}}" class="btn btn-primary" style="font-size: 0.85rem;">Assign</a></td>
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
    position: relative;
    top: -141px;
    height: 200px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}

.toggleDashboard {
    width: 1453px;
    margin-left: -87px;
    background-color: blue;
  }
</style>
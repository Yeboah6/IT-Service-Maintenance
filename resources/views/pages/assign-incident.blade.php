<x-app-layout>
<div class="assign-container" id="cardId">
    <div class="py-12" style="margin-left: 150px;margin-top:90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 55px;margin-left:56px;width: 1110px;">
                <div class="container wrapper" >
                    <div class="table-wrapper" style="width:1085px;font-size:0.9rem;margin-top:25px;">
                        <div class="table">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <th>Ticket No.</th>
                                    <th>Reported By</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Cell)</th> 
                                    <th>Assigned To</th>
                                    <th>Action</th> 
                                </thead>
                                
                                <tbody>
                                    @foreach($incident as $incident)
                                    <tr>
                                        <td>{{$incident -> ticket_no}}</td>
                                        <td>{{$incident -> reporter}}</td>
                                        <td>{{$incident -> issue_type}}</td>
                                        <td>{{$incident -> issue}}</td>
                                        <td>{{$incident -> urgency}}</td>
                                        <td>{{$incident -> description}}</td>
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</span></td>
                                        <td>{{$incident -> from}}</td>
                                        <td></td>
                                        <td><a href="{{'/assign-to/'.$incident -> id}}" class="btn btn-primary" style="font-size: 0.85rem;">Assign</a></td>
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
    height: 150px;
    width: 100%;
    background-color: #1995AD;
    transition: 0.5s;
}
</style>
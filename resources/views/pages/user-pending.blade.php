<x-app-layout>
<div class="userPending-container" id="cardId">
    <div class="py-12" style="margin-top: 90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: 5px;margin-top: -40px;">
                <div class="container wrapper">
                    <div class="table-wrapper" style="margin-top: 30px;font-size:0.9rem;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Ticket No.</th>
                                    <th>Reported By</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Status</th>
                                    <th>Summary</th>
                                    <th>From (Department)</th> 
                                    <th>Assigned To</th>
                                </thead>

                                <tbody>
                                    @foreach ($incident as $incident)
                                        <tr>
                                            <td>{{$incident -> ticket_no}}</td>
                                            <td>{{$incident -> reporter}}</td>
                                            <td>{{$incident -> issue_type}}</td>
                                            <td>{{$incident -> issue}}</td>
                                            <td>{{$incident -> urgency}}</td>
                                            <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incident -> statusCheck}}</span></td>
                                            <td>{{$incident -> description}}</td>
                                            <td>{{$incident -> from}}</td>
                                            <td>{{$incident -> assignTo}}</td>
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
.userPending-container {
    position: absolute;
    top: 64px;
    height: 150px;
    width: 83.9%;
    background-color: #1995AD;
    left: 220px;
}

</style>
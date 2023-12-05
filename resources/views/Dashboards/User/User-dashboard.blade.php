<x-app-layout>
<div class="userDashboard-container" id="cardId">
    <div class="py-12" style="margin-top: 90px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-left: 15px;margin-top: -40px;">
                <div class="container wrapper">
                    <div class="table-wrapper" style="margin-top: 30px;font-size:0.9rem;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Ticket No.</th>
                                    <th>Reporter Name</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Status</th>
                                    <th>Summary</th>
                                    <th>From (Department)</th> 
                                </thead>

                                <tbody>
                                    @foreach($incident as $incidnet)
                                    <tr>
                                        <td>{{$incidnet -> ticket_no}}</td>
                                        <td>{{$incidnet -> reporter}}</td>
                                        <td>{{$incidnet -> issue_type}}</td>
                                        <td>{{$incidnet -> issue}}</td>
                                        <td>{{$incidnet -> urgency}}</td>
                                        <td><span style="background-color: blue;font-size:0.85rem;padding:4px;color:white;border-radius: 6px">{{$incidnet -> statusCheck}}</span></td>
                                        <td>{{$incidnet -> description}}</td>
                                        <td>{{$incidnet -> from}}</td>
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

.userDashboard-container {
    position: absolute;
    top: 64px;
    height: 150px;
    width: 81.97%;
    background-color: #1995AD;
    left: 246px;
}
</style>



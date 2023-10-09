@extends('layouts.app')

@section('content')
@include('Dashboards.Admin-Dashboard.sideNav')
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

                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data -> reporter}}</td>
                        <td>{{$data -> issue_type}}</td>
                        <td>{{$data -> issue}}</td>
                        <td>{{$data -> urgency}}</td>
                        <td>{{$data -> description}}</td>
                        <td>{{$data -> from}}</td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html> -->
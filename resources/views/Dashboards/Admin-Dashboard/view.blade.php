 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ITSM</title>
</head> -->

    <!-- Top Navigation -->
    <!-- <div class="top-nav-wrapper">
    <ul>
        <li><a href="/dashboard">IT SERVICE MAINTENANCE</a></li>
        <div class="btn-group top-list" role="group" >
                <li type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0244FD">
                   Email
                </li>
                <ul class="dropdown-menu" style="height: 50px; padding-top:-90px">
                  <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                </ul>
              </div>
    </ul>
</div> -->
<!-- Top Navigation -->

<!-- Side Navigation -->
<!-- <div class="side-nav-wrapper">
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <div class="btn-group" role="group" >
                <li type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0244FD">
                    Incident
                </li>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="create-incident">Create Incident</a></li>
                  <li><a class="dropdown-item" href="view-incident">View Incident</a></li>
                </ul>
              </div>
                <li><a href="#">Report</a></li>
                <li><a href="/view-users">Users</a></li>
            </ul>
        </div> -->
<!-- Side Navigation -->
<!-- <body> -->
    @extends('layouts.app')

    @section('content')
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
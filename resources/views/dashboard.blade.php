@extends('layouts.app')

@section('content')
<div class="container wrapper">
    <!-- Top Navigation -->
<div class="top-nav-wrapper">
    <ul>
        <li><a href="/dashboard">IT SERVICE MAINTENANCE</a></li>
        <div class="btn-group top-list" role="group" >
                <li type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0244FD">
                    {{$user -> email}}
                </li>
                <ul class="dropdown-menu" style="height: 50px; padding-top:-90px">
                  <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                </ul>
              </div>
    </ul>
</div>
<!-- Top Navigation -->
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
                    <tr>
                        <td>Solomon</td>
                        <td>Hardware</td>
                        <td>screen</td>
                        <td>High</td>
                        <td>wifi not working</td>
                        <td>Programming cell</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

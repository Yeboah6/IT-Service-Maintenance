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
               <th>Urgency</th>
               <th>Summary</th>
               <th>Asigned To</th> 
            </thead>

                <tbody>
                    <tr>
                        <td>Solomon</td>
                        <td>Network</td>
                        <td>High</td>
                        <td>wifi not working</td>
                        <td>Sir Philip</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

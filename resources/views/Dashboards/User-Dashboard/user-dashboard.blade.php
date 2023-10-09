@extends('layouts.user-dashboard')

@section('content')
@include('Dashboards.User-Dashboard.sideNav')
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
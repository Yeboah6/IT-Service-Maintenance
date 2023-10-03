@extends('layouts.app')

@section('content')

<div class="container wrapper">
<h1>Users</h1>

<div class="table-wrapper">
        <div class="table">
            <table class="table table-bordered table-striped">
                <thead>
               <th>Name</th>
               <th>Email</th>
               <th>Action</th>
            </thead>

                <tbody>
                    <tr>
                        <td>Solomon</td>
                        <td>jhokerdev@gmail.com</td>
                        <td><a href="#"><button type="submit" class="btn btn-primary">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

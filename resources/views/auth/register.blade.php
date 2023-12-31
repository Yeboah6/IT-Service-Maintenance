@extends('layouts.authLayout')

@section('content')

<div class="container wrapper" >
<form action="{{url('/register')}}" method="POST" class="form-control" style="margin-top: 170px; margin-left: 150px;width: 600px; height: 300px; padding-top: 40px">
@csrf
  <div class="row mb-3">
  <div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
  <div class="form-floating">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Name">
    <label>Name</label>
  </div>
 </div>
    <!-- <label class="col-sm-2 col-form-label">Email</label> -->
    <div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Username">
    <label>Email</label>
  </div>
 </div>
  </div>
  <div class="row mb-3">
    <!-- <label class="col-sm-2 col-form-label">Password</label> -->
    <div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-eye" aria-hidden="true"></i></span>
  <div class="form-floating">
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
    <label>Password</label>
  </div>
</div>
<p style="margin-left: 170px;">Already have an account <span><a href="/login" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></span></p>
  <button type="submit" class="btn btn-primary" style="width:100px; margin-left: 250px;">Register</button>
</form>
</div>
@endsection
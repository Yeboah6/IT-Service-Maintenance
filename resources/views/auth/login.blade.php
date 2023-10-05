@extends('layouts.authLayout')

@section('content')

<div class="container wrapper" >
  @if ($errors -> any())
  <div>
    <ul>
      @foreach($errors -> all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>

  @endif
<form action="{{ url('/login') }}" method="POST" class="form-control" style="margin-top: 170px; margin-left: 150px;width: 600px; height: 300px; padding-top: 40px">
  @csrf
<div class="row mb-3">
    <!-- <label class="col-sm-2 col-form-label">Email</label> -->
    <div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="text" class="form-control" name="email"  placeholder="Email">
    <label for="floatingInputGroup1">Email</label>
  </div>
</div>
  </div>
  <div class="row mb-3">
    <!-- <label class="col-sm-2 col-form-label">Password</label> -->
    <div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-eye" aria-hidden="true"></i></span>
  <div class="form-floating">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <label for="floatingInputGroup1">Password</label>
  </div>
</div>
<p style="margin-left: 170px;">Don't have account? <span><a href="/register" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Register</a></span></p>
  <button type="submit" class="btn btn-primary" style="width:100px; margin-left: 250px;">Login</button>
</form>
</div>

@endsection
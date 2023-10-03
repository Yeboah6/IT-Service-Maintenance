@extends('layouts.app')

@section('content')
<div class="container wrapper" style="margin-top: 80px;">
<form class="row g-3">
<!-- `<div class="col-md-12">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                <h4>Create Incident</h4>
                </div>
            </div>` -->
  <div class="col-md-6">
    <label class="form-label">Type of Issue</label>
    <input type="email" class="form-control" style="width: 500px;">
  </div>
  <div class="col-md-6">
    <label class="form-label">Issue</label>
    <input type="password" class="form-control">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Reported By</label>
    <input type="text" class="form-control" style="width: 500px;">
  </div>
  <div class="col-md-4">
    <label class="form-label">Urgency</label>
    <select id="inputState" class="form-select" style="width: 150px;">
      <option selected>-----</option>
      <option>High</option>
      <option>Medium</option>
      <option>Low</option>
    </select>
  </div>
  <div class="col-md-2" style="margin-left: -200px">
    <label class="form-label">From</label>
    <input type="text" class="form-control" placeholder="Unit or Department" style="width: 370px;">
  </div>

  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea class="form-control" placeholder="Problem description" style="height:100px"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:60px">Submit</button>
  </div>
</form>
</div>


@endsection
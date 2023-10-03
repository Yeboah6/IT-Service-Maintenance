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
    <label class="form-label">Task</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label class="form-label">Type Of Issue</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Reported By</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label class="form-label">Urgency</label>
    <select id="inputState" class="form-select">
      <option selected>-----</option>
      <option>High</option>
      <option>Medium</option>
      <option>Low</option>
    </select>
  </div>
  <div class="col-md-2">
    <label class="form-label">Assigned To</label>
    <input type="text" class="form-control">
  </div>

  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea class="form-control" placeholder="Problem description" style="height:100px"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<!-- <div class="container wrapper">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                <h4>Create Incident</h4>
                </div>
            </div>


            <div class="form-group mb-3 col">
                <label class="form-label">Reported By</label>
                <input type="text" name="task" class="form-control" style="width: 500px;">
            </div>

            <div class="form-group mb-3 col">
                <label class="form-label">Assigned To</label>
                <input type="text" name="task" class="form-control" style="width: 500px;">
            </div>
            </div>
        </div>
    </div>
</div> -->


@endsection
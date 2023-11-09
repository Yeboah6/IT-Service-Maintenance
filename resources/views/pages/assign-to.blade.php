<x-app-layout>
<div class="assign-to-container">
  <div class="py-12" style="margin-left: 2px;margin-top:100px;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 30px;">
        <div class="container wrapper" style="margin-top: 30px;">

          <form action="{{url('/assign-to/'.$incident -> id)}}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
              <label class="form-label">Type of Issue</label>
              <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="issue_type" value="{{$incident -> issue_type}}" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Issue</label>
              <input type="text" class="form-control" style="width: 500x;border-radius:6px" name="issue" value="{{$incident -> issue}}" readonly>
            </div>
    
            <div class="col-md-6">
              <label class="form-label">Reported By</label>
              <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reporter" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="col-md-4">
              <label class="form-label">Urgency</label>
                <input type="text" class="form-control" style="width: 130px;border-radius:6px" name="urgency" value="{{$incident -> urgency}}" readonly>
            </div>
            <div class="col-md-2" style="margin-left: -200px">
              <label class="form-label">From</label>
              <input type="text" class="form-control" placeholder="Unit or Department" style="width: 363px;border-radius:6px" name="from" value="{{$incident -> from}}"  readonly>
            </div>
    
            <div class="col-12">
              <label class="form-label">Description</label>
              <input type="text" class="form-control" placeholder="Problem description" style="height:50px;border-radius:6px" name="description" value="{{$incident -> description}}"  readonly>
            </div>

            <div class="col-md-2">
              <label class="form-label">Assign To <span>*</span></label>
              <select name="assign_to" class="form-control" style="width:220px;" >
                <option> ---Select Technician--- </option>
                @foreach ($technician as $technician)
                <option value="{{ $technician -> name }}">{{ $technician -> rank }} {{ $technician -> name }}</option>
                @endforeach
              </select>
              <!-- <input type="text" class="form-control" placeholder="Assign To" style="width: 370px;border-radius:6px" name="assigne_to" > -->
            </div>
    
            <div class="col-12">
              <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:30px;color:red">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</x-app-layout>

<style>
  .assign-to-container {
    /* margin-top: 200px; */
    position: relative;
    top: -102px;
    margin-left: 220px;
    height: 200px;
    width: 1146px;
    background-color: red;
}
</style>
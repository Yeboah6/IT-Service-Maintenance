<x-app-layout>
    <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="container wrapper" style="margin-top: 30px;">

                      <form action="{{url('/assign-to/'.$incident -> id)}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                          <label class="form-label">Type of Issue</label>
                          <select name="issue_type" class="form-select" value="{{$incident -> issue_type}}" readonly>
                                <option selected>-----</option>
                                <option>Hardware</option>
                                <option>Network</option>
                                <option>Software</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Issue</label>
                          <input type="text" class="form-control" style="width: 575px;border-radius:6px" name="issue" value="{{$incident -> issue}}" readonly>
                        </div>
    
                        <div class="col-md-6">
                          <label class="form-label">Reported By</label>
                          <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reporter" value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label">Urgency</label>
                          <select class="form-select" style="width: 150px;border-radius:6px" name="urgency" value="{{$incident -> urgency}}"  readonly>
                            <option selected>-----</option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                          </select>
                        </div>
                        <div class="col-md-2" style="margin-left: -200px">
                          <label class="form-label">From</label>
                          <input type="text" class="form-control" placeholder="Unit or Department" style="width: 370px;border-radius:6px" name="from" value="{{$incident -> from}}"  readonly>
                        </div>
    
                        <div class="col-12">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" placeholder="Problem description" style="height:100px;border-radius:6px" name="description" value="{{$incident -> description}}"  readonly></textarea>
                        </div>

                        <div class="col-md-2" >
                          <label class="form-label">Assign To</label>
                          <input type="text" class="form-control" placeholder="Assign To" style="width: 370px;border-radius:6px" name="assigne_to" >
                        </div>
    
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:30px;color:red">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</x-app-layout>
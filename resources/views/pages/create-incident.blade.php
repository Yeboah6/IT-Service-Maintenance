<x-app-layout>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container wrapper" style="margin-top: 30px;">
                <form action="{{ url('create-incident') }}" method="POST" class="row g-3">
                  @csrf
                  <div class="col-md-6">
                    <label class="form-label">Type of Issue</label>
                    <input type="text" class="form-control" style="width: 500px; border-radius:6px" name="issue_type">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Issue</label>
                    <input type="text" class="form-control" style="width: 575px;border-radius:6px" name="issue">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Reported By</label>
                    <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reporter">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Urgency</label>
                    <select class="form-select" style="width: 150px;border-radius:6px" name="urgency">
                      <option selected>-----</option>
                      <option>High</option>
                      <option>Medium</option>
                      <option>Low</option>
                    </select>
                  </div>
                  <div class="col-md-2" style="margin-left: -200px">
                    <label class="form-label">From</label>
                    <input type="text" class="form-control" placeholder="Unit or Department" style="width: 370px;border-radius:6px" name="from">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Problem description" style="height:100px;border-radius:6px" name="description"></textarea>
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
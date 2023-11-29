<x-app-layout>
  <div class="create-container" id="cardId">
    <div class="py-12" style="margin-left: 17px;margin-top:100px;">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 30px;background-color:white;" id="inputId">
          <div class="container wrapper" style="margin-top: 30px;" >
            <form action="{{ url('create-incident') }}" method="POST" class="row g-3" >
              @csrf
              <div class="col-md-6">
                <label class="form-label">Type of Issue <span style="color: red;">*</span></label>
                <select name="issue_type" class="form-select" style="width: 500px;border-radius:6px" required>
                <option selected>---Select Issue Type---</option>
                  <option>Hardware</option>
                  <option>Network</option>
                  <option>Software</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Issue <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 510px;border-radius:6px" name="issue" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Reported By</label>
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reporter" value="{{Auth::user()->name}}" readonly>
              </div>
              <div class="col-md-4">
                <label class="form-label">Urgency <span style="color: red;">*</span></label>
                <select class="form-select " style="width: 160px;border-radius:6px" name="urgency" required>
                  <option selected>---Urgency---</option>
                  <option>High</option>
                  <option>Medium</option>
                  <option>Low</option>
                </select>
              </div>
              <div class="col-md-2" style="margin-left: -170px">
                <label class="form-label">From <span style="color: red;">*</span></label>
                <select name="from" class="form-control"  style="width: 320px;border-radius:6px">
                <option>---Select Department---</option>
                  @foreach ($department as $department)
                    <option value="{{ $department -> cell }}"> {{ $department -> cell }} </option>
                  @endforeach
                </select>
                <!-- <input type="text" class="form-control" placeholder="Unit or Department" style="width: 320px;border-radius:6px" name="from" required> -->
              </div>
              <div class="col-12">
                <label class="form-label">Description <span style="color: red;">*</span></label>
                <textarea class="form-control" placeholder="Problem description" style="height:100px;border-radius:6px" name="description" required></textarea>
              </div>

              <input type="text" class="form-control" name="statusCheck" hidden>
              <input type="text" class="form-control" name="ticket_no" hidden>

              <div class="col-12">
                <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:60px;">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
  </x-app-layout>


<style>

.col-12 button {
  background-color: blue;
}

.create-container {
    /* margin-top: 200px; */
    position: relative;
    top: -141px;
    margin-left: 237px;
    height: 200px;
    width: 1129px;
    background-color: #1995AD;
    transition: 0.5s;
  }

.toggleDashboard {
    width: 1453px;
    /* width: 100%; */
    /* margin-left: -100px; */
    margin-left: -87px;
    background-color: blue;
  }

  .formToggle {
    margin-left: 84px;
  }
</style>
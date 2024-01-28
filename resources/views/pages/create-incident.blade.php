<x-app-layout>
   <div class="create-container" id="cardId">

    <div class="py-12" style="margin-top: 100px;">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <!-- <h4>Request For Service</h4> -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 20px;">
          <div class="container wrapper" style="margin-top: 40px;">

            <form action="{{ url('create-incident') }}" method="POST" class="row g-3" >
              @csrf

              <!-- Requestee Details -->
              <h4>Personnel Details</h4>
                <div class="col-md-6">
                <label class="form-label">Service Number <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="service_number" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">First Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="first_name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="last_name" value="{{Auth::user() -> name}}" readonly>
              </div>
              <div class="col-md-6">
                <label class="form-label">Number <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="number" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email <span style="color: red;">*</span></label>
                <input type="email" class="form-control" style="width: 450px;border-radius:6px" name="email" required>
              </div>

              <!-- Issue Details -->

                <h4>Issue Details</h4>
                <div class="col-12">
                <label class="form-label">Summary <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="border-radius:6px; height: 50px; width: 920px;" name="summary" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Type of Issue <span style="color: red;">*</span></label>
                <select name="issue_type" class="form-select" style="width: 440px;border-radius:6px" required>
                <option selected>---Select Issue Type---</option>
                  <option>Hardware</option>
                  <option>Network</option>
                  <option>Software</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Issue <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="issue" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Reported By</label>
                <input type="text" class="form-control" style="width: 440px;border-radius:6px" name="reported_by" value="{{Auth::user()->name}}" readonly>
              </div>
              <div class="col-md-4">
                <label class="form-label">Priority <span style="color: red;">*</span></label>
                <select class="form-select " style="width: 160px;border-radius:6px" name="urgency" required>
                  <option selected>---Urgency---</option>
                  <option>High</option>
                  <option>Medium</option>
                  <option>Low</option>
                </select>
              </div>
              <div class="col-md-2" style="margin-left: -120px">
                <label class="form-label">From <span style="color: red;">*</span></label>
                <select name="from" class="form-control"  style="width: 260px;border-radius:6px">
                <option>---Select Cell---</option>
                  @foreach ($department as $department)
                    <option value="{{ $department -> cell }}"> {{ $department -> cell }} </option>
                  @endforeach
                </select>
                
              </div>
              <div class="col-12">
                <label class="form-label">Description <span style="color: red;">*</span></label>
                <textarea class="form-control" placeholder="Problem description" style="height:100px;border-radius:6px" name="description" required></textarea>
              </div>

              <input type="text" class="form-control" name="statusCheck" hidden>
              <input type="text" class="form-control" name="ticket_no" hidden>
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary" style="margin-left:800px;margin-top:60px;">Submit</button>
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
    position: relative;
    top: -141px;
    margin-left: 220px;
    height: 150px;
    width: 83.7%;
    background-color: #1995AD;
    transition: 0.5s;
  }

  h4 {
    margin-left: 70px;
    font-size: 1.5rem;
    font-weight: bold;
  }

 
</style>

    

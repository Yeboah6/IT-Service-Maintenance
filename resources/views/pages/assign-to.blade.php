<x-app-layout>
@include('Dashboards.Admin.sideNav')

<div class="assign-to-container" id="cardId">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 30px;">
          <div class="container wrapper" style="margin-top: 30px;">

            <form action="{{url('/assign-to/'.$incident -> id)}}" method="POST" class="row g-3">
              @csrf
              <label class="form-label" style="font-weight: bold;font-size:1.5rem">Reporter Details</label>
              <div class="col-md-6">
                <label class="form-label">Reporter Name </label>
                <input type="text" class="form-control" style="width: 510px;border-radius:6px" name="reporter_name" value="{{$incident -> reporter_name}}" readonly>
              </div>
              <div class="col-md-6">
                <label class="form-label">Service Number </label>
                <input type="text" class="form-control" style="width: 510px;border-radius:6px" name="service_number" value="{{$incident -> service_number}}" readonly>
              </div>
              <div class="">
                <label class="form-label">Number </label>
                <input type="text" class="form-control" style="width: 510px;border-radius:6px" name="number" value="{{$incident -> number}}" readonly>
              </div>

              <label class="form-label" style="font-weight: bold;font-size:1.5rem">Issue Details</label>
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
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="reported_by" value="{{$incident -> reported_by}}" readonly>
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
                  <option value="{{ $technician -> id }}">{{ $technician -> name }}</option>
                  @endforeach
                </select>
              </div>
              <input type="text" class="form-control" name="technician_id" hidden>

              <div class="col-12">
                <button type="submit" class="btn btn-primary" style="margin-left:900px;margin-top:30px;">Submit</button>
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
  .assign-to-container {
    position: relative;
    top: -82px;
    margin-left: 220px;
    height: 150px;
    width: 83.7%;
    background-color: #1995AD;
    transition: 0.5s;
}

.sidenav {
  height: 100%; /* 100% Full-height */
  width: 220px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #283655; /* Green*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: -200px;
  font-size: 36px;
  margin-left: 150px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

#main {
  transition: margin-left .5s;
  padding: 20px;
}

span {
  color: red;
  font-weight: bold;
  font-size: 1.1rem;
}

.bars {
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Admin-Dashboard */

/* .card-container {
    position: relative;
    top: -139px;
    margin-left: 78px;
    height: 200px;
    width: 100%;
    background-color: red;
    transition: 0.5s;
}

.card-wrapper {
    margin-top: 50px;
    display: flex;
    justify-content: space-around;
}

.card-3 {
  width: 200px;
}

.card {
  height: 130px;
  margin-top: 100px;
  padding: 15px;
  background-color: whitesmoke;
}

.card li {
  margin: 7px;
} */

.fa-caret-down {
  float: right;
  padding-right: 8px;
} 

/* .sidenavToggle {
  width: 0;
}

.toggleDashboard {
    width: 1357px;
    margin-left: -87px;
    background-color: blue;
} */
</style>

<!-- End of style -->

<script>
  //   Dashboard ToggleEvent
// function closeDashboard() {
  // document.getElementById("cardId").classList.toggle("toggleDashboard");
  // document.getElementById("mySidenav").classList.toggle("sidenavToggle");
  // document.getElementById("inputId").classList.toggle("formToggle");
// }
  // sideNav Dropdown
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>
<x-app-layout>
<div class="report-container" id="cardId" style="margin-left: 0;">
    <div class="py-12" style="margin-left: 20px;margin-top:50px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg" style="margin-top:-5px;margin-left:240px;">
                <div class="container wrapper">
                    <form action="" method="get">
                        @csrf
                    <ul>
                    <li>
                        <label>Issue Type</label>
                        <br>
                        <select name="" id="">
                       @foreach ($issueType as $issueType)
                       <option value="">{{$issueType -> issue_type}}</option>
                       @endforeach
                            
                           
                            
                            <!-- <option value="">Software</option> -->
                        </select>
                    <!-- </li>
                    <li>
                        <label for="">Technician</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li>
                    <li>
                    <label for="">Month</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li>
                    <li>
                        <label for="">Date</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li>
                    <li>
                        <label for="">Date</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li>
                    <li>
                        <label for="">Date</label>
                        <br>
                    <select name="" id="">
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                        <option value="">Hello There</option>
                    </select>
                    </li> -->
                    <li>
                        <br>
                        <button class="btn btn-primary" type="submit">View</button>
                    </li>
                    </ul>
                    </form>
                </div>

                <!-- <button class="accordion" style="width: 200px;">January</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div> -->
<!-- 
                <button class="accordion">February</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">March</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">April</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">May</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">June</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">July</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">August</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">September</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">October</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">November</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
                <button class="accordion">December</button>
                <div class="panel">
                    <div class="table-wrapper" style="margin-top: 25px;">
                        <div class="table">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Reporter</th>
                                    <th>Issue Type</th>
                                    <th>Issue</th>
                                    <th>Urgency</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>From (Department)</th>
                                    <th>Assigned To</th>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div> -->



            

                <!-- <div class="table-wrapper" style="margin-top: 50px;">
                    <div class="table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                            <th>Reporter</th>
                        </thead>
                    </table>
                    </div>

                </div>-->
            </div> 
        </div>
        </div>
    </div>
</x-app-layout>


<style>

    .wrapper select {
        border-radius: 5px;
        border-top: 0;
        border-left: 0;
        border-right: 0;
        /* background-color: red; */
    }

.accordion:after {
  content: '\02795';
  font-size: 8px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.activebtn:after {
  content: "\2796"; 
}

  .report-container {
    /* margin-top: 200px; */
    position: relative;
    top: -100px;
    margin-left: 75px;
    height: 100px;
    width: 100%;
    background-color: #1995AD;
}

.wrapper ul {
    display: flex;
    margin-left: -28px;
}

.wrapper li {
    margin: 10px;
}

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.5s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
</style>


<script>

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("activebtn");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>
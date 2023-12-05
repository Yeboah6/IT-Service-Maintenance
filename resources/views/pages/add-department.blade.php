<x-app-layout>
<div class="create-container" id="cardId">
<div class="py-12" style="margin-left: 17px;margin-top:100px;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 30px;background-color:white;" id="inputId">
          <div class="container wrapper" style="margin-top: 30px;" >
          <form action="{{ url('/add-department') }}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <label class="form-label">Department <span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="department" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">Cell<span style="color: red;">*</span></label>
                <input type="text" class="form-control" style="width: 500px;border-radius:6px" name="cell" required>
            </div>
            </div>
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
</style>
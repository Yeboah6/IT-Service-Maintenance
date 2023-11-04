<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container wrapper" style="margin-top: 30px;">
            <h1>Add Technician</h1>
          <form action="{{ url('add-technicians') }}" :active="request()->routeIs('techicians')" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
              <label class="form-label">Name <span>*</span></label>
              <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Number <span>*</span></label>
              <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="number" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email <span>*</span></label>
              <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="email" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Department <span>*</span></label>
              <input type="text" class="form-control" style="width: 450px;border-radius:6px" name="department" required>
            </div>

            <input type="text" class="form-control" name="status" hidden>

            <div class="col-12">
              <button type="submit" class="btn btn-primary" style="margin-left:400px;margin-top:60px;color:red">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
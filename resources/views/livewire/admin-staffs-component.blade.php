<div>

<style>
nav svg{
height: 20px;
}
nav .hidden{
display: block !important;
}
</style>
<div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
              <div class="col-md-6 nav-link active">All Staffs</div>
              <div class="col-md-6"><a href="{{ route('admin.addstaff') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Staff</a></div>
            </div>
      </div>
      <div class="card-body">
          @if (Session::has('message'))
          <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
          @endif
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Staff Name</th>
                      <th>Staff Position</th>
                      <th>Staff Branch</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($staffs as $staff)
                      <tr>
                          <td>{{ $staff->id }}</td>
                          <td>{{ $staff->name }}</td>
                          <td>{{ $staff->position }}</td>
                          <td>{{ $staff->branch }}</td>
                          <td>
                              <a href="#" onclick="confirm('Are you sure, You want to delete this Staff') || event.stopImmediatePropagation()"  wire:click.prevent="deleteStaff({{ $staff->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
              {{ $staffs->links() }}

      </div>
  </div>
</div>
</div>
</div>
</div>

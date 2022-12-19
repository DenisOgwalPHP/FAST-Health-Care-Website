<div>

    <div class="container bread-1">
        <div class="row">
        <div class="col-12">

            <div class="breadcrumbs">
                <h1>Services</h1>
            <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="/">Home</a></li>
                <li>Services</li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="pickgradient">
        <img
        class="header-img"
        src="{{ asset('assets/images/xfooter-bg.png.pagespeed.ic.mv67PyNb6Q.png') }}"
        alt=""
      />
      </div>
  <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                      <div class="row">
                          <div class="col-md-6">All Services</div>
                          <div class="col-md-6"><a href="{{ route('admin.addservice') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Service</a></div>
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
                                  <th>Image</th>
                                  <th>Name</th>
                                  <th>Difficulty</th>
                                  <th>Description</th>
                                  <th>Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($services as $service)
                                  <tr>
                                      <td>{{ $service->id }}</td>
                                      <td><img src="{{ asset('assets/images/services') }}/{{ $service->image }}" width="60" height="60" alt="{{ $service->name }}"></td>
                                      <td>{{ $service->name }}</td>
                                      <td>{{ $service->category->name }}</td>
                                      <td>{!! str_limit(strip_tags($service->description),100,'...')  !!}</td>
                                      <td>{{ $service->created_at }}</td>
                                      <td>
                                          <a href="{{ route('admin.editservice', ['service_slug'=> $service->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                          <a href="#" onclick="confirm('Are you sure, You want to delete this service') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                          {{ $services->links() }}

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

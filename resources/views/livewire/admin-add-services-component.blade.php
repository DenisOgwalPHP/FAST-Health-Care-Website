<div>

    <div class="container bread-1">
        <div class="row">
        <div class="col-12">

            <div class="breadcrumbs">
                <h1>Add Service</h1>
            <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                <li><a href="/">Home</a></li>
                <li>Add Service</li>
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
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">
                          Add New Service
                      </div>
                      <div class="col-md-6">
                          <a href="{{ route('admin.services') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Services</a>
                      </div>
                  </div>
              </div>
              @if (Session::has('message'))
                  <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
              @endif
              <div class="panel-body">
                  <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addService">
                      <div class="p-2 form-group border">
                          <label for="" class="col-md-8 control-label"><h4>Service Name</h4></label>
                          <div class="col-md-8">
                              <input type="text" placeholder="Service Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                              @error('name')
                              <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                      </div>
                      <div class=" p-2 form-group border">
                          <label for="" class="col-md-8 control-label"><h4>Service Slug</h4></label>
                          <div class="col-md-8">
                              <input type="text" placeholder="Service Slug" class="form-control input-md" wire:model="slug">
                              @error('slug')
                              <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                      </div>


                      <div class="p-2 form-group border">
                          <label for="" class="col-md-8 control-label"><h4>Category</h4></label>
                          <div class="col-md-8">
                              <select name="" id="" class="form-control" wire:model="category_id">
                                  <option value="">Select Category</option>
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                              @error('category_id')
                              <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                      </div>
                      <div class="p-2 form-group border">
                          <label for="" class="col-md-8 control-label"><h4>Service Image</h4></label>
                          <div class="col-md-8">
                              <input type="file"  class="input-file" wire:model="image">

                              @error('image')
                              <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                      </div>

                      <div class="p-2 form-group ">
                        <label for="" class="col-md-8 control-label">Description</label>
                        <div class="col-md-8 col-8" wire:ignore>
                            <textarea name="" id="description"  rows="12"
                            cols="80" placeholder="Description" wire:model="description"></textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>


                      <div class="form-group">
                          <label for="" class="col-md-8 control-label"></label>
                          <div class="col-md-8">
                              <Button type="submit" class="btn btn-primary">Submit</Button>
                          </div>
                      </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</div>
</div>

@push('scripts')
<script>
  $(function(){

      tinymce.init({
          selector:'#description',
          setup:function(editor){
              editor.on('Change', function(e){
                  tinyMCE.triggerSave();
                  var data = $('#description').val();
                  @this.set('description',data );
              });
          }
      });
  });
</script>
@endpush

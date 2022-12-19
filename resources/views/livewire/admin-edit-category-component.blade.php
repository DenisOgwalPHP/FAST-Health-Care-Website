<div>

<!-- Banner End -->
<div class="container bread-1">
    <div class="row">
    <div class="col-12">

        <div class="breadcrumbs">
            <h1>Edit Difficulty</h1>
        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
            <li><a href="/">Home</a></li>
            <li>Edit Difficulty</li>
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
                                Edit Service
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" style="color: whitesmoke" class="btn btn-success pull-right"> All Categories</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Service Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Service Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Service Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Service Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group ">
                                <label for="" class="col-md-8 control-lable">Service Image</label>
                                <div class="col-md-8">

                                    @if($image)
                                        <img src="{{ asset('assets/images/categories') }}/{{ $image }}" width="120" alt="">
                                    @endif
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    {{-- @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
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
                                <label for="" class="col-md-4 control-lable"></label>
                                <div class="col-md-4">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



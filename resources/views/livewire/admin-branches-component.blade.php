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
       <div class="col-md-6">All Branches</div>
       <div class="col-md-6"><a href="{{ route('admin.addbranch') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Blog</a></div>
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
               <th>Address</th>
               <th>Email</th>
               <th>District</th>
               <th>Tel: 1</th>
               <th>Tel: 2</th>
               <th>Whatsapp Tell</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($branches as $branch)
               <tr>
                   <td>{{ $branch->id }}</td>
                   <td>{{ $branch->address }}</td>
                   <td>{{ $branch->email }}</td>
                   <td>{{ $branch->district }}</td>
                   <td>{{ $branch->phone }}</td>
                   <td>{{ $branch->phone2 }}</td>
                   <td>{{ $branch->whatsapp }}</td>
                   <td>
                       <a href="{{ route('admin.editbranch', ['address'=> $branch->address]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                       <a href="#" onclick="confirm('Are you sure, You want to delete this Blog') || event.stopImmediatePropagation()" wire:click.prevent="deleteBranch({{ $branch->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
       {{ $branches->links() }}

</div>
</div>
</div>
</div>
</div>
</div>

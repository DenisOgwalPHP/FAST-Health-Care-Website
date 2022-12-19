<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Full-Name</th>
                                    <th>Mobile No</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Addition Info</th>
                                    <th>Date</th>
                                    @if (Auth::user()->utype === 'ADM')
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->fullname }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->location }}</td>
                                        <td>{{ $order->district }}</td>
                                        <td>{{ $order->message }}</td>
                                        <td>{{ date('d F, Y', strtotime( $order->created_at)) }}</td>
                                        @if (Auth::user()->utype === 'ADM')
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteOrder({{ $order->id }})"  style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $orders->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

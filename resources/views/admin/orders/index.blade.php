@extends('layouts.backend')

@section('page-title', 'Orders')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Orders
                </h3>


                <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tracking Number</th>
                                <th>Status</th>
                                <th>Sender Name</th>
                                <th>Sender Email</th>
                                <th>Sender Phone</th>
                                <th>Receiver Name</th>
                                <th>Receiver Email</th>
                                <th>Receiver Phone</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($orders as $ind => $order)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $order->tracking_number }}</td>
                                    <td>{{ $order->orderStatus->name }}</td>
                                    <td>{{ $order->sender_name }}</td>
                                    <td>{{ $order->sender_email }}</td>
                                    <td>{{ $order->sender_phone }}</td>
                                    <td>{{ $order->receiver_name }}</td>
                                    <td>{{ $order->receiver_email }}</td>
                                    <td>{{ $order->receiver_phone }}</td>
                                    <td>
                                        <img src="{{ $order->image_url }}" alt="" style="width: 100px">
                                    </td>

                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $order->id }}"
                                            action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $order->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection

@extends('layouts.backend')

@php
    $addEdit = isset($order) ? 'Edit' : 'Add';
    $addUpdate = isset($order) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Order ')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        @if ($order)
            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
            @else
                <form action="{{ route('admin.orders.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
        @endif

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Order
                    {{ $order ? '#' . $order->tracking_number : '' }}

                </h3>

                <button type="submit" id="submitBtn" class="btn btn-primary text-white">{{ $addUpdate }}</button>

            </div>



            <div class="block-content">



                <div class="row push justify-content-center">

                    <div class="col-lg-8">


                        <div class="row mb-4">


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('status', $order ? $order->order_status_code : null);

                                ?>
                                <label class="form-label" for="label"> Status <span class="text-danger">*</span></label>

                                <select required class="form-select" id="status" name="status">
                                    <option value="">Select Status</option>
                                    @foreach ($orderStatuses as $orderStatus)
                                        <option value="{{ $orderStatus->code }}"
                                            {{ $value == $orderStatus->code ? 'selected' : '' }}>
                                            {{ $orderStatus->name }}</option>
                                    @endforeach
                                </select>

                                @error('status')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            </div>


                            <hr>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('sender_name', $order ? $order->sender_name : null);

                                ?>
                                <label class="form-label" for="label"> Sender Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ $value }}" class="form-control" id="sender_name"
                                    name="sender_name" placeholder="Enter sender name">
                                @error('sender_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('sender_phone', $order ? $order->sender_phone : null);

                                ?>
                                <label class="form-label" for="label"> Sender Phone <span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ $value }}" class="form-control" id="sender_phone"
                                    name="sender_phone" placeholder="Enter sender phone">
                                @error('sender_phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('sender_email', $order ? $order->sender_email : null);

                                ?>
                                <label class="form-label" for="label"> Sender Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" value="{{ $value }}" class="form-control" id="sender_email"
                                    name="sender_email" placeholder="Enter sender email">
                                @error('sender_email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            </div>


                            <hr>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('receiver_name', $order ? $order->receiver_name : null);

                                ?>
                                <label class="form-label" for="label"> Receiver Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ $value }}" class="form-control" id="receiver_name"
                                    name="receiver_name" placeholder="Enter receiver name">
                                @error('receiver_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('receiver_phone', $order ? $order->receiver_phone : null);

                                ?>
                                <label class="form-label" for="label"> Receiver Phone <span
                                        class="text-danger">*</span></label>
                                <input type="text" value="{{ $value }}" class="form-control" id="receiver_phone"
                                    name="receiver_phone" placeholder="Enter receiver phone">
                                @error('receiver_phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('receiver_email', $order ? $order->receiver_email : null);

                                ?>
                                <label class="form-label" for="label"> Receiver Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" value="{{ $value }}" class="form-control" id="receiver_email"
                                    name="receiver_email" placeholder="Enter receiver email">
                                @error('receiver_email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>









                        </div>



                    </div>

                    <div class="col-lg-4">

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">

                            @if ($order && $order->image_path)
                                <img src="{{ $order->image_url }}" alt="image" class="img-fluid">
                            @endif

                            <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" class="form-control" id="image"
                                {{ $order ? '' : 'required' }} name="image">
                            @error('image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>




                </div>




            </div>
        </div>



        </form>



        @if ($order)
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Log Messages</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter fs-sm">
                        <tbody>
                            @foreach ($orderLogs as $log)
                                <tr>
                                    <td class="fs-base" style="width: 80px;">
                                        <span class="badge bg-primary">
                                            {{ $log->orderStatus->name }}
                                        </span>
                                    </td>
                                    <td style="width: 220px;">
                                        <span class="fw-semibold">
                                            {{ $log->created_at->format('d M, Y h:i A') }}
                                        </span>
                                    </td>
                                    <td class="text-success">
                                        {{ $log->description }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endif

    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection

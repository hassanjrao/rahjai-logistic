@extends('layouts.backend')

@section('page-title', 'Settings')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">Settings </h3>

            </div>
            <div class="block-content">

                <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')



                    <div class="row push justify-content-center">

                        <div class="col-lg-12 ">



                            <div class="row mb-4">


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('facebook', $settings ? $settings->facebook : null);

                                    ?>
                                    <label class="form-label" for="label"> Facebook <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="facebook" name="facebook" placeholder="Enter facebook link link">
                                    @error('facebook')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('twitter', $settings ? $settings->twitter : null);

                                    ?>
                                    <label class="form-label" for="label"> Twitter <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="twitter" name="twitter" placeholder="Enter twitter link">
                                    @error('twitter')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('instagram ', $settings ? $settings->instagram : null);

                                    ?>
                                    <label class="form-label" for="label"> Instagram <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="instagram " name="instagram " placeholder="Enter Instagram Link">
                                    @error('instagram ')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('linkedin', $settings ? $settings->linkedin : null);

                                    ?>
                                    <label class="form-label" for="label"> Linkedin <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="linkedin" name="linkedin" placeholder="Enter linkedin link">
                                    @error('linkedin')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                 <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('youtube', $settings ? $settings->youtube : null);

                                    ?>
                                    <label class="form-label" for="label"> Youtube <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="youtube" name="youtube" placeholder="Enter youtube link">
                                    @error('youtube')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('address', $settings ? $settings->address : null);

                                    ?>
                                    <label class="form-label" for="label"> Address <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="address" name="address" placeholder="Enter address">
                                    @error('address')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('phone', $settings ? $settings->phone : null);

                                    ?>
                                    <label class="form-label" for="label"> Phone <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="phone" name="phone" placeholder="Enter phone link">
                                    @error('phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('email', $settings ? $settings->email : null);

                                    ?>
                                    <label class="form-label" for="label"> Email <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="email" name="email" placeholder="Enter email link">
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('timing', $settings ? $settings->timing : null);

                                    ?>
                                    <label class="form-label" for="label"> Timing <span
                                            class="text-danger"></span></label>
                                    <input type="text" value="{{ $value }}" class="form-control"
                                        id="timing" name="timing" placeholder="Enter timing">
                                    @error('timing')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>











                            </div>



                        </div>



                        <div class="d-flex justify-content-end mt-4">

                            <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>

                        </div>

                    </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection

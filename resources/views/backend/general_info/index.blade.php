@extends('layouts.backend')
@section('title', 'General Info')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
@endpush
@section('content')
    <div class="content content-boxed">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">General Info </h3>
            </div>
            <div class="block-content">
                <div class="col-lg-6 m-auto">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('general.info.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Site Name</label>
                                    <input type="text" class="form-control" name="site_name" value="{{ $general_info?->site_name }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" accept="image/*" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                                    @error('logo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <img src="{{  $general_info?->logo ? asset($general_info?->logo) : 'https://placehold.co/400x400?text=Logo' }}" class="img-fluid" width="150" id="logo" alt="">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Favicon</label>
                                    <input type="file" class="form-control" name="favicon" accept="image/*" onchange="document.getElementById('favicon').src = window.URL.createObjectURL(this.files[0])">
                                    @error('favicon')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <img src="{{  $general_info?->favicon ? asset($general_info?->favicon) : 'https://placehold.co/400x400?text=Favicon' }}" class="img-fluid" width="150" id="favicon" alt="">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="address" class="form-control" name="address" placeholder="Enter Address" value="{{ $general_info?->address }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="phone" class="form-control" name="phone" placeholder="Enter Phone" value="{{ $general_info?->phone }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $general_info?->email }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook URL" value="{{ $general_info?->facebook }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter URL" value="{{ $general_info?->twitter }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram URL" value="{{ $general_info?->instagram }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" placeholder="Enter Youtube URL" value="{{ $general_info?->youtube }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" placeholder="Enter Linkedin URL" value="{{ $general_info?->linkedin }}">
                                </div>

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets') }}/js/plugins/select2/js/select2.full.min.js"></script>
    <script>
        One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs',
            'jq-rangeslider'
        ]);
    </script>
@endpush

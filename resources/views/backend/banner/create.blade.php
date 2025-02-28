@extends('layouts.backend')
@section('title', 'Banner Create')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
@endpush
@section('content')
    <div class="content content-boxed">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Banner Create </h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <a href="{{ route('banner.index') }}" class="btn btn-sm btn-primary">
                            Banner List</a>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="col-lg-5 m-auto">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Product <span class="text-danger">*</span> </label>
                                    <select class="js-select2 form-select" id="product_id" name="product_id"
                                        style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        @foreach ($products as $key => $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Short Title</label>
                                    <input type="text" class="form-control" name="short_title">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Image <span class="text-danger">*</span> <small>(Size must be 1920x800)</small> </label>
                                    <input type="file" class="form-control" name="image" accept="image/*" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <img src="https://placehold.co/250" class="img-fluid" width="250" id="image" alt="">
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

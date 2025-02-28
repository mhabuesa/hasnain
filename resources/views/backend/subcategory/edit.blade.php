@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/dropzone/min/dropzone.min.css">
@endpush
@extends('layouts.backend')
@section('title', 'Subcategory')
@section('content')
    <main id="main-container">
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Edit Subcategory</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                          <a href="{{ route('subcategory.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i> Back to List</a>
                        </div>
                      </div>
                </div>

                <div id="cod_field" class="row justify-content-center mt-3">
                    <div class="col-md-10 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action=" {{ route('subcategory.update', $subcategory->id) }} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-2">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $subcategory->name }}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="category">Category</label>
                                        <select name="category_id" id="category" class="form-select">
                                            @foreach ($categories as $category)
                                                <option {{ $category->id == $subcategory->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection


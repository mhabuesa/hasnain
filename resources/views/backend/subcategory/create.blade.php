@extends('layouts.backend')
@section('title', 'Sub Category')
@section('content')
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Category</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                          <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i> Back to List</a>
                        </div>
                      </div>
                </div>

                <div id="cod_field" class="row justify-content-center mt-3">
                    <div class="col-md-10 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action=" {{ route('subcategory.store') }} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="category">Category</label>
                                        <select name="category_id" id="category" class="form-select">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
@endsection

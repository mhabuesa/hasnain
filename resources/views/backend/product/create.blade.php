@include('backend.product.header_script')
@extends('layouts.backend')

@section('title', 'Product Create')
@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title"> Add New Product</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i>
                            Product List</a>
                    </div>
                </div>
            </div>
            <div class="block-content">

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-10">
                            <div class="mb-4">
                                <label class="form-label" for="name">Item Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                    <small class="text-danger px-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="category">Category</label>
                                        <select name="category_id" id="category" class="form-select" required>
                                            <option value="">Select Category</option>
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="subcategory">Subcategory</label>
                                        <select name="subcategory_id" id="subcategory" class="form-select" required>
                                            <option value="">Select Subcategory</option>
                                        </select>
                                        @error('subcategory')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="brand">Brand<small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="brand" name="brand">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="warranty">Warranty<small>(Optional)</small>
                                        </label>
                                        <input type="text" class="form-control" id="warranty" name="warranty">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="regular_price">Regular Price <small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="regular_price" name="regular_price">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="current_price">Current Price</label>
                                        <input type="text" class="form-control" id="current_price" name="current_price">
                                    </div>
                                    @error('current_price')
                                        <small class="text-danger px-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="discount">Discount % <small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="discount" name="discount">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="stock">Stock</label>
                                        <input type="text" class="form-control" id="stock" name="stock">
                                    </div>
                                    @error('stock')
                                        <small class="text-danger px-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="short_description">Short Description</label>
                                        <textarea class="form-control" id="short_description" name="short_description" rows="4"
                                            placeholder="Enter Short Description" required></textarea>
                                        @error('short_description')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="js-ckeditor5-classic">Description</label>
                                        <textarea id="js-ckeditor5-classic" name="description" rows="4" placeholder="Enter Description"></textarea>
                                        @error('description')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4 p-3 border border-gray-300 d-flex justify-content-between">
                                        <div class="">
                                            <label class="form-label" for="js-ckeditor5-classic">Product Visibility on
                                                Website</label>
                                            <small class="d-block">Toggle the switch below to control product
                                                visibility on your eCommerce site:</small>
                                            <small>Switch it "On" to start selling or "Off" if you want to pause
                                                availability.</small>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" checked type="checkbox" id="product_visibility"
                                                name="status" onchange="toggleLabel()">
                                            <label class="form-check-label" for="product_visibility"
                                                id="visibility_label">On</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 mb-4">
                                    <div class="p-3 border border-gray-300">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-2">
                                                <label class="form-label d-block mb-0"
                                                    for="js-ckeditor5-classic">SEO</label>
                                                <small>To add meta information to this product, toggle the switch.</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="meta_toggle"
                                                    name="meta_toggle">
                                                <label for="meta_toggle">Toggle Meta Info</label>
                                            </div>
                                        </div>

                                        <div id="meta" style="display: none;">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta_title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta_title"
                                                    name="meta_title" placeholder="Enter Meta Title">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="meta_description">Meta Description</label>
                                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"
                                                    placeholder="Enter Meta Description"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                                <input type="text" name="meta_keyword[]" data-role="tagsinput"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label class="form-label mb-0">Product Preview <small
                                                        class="text-muted">(260px x 330px)</small></label>
                                                <small class="text-muted d-block mb-3">For better view, use png and exact
                                                    size</small>
                                                <div class="cover-upload">
                                                    <label for="cover-input" class="cover-label">
                                                        <span class="text-dark">Upload Preview Image</span>
                                                    </label>
                                                    <input type="file" id="cover-input" name="preview"
                                                        class="d-none" />
                                                </div>
                                                @error('preview')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="mb-4">
                                                <label class="form-label mb-3" for="gallery">Product Gallery
                                                    <small class="text-muted">(270x400)</small>
                                                    <small class="text-muted d-block mb-3">Maximum 5 images </small>
                                                </label>
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label class="upload__btn dz-clickable bg-light rounded">
                                                            <p class="dz-default dz-message m-4 fs-6">Upload Product Gallery images
                                                            </p>
                                                            <input type="file" name="gallery[]" multiple="" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                    <div class="upload__img-wrap"></div>
                                                </div>
                                                @error('gallery')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-12">
                                            <div class="mb-4 mt-3 text-center">
                                                <button type="submit" class="btn btn-primary w-50 m-auto">Add
                                                    Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@include('backend.product.footer_script')

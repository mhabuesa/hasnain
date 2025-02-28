@include('backend.product.header_script')
@extends('layouts.backend')
@section('title', 'Product Edit')
@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title"> Edit Product</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i>
                            Product List</a>
                    </div>
                </div>
            </div>
            <div class="block-content">

                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-10">
                            <div class="mb-4">
                                <label class="form-label" for="name">Item Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $product->name }}">
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
                                                <option {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }} value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
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
                                            @foreach ($subcategories as $subcategory)
                                                <option {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }} value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('subcategory')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="brand">Brand<small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="warranty">Warranty<small>(Optional)</small>
                                        </label>
                                        <input type="text" class="form-control" id="warranty" name="warranty" value="{{ $product->warranty }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="regular_price">Regular Price <small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="regular_price" name="regular_price" value="{{ $product->regular_price }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="current_price">Current Price</label>
                                        <input type="text" class="form-control" id="current_price" name="current_price" value="{{ $product->current_price }}">
                                    </div>
                                    @error('current_price')
                                        <small class="text-danger px-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="discount">Discount % <small>(Optional)</small></label>
                                        <input type="text" class="form-control" id="discount" name="discount" value="{{ $product->discount }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="stock">Stock</label>
                                        <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                                    </div>
                                    @error('stock')
                                        <small class="text-danger px-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="short_description">Short Description</label>
                                        <textarea class="form-control" id="short_description" name="short_description" rows="4"
                                            placeholder="Enter Short Description" required> {{ $product->short_description }}</textarea>
                                        @error('short_description')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="js-ckeditor5-classic">Description</label>
                                        <textarea id="js-ckeditor5-classic" name="description" rows="4" placeholder="Enter Description" required> {{ $product->description }}</textarea>
                                        @error('description')
                                            <small class="text-danger px-2">{{ $message }}</small>
                                        @enderror
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
                                                    name="meta_toggle" {{ $product->meta ? 'checked' : '' }}>
                                                <label for="meta_toggle">Toggle Meta Info</label>
                                            </div>
                                        </div>

                                        <div id="meta" {{ $product->meta ? '' : 'style=display:none;' }}>
                                            <div class="mb-3">
                                                <label class="form-label" for="meta_title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta_title"
                                                    name="meta_title" placeholder="Enter Meta Title"
                                                    value="{{ $product->meta ? $product->meta->meta_title : '' }}">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="meta_description">Meta Description</label>
                                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"
                                                    placeholder="Enter Meta Description"> {{ $product->meta ? $product->meta->meta_description : '' }}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                                <input type="text" name="meta_keyword[]" data-role="tagsinput"
                                                    class="form-control"
                                                    value="{{ $product->meta ? $product->meta->meta_keywords : '' }}" />
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
                                                    <label for="cover-input"
                                                        class="cover-label border border-gray-300 rounded">
                                                        <span class="">Upload Preview Image</span>
                                                    </label>
                                                    <input type="file" id="cover-input" name="preview"
                                                        class="d-none" />
                                                    <img src="{{ asset($product->preview) }}" alt="preview image" />
                                                </div>
                                                @error('preview')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="mb-4">
                                                <label class="form-label mb-3" for="gallery">Previous Product
                                                    Gallery</label>
                                                <div class="d-flex flex-wrap">
                                                    @foreach ($product->gallery as $gallery)
                                                        <div class="image m-2 position-relative"
                                                            data-id="{{ $gallery->id }}">
                                                            <img src="{{ asset($gallery->image) }}" alt="product image"
                                                                class="d-block" width="100">
                                                            <button
                                                                class="btn btn-danger btn-sm position-absolute top-0 end-0 delete-gallery"
                                                                data-id="{{ $gallery->id }}">
                                                                <i class="fa fa-times fa-sm"></i>
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
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
                                                <button type="submit" class="btn btn-primary w-50 m-auto">Update
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
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-gallery').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Get gallery ID
                    let galleryId = this.dataset.id;

                    // Show SweetAlert confirmation
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send AJAX request
                            fetch("{{ route('product.gallery.delete') }}", {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                    body: JSON.stringify({
                                        id: galleryId
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // Remove the image from the DOM
                                        document.querySelector(
                                                `.image[data-id="${galleryId}"]`)
                                            .remove();

                                        // Call the custom toast function
                                        showToast(data.message, 'success');
                                    } else {
                                        // Show error toast
                                        showToast(data.message, 'error');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    showToast(
                                        'An error occurred while deleting the image.',
                                        'error');
                                });
                        }
                    });
                });
            });
        });

        // Custom Toast Function Using Toastify
        function showToast(text, type = 'success') {
            let from, to;

            switch (type) {
                case 'error':
                    from = '#ff5b5c';
                    to = '#ff5b5c';
                    break;
                case 'success':
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }

            Toastify({
                text,
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: `linear-gradient(to right, ${from}, ${to})`
                },
                onClick: function() {} // Optional
            }).showToast();
        }
    </script>
@endpush

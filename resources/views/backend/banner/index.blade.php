@extends('layouts.backend')
@section('title', 'Banner Component')
@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="col-lg-12">
                <div class="block block-rounded">
                    <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab"
                                data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home"
                                aria-selected="false" tabindex="-1">Main Banner</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile"
                                aria-selected="true">Secondary Banner</button>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active show" id="btabs-static-home" role="tabpanel"
                            aria-labelledby="btabs-static-home-tab" tabindex="0">

                            <div class="d-flex mx-3">
                                <h3 class="block-title">Banner Component </h3>
                            </div>
                            <div class="block block-rounded">

                                <div class="block-content">
                                    <div class="col-lg-6 m-auto">
                                        <img width="100%" class="mb-4 img-responsive" id="image" src="{{ asset($main_banner->image) }}"
                                            alt="">
                                        <form action="{{ route('banner.main.banner.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="product">Product</label>
                                                <select name="product_id" id="product" class="form-select">
                                                    <option value="">Select Product</option>
                                                    @foreach ($products as $key => $product)
                                                        <option {{ $product->id == $main_banner->product_id ? 'selected' : '' }} value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subtitle</label>
                                                <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" value="{{ $main_banner->subtitle }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $main_banner->title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Short Title</label>
                                                <input type="text" class="form-control" name="short_title" placeholder="Enter Short Title" value="{{ $main_banner->short_title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                            </div>
                                            <div class="mb-3 text-center">
                                               <button type="submit" class="btn btn-sm btn-primary w-50" >Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="btabs-static-profile" role="tabpanel"
                            aria-labelledby="btabs-static-profile-tab" tabindex="0">
                            <div class="d-flex mx-3">
                                <h3 class="block-title">Banner Component </h3>
                                <div class="block-options">
                                    <div class="block-options-item">
                                        <a href="{{ route('banner.create') }}" class="btn btn-sm btn-primary"> <i
                                                class="fa fa-plus"></i>
                                            Add Banner</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block block-rounded">

                                <div class="block-content">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-vcenter table-bordered table-striped"
                                            id="bannerTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 50px;">#</th>
                                                    <th style="width: 150px;">Image</th>
                                                    <th>Title</th>
                                                    <th class="d-none d-sm-table-cell">Subtitle</th>
                                                    <th class="d-none d-sm-table-cell">Short Title</th>
                                                    <th>Product</th>
                                                    <th class="d-none d-sm-table-cell" style="width: 100px;">Status</th>
                                                    <th class="text-center" style="width: 100px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($banners as $key => $banner)
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $key + 1 }}</th>
                                                        <td class="fw-semibold fs-sm">
                                                            <img src="{{ asset($banner->image) }}" class="img-fluid"
                                                                width="100" alt="">
                                                        </td>
                                                        <td class="fw-semibold fs-sm">
                                                            {{ $banner->title }}
                                                        </td>
                                                        <td class="fw-semibold fs-sm">
                                                            {{ $banner->subtitle }}
                                                        </td>
                                                        <td class="fw-semibold fs-sm">
                                                            {{ $banner->short_title }}
                                                        </td>
                                                        <td class="fw-semibold fs-sm">
                                                            {{ $banner->product->name }}
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    {{ $banner->status == 1 ? 'checked' : '' }}
                                                                    name="status" data-id="{{ $banner->id }}"
                                                                    data-status="{{ $banner->status }}"
                                                                    onchange="updatebannerstatus(this)">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                                    href="{{ route('banner.edit', $banner->id) }}">
                                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                                </a>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                                    onclick="deletebanner(this)"
                                                                    data-id="{{ $banner->id }}">
                                                                    <i class="fa fa-fw fa-times"></i>
                                                                </button>

                                                            </div>
                                                        </td>
                                                    </tr>


                                                @empty
                                                    <tr>
                                                        <td colspan="9" class="text-center">No Data Found</td>
                                                    </tr>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $('#bannerTable').DataTable();

        function deletebanner(button) {
            const id = $(button).data('id');
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

                    let url = "{{ route('banner.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        success: function(data) {
                            if (data.success) {
                                showToast(data.message, "success");
                                $(button).closest('tr').remove();
                            } else {
                                showToast(data.message, "error");
                            }
                        },
                        error: function(xhr) {
                            showToast("An error occurred: " + xhr.responseJSON.message, "error");
                        }
                    });

                }
            });
        }

        function updatebannerstatus(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "Will you change banner status?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updatebannerstatusAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updatebannerstatusAjax(element) {
            const id = $(element).data('id');
            let url = "{{ route('banner.status.update', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.success) {
                        showToast(data.message, "success");
                    } else {
                        showToast(data.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText, status, error', xhr.responseText, status, error);
                    showToast('Something went wrong', "error");
                }
            });
        }
    </script>
@endpush

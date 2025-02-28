@extends('layouts.backend')
@section('title', 'Subcategory')
@section('content')
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Subcategory List </h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <a href="{{ route('subcategory.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                                Add Subcategory</a>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                   <div class="table-responsive">
                    <table class="table table-sm table-vcenter" id="subcategoryTable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell">Category</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subcategories as $key => $subcategory )

                                <tr>
                                    <th class="text-center" scope="row">{{$key+1}}</th>
                                    <td class="fw-semibold fs-sm d-none d-sm-table-cell">
                                        {{ $subcategory->name }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $subcategory->category->name }}
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                {{ $subcategory->status == 1 ? 'checked' : '' }} name="status"
                                                data-id="{{ $subcategory->id }}" data-status="{{ $subcategory->status }}"
                                                onchange="updateCategoryStatus(this)">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" href="{{ route('subcategory.edit', $subcategory->id) }}" >
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" onclick="deleteCategory(this)"
                                                data-id="{{ $subcategory->id }}">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>


                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
        </div>
@endsection

@push('script')

<script>
    $('#categoryTable').DataTable();

    function deleteCategory(button) {
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

                let url = "{{ route('subcategory.destroy', ':id') }}";
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

    function updateCategoryStatus(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "Will you change Subcategory status?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updateCategoryStatusAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updateCategoryStatusAjax(element) {
            const id = $(element).data('id');
            let url = "{{ route('subcategory.status.update', ':id') }}";
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

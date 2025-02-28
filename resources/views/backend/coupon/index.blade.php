@extends('layouts.backend')
@section('title', 'Coupon List')
@section('content')
    <div class="content content-boxed">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Coupon List </h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <a href="{{ route('coupon.create') }}" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i>
                            Add Coupon</a>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-sm table-vcenter table-bordered table-striped" id="couponTable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th style="width: 150px;">Coupon Code</th>
                                <th>Type</th>
                                <th>Discount</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Min Amount</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Quantity</th>
                                <th class="d-none d-sm-table-cell" style="width: 10%;">Expire Date</th>
                                <th class="d-none d-sm-table-cell" style="width: 100px;">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($coupons as $key => $coupon)
                                <tr>
                                    <th class="text-center" scope="row">{{ $key + 1 }}</th>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->coupon_code }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->discount_type }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->discount }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->min_amount }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->quantity }}
                                    </td>
                                    <td class="fw-semibold fs-sm">
                                        {{ $coupon->expire_date }}
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                {{ $coupon->status == 1 ? 'checked' : '' }} name="status"
                                                data-id="{{ $coupon->id }}" data-status="{{ $coupon->status }}"
                                                onchange="updateCouponStatus(this)">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                href="{{ route('coupon.edit', $coupon->id) }}">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                            <button type="button"
                                                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                                onclick="deleteCoupon(this)" data-id="{{ $coupon->id }}">
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
@endsection

@push('script')
    <script>
        $('#couponTable').DataTable();

        function deleteCoupon(button) {
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

                    let url = "{{ route('coupon.destroy', ':id') }}";
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

        function updateCouponStatus(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "Will you change Coupon status?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updateCouponStatusAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updateCouponStatusAjax(element) {
            const id = $(element).data('id');
            let url = "{{ route('coupon.status.update', ':id') }}";
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

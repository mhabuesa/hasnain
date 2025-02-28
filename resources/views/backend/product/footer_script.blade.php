@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js"></script>
    <!-- Tags Input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script>
        $("#input-tags").selectize({
            delimiter: ",",
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });
    </script>
    <script src="{{ asset('assets') }}/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>
    <script>
        One.helpersOnLoad(['js-ckeditor5']);
    </script>

    <script>
        $(document).ready(function() {
            $('input[data-role="tagsinput"]').tagsinput({
                tagClass: 'badge badge-success',
            });
        });
    </script>

    <script>
        document.getElementById('cover-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const coverUpload = document.querySelector('.cover-upload');
                    const existingImg = coverUpload.querySelector('img');
                    if (existingImg) {
                        coverUpload.removeChild(existingImg);
                    }
                    coverUpload.appendChild(img);
                    document.querySelector('.upload-text').style.display = 'none';
                };

                reader.readAsDataURL(file);
            }
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgArray = [];
            var maxImages = 5;
            $('.upload__inputfile').on('change', function(e) {
                var imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var files = e.target.files;
                var filesArr = Array.from(files);
                filesArr.some(function(file) {
                    if (!file.type.match('image.*')) {
                        return false;
                    }
                    if (imgArray.length >= maxImages) {
                        return true;
                    }
                    imgArray.push(file);
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imgHTML = `
                        <div class='upload__img-box'>
                            <div style='background-image: url(${e.target.result})'
                                data-file='${file.name}' class='img-bg'>
                                <div class='upload__img-close'></div>
                            </div>
                        </div>`;
                        imgWrap.append(imgHTML);
                    };
                    reader.readAsDataURL(file);
                });
            });

            $('body').on('click', ".upload__img-close", function() {
                var fileName = $(this).parent().data("file");
                imgArray = imgArray.filter(file => file.name !== fileName);
                $(this).closest('.upload__img-box').remove();
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#meta_toggle').change(function() {
                if ($(this).is(':checked')) {
                    $('#meta').slideDown();
                } else {
                    $('#meta').slideUp();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                var categoryId = $(this).val();

                if (categoryId) {
                    $.ajax({
                        url: '/product/get_subcategories/' + categoryId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#subcategory').empty();
                            $('#subcategory').append(
                                '<option value="">Select Subcategory</option>');
                            $.each(data, function(key, value) {
                                $('#subcategory').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        },
                        error: function() {
                            alert('Something went wrong!');
                        }
                    });
                } else {
                    $('#subcategory').empty();
                    $('#subcategory').append('<option value="">Select Subcategory</option>');
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const regularPrice = document.getElementById('regular_price');
            const currentPrice = document.getElementById('current_price');
            const discount = document.getElementById('discount');

            // Utility function to format numbers
            function formatNumber(value) {
                return value ? parseFloat(value).toString() : '';
            }

            // Regular Price -> Current Price & Discount Calculation
            regularPrice.addEventListener('input', function() {
                const regular = parseFloat(regularPrice.value) || 0;
                const current = parseFloat(currentPrice.value) || 0;

                if (regular > 0 && current > 0) {
                    if (current > regular) {
                        discount.value = ''; // Blank if current > regular
                    } else {
                        const calculatedDiscount = ((regular - current) / regular) * 100;
                        discount.value = formatNumber(calculatedDiscount.toFixed(2));
                    }
                } else {
                    discount.value = '';
                }
                regularPrice.value = formatNumber(regular);
            });

            // Current Price -> Discount Calculation
            currentPrice.addEventListener('input', function() {
                const regular = parseFloat(regularPrice.value) || 0;
                const current = parseFloat(currentPrice.value) || 0;

                if (regular > 0 && current > 0) {
                    if (current > regular) {
                        discount.value = ''; // Blank if current > regular
                    } else {
                        const calculatedDiscount = ((regular - current) / regular) * 100;
                        discount.value = formatNumber(calculatedDiscount.toFixed(2));
                    }
                } else {
                    discount.value = '';
                }
                currentPrice.value = formatNumber(current);
            });

            // Discount -> Current Price Calculation
            discount.addEventListener('input', function() {
                const regular = parseFloat(regularPrice.value) || 0;
                const discountValue = parseFloat(discount.value) || 0;

                if (regular > 0 && discountValue > 0) {
                    const calculatedPrice = regular - (regular * discountValue / 100);
                    currentPrice.value = formatNumber(calculatedPrice.toFixed(2));
                } else {
                    currentPrice.value = '';
                }
                discount.value = formatNumber(discountValue);
            });
        });
    </script>
@endpush

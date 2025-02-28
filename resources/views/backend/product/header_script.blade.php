@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/dropzone/min/dropzone.min.css">
    <!-- Tags Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css">


    <style>
        /* Chrome, Safari, Edge, and Opera */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }

        .bootstrap-tagsinput {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 5px;
            background-color: #007bff;
            color: white;
            padding: 5px;
            border-radius: 3px;
        }

        /* Upload Cover */

        .cover-upload {
            width: 270px;
            height: 400px;
            background-color: #e7e7e7;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        .cover-label {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(138, 138, 138);
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            z-index: 2;
            position: absolute;
            cursor: pointer;
        }

        .upload-text {
            pointer-events: none;
            /* Prevents text from being selected */
        }

        .cover-upload img {
            position: absolute;
            z-index: 1;
            top: -100px;
            right: -100px;
            bottom: -100px;
            left: -100px;
            margin: auto;
            width: 100%;
        }


        /* gallery image upload */

        .upload__box {
            padding: 0;
        }
        .upload__inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        }
        .upload__btn {
        display: block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 116px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: transparent;
        border-color: #f2f2f2;
        font-size: 14px;
        color: #000

        }
        .upload__btn:hover {
        background-color: unset;
        color: #4045ba;
        transition: all 0.3s ease;
        }
        .upload__btn-box {
        margin-bottom: 10px;
        }
        .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
        }
        .upload__img-box {
        width: 150px;
        padding: 0 10px;
        margin-bottom: 12px;
        }
        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }
        .upload__img-close:after {
        content: "✖";
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
        }


        .toggle-off{
            border: 1px solid green;
        }
    </style>
@endpush

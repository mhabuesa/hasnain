
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template + Admin Dashboard.</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('frontend') }}/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('frontend') }}/css/backgrounds/bg-4.css">
</head>

<body>


    @yield('content')

   <!-- Vendor JS -->
   <script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.1.min.js"></script>
   <script src="{{ asset('frontend') }}/js/vendor/popper.min.js"></script>
   <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
   <script src="{{ asset('frontend') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
   <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.11.2.min.js"></script>

   <!--Plugins JS-->
   <script src="{{ asset('frontend') }}/js/plugins/swiper-bundle.min.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/countdownTimer.min.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/scrollup.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/jquery.zoom.min.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/slick.min.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/infiniteslidev2.js"></script>
   <script src="{{ asset('frontend') }}/js/vendor/jquery.magnific-popup.min.js"></script>
   <script src="{{ asset('frontend') }}/js/plugins/jquery.sticky-sidebar.js"></script>

   <!-- Main Js -->
   <script src="{{ asset('frontend') }}/js/vendor/index.js"></script>
   <script src="{{ asset('frontend') }}/js/main.js"></script>

</body>

</html>

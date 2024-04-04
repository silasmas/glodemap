<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="{{ config('app.name') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="{{ config('app.name') }} est un portail numérique pour avoir accès aux services de transport et medical de {{ config('app.name') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title  -->
    <title>{{ config('app.name') }} | {{ isset($titre)?$titre:"" }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/favicon.png') }} ">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logos/apple-touch-icon-57x57.png') }} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logos/apple-touch-icon-72x72.png') }} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logos/apple-touch-icon-114x114.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }} ">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('assets/search/search.css') }} ">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('assets/quform/css/base.css') }} ">

    <!-- theme core css -->
    <link href="{{ asset('assets/css/styles.css') }} " rel="stylesheet">

    <!-- custom css -->
    <link href="{{ asset('assets/css/custom.css') }} " rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        @include("parties.menu")

       @yield("content")

        <!-- FOOTER
        ================================================== -->
       @include("parties.footer")

    </div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }} "></script>

    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }} "></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>

    <!-- navigation -->
    <script src="{{ asset('assets/js/nav-menu.js') }} "></script>

    <!-- serch -->
    <script src="{{ asset('assets/search/search.js') }} "></script>

    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.js') }} "></script>

    <!-- thumbs js -->
    <script src="{{ asset('assets/js/owl.carousel.thumbs.js') }} "></script>

    <!-- tab -->
    <script src="{{ asset('assets/js/easy.responsive.tabs.js') }} "></script>

    <!-- jquery.counterup.min -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }} "></script>

    <!-- stellar js -->
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }} "></script>

    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }} "></script>

    <!-- countdown js -->
    <script src="{{ asset('assets/js/countdown.js') }} "></script>

    <!-- jquery.magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>

    <!-- lightgallery js -->
    <script src="{{ asset('assets/js/lightgallery-all.js') }} "></script>

    <!-- mousewheel js -->
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }} "></script>

    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }} "></script>

    <!-- animated headline js -->
    <script src="{{ asset('assets/js/animated-headline.js') }} "></script>

    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.js') }} "></script>

    <!-- lettering js -->
    <script src="{{ asset('assets/js/jquery.lettering.js') }} "></script>

    <!-- textillate js -->
    <script src="{{ asset('assets/js/jquery.textillate.js') }} "></script>

    <!-- tilt js -->
    <script src="{{ asset('assets/js/tilt.js') }} "></script>

    <!--  clipboard js -->
    <script src="{{ asset('assets/js/clipboard.min.js') }} "></script>

    <!--  prism js -->
    <script src="{{ asset('assets/js/prism.js') }} "></script>

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/main.js') }} "></script>

    <!-- form plugins js -->
    <script src="{{ asset('assets/quform/js/plugins.js') }} "></script>

    <!-- form scripts js -->
    <script src="{{ asset('assets/quform/js/scripts.js') }} "></script>

    <!-- all js include end -->

</body>

</html>

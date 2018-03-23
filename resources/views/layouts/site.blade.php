<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Symantic Creative - @yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>

    <!-- Open Graph
    ================================================== -->
    @yield('open_graph','')

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/mind-icons-line.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/funky-style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/colors/color-symantic.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/overwrite.css') }}"/>

    <!-- Favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>
<body class="royal_preloader">

<div id="royal_preloader"></div>


<!-- Nav and Logo
================================================== -->
@include('includes.header')
<!-- Search -->
@include('includes.search-modal')
@yield('slider')
@yield('content')








<div class="section" id="contact">
    <!-- Subscribe Block
    ================================================== -->

    <div class="section padding-top-bottom background-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <h4 class="mb-5 color-white">Subscribe</h4>
                    <div class="subscribe-box-1 dark">
                        <input type="text" value="" placeholder="Email address" class="form-control" />
                        <button class="btn btn-primary subscribe-1" type="submit" value="">
                            <i class="fa fa-angle-right"></i>
                        </button>
                        <p class="mt-1"><small>* we promise that we won´t spam you, never!</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer Light Block
================================================== -->


@include('includes.footer')
<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>

<!-- JAVASCRIPT
================================================== -->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/royal_preloader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@stack('scripts')
<!-- End Document
================================================== -->
</body>
</html>
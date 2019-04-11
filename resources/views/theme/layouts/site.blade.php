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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82198278-1"></script>--}}
    {{--<script>--}}
        {{--window.dataLayer = window.dataLayer || [];--}}
        {{--function gtag(){dataLayer.push(arguments);}--}}
        {{--gtag('js', new Date());--}}

        {{--gtag('config', 'UA-82198278-1');--}}
    {{--</script>--}}


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
@include('theme.includes.header')
<!-- Search -->
@include('theme.includes.search-modal')
@yield('slider')
@yield('content')


<!-- Footer Light Block
================================================== -->


@include('theme.includes.footer')
<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>

<!-- JAVASCRIPT
================================================== -->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/royal_preloader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom/all.js') }}"></script>

@stack('scripts')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b3bf0d16d961556373d60f1/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- End Document
================================================== -->
</body>
</html>

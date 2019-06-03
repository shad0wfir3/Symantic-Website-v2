@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative - Strategic Marketing Consulting" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title')
    Strategic Branding & Marketing
    @endsection

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/services/strategic-marketing/hero_1.jpg') }}')"></div>
        <div class="dark-fade-over "></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>Business Development Services</h2>
                        <div class="main-subtitle-bottom mt-2">Growing your business through technology and innovation.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    @endsection
@section('content')
    <!-- Text Block
    ================================================= -->
    <div class="section padding-top-bottom-small  over-hide on-dark" id="scroll-top">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="">Modern innovative solutions!</h3>
                    <p class="mt-3 mb-0">
                        Increase your operations with innovative solutions.
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class=" mb-0 lead a">Our business development services provide your startup, small business or company with a range of solutions aimed at increasing
                        the efficiency of your daily operations through innovative products and packages. Our various international partnership programs allows your business to grow through innovative
                        services and packages such as email operations, payment services and global shipping solutions.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Separator Line
    ================================================== -->

    <div class="section padding-top-bottom-1 background-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="separator-wrap">
                        <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                        <p>&nbsp;</p><h4 class="text-center text-uppercase">Offers</h4><p>&nbsp;</p>
                        <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-small padding-bottom-small background-white over-hide">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">GB.</div>
                        <h5 class="mt-3">Google Business</h5>
                        <p class="mt-3 mb-4">Our Google Business services provides your business with online digital tools through google's g-suit packages and services, managing your business 24/7.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">SD.</div>
                        <h5 class="mt-3">Shipping & Distribution</h5>
                        <p class="mt-3 mb-4">We have partnered with DHL worldwide to provide you with shipping and distribution services for both local and international products. Safe, Secure, Reliable.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">CD.</div>
                        <h5 class="mt-3">Amazon Web Services</h5>
                        <p class="mt-3 mb-4">We provide your business with continuity and infrastructure through amazon web services, allowing your business to grow and expand through secure and affordable solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Parallax Block
	================================================== -->
    <div class="section padding-top-small padding-bottom-1st over-hide">
        <div class="parallax-1" style="background-image: url({{ asset('img/services/strategic-marketing/hero_1.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title on-dark text-left">
                        <div class="main-subtitle-top mb-4">Digital Marketing</div>
                        <h4>Industry leading experts in <br> strategic marketing</h4>
                        <div class="main-subtitle-bottom smaller mt-3">a unique approach to learning<br>for tertiary education</div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-4" id="progress">
                    <div class="progress-container">
                        <span class="progress-badge dark">Research</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                <span class="progress-value"><span class="counter">87</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Analyse</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Plan</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">93</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Execute</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">93</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Block
    ================================================== -->
    <div class="section background-white z-bigger-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 transform-y-120 transform-on-mob">
                    <div class="call-box-3 p-5 dark text-center background-dark rounded-2 drop-shadow">
                        <i class="funky-ui-icon icon-Computer-Secure"></i>
                        <h5 class="mt-4 mb-3 color-white">Request a quote!</h5>
                        <p class="mb-5">Our strategic branding and marketing services are the perfect starting point for your next project</p>
                        <a href="{{route('theme.pages.request_quote')}}" class="btn btn-primary btn-simple btn-round btn-long" >request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('theme.includes.seperator-line')

@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

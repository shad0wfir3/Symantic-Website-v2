@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative - Search Engine Optimisation" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title','Search Engine Optimisation')

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/services/seo/header-1.jpg') }}')"></div>
        <div class="dark-fade-over "></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>Search Engine <br>Optimisation</h2>
                        <div class="main-subtitle-bottom mt-2">Boost your conversion rate and increase sales through professional Search Engine Optimisations and advertising.</div>
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
                    <h3 class="">Define your brand!</h3>
                    <p class="mt-3 mb-0">
                        Comprehensive Search Engine Optimisation that increases leads and conversions for your business,
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class=" mb-0 lead a">
                        All major search engines such as Google, Bing and Yahoo have primary search results,
                        where web pages and other content such as videos or local listings are shown and ranked
                        based on what the search engine considers most relevant to user
                    </p>

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
                        <div class="big-text-in color-primary">CS.</div>
                        <h5 class="mt-3">Core SEO</h5>
                        <p class="mt-3 mb-4">Core SEO incorporates comprehensive SEO principles and optimisation for your website and digital assets, increasing conversion and brand awareness.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">PC.</div>
                        <h5 class="mt-3">Pay Per Click</h5>
                        <p class="mt-3 mb-4">Our pay per click seo campaigns provides targeted advertising that engages clients and efficiently promotes your business on various platforms.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">LG.</div>
                        <h5 class="mt-3">Lead Generation</h5>
                        <p class="mt-3 mb-4">Our lead generations services provide you with a constant stream of traffic and leads, increasing the conversion rate of your business and sales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Parallax Block
        ================================================== -->
    <div class="section padding-top-small padding-bottom-1st over-hide">
        <div class="parallax-1" style="background-image: url({{ asset('img/services/graphic-design/cta_1.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title on-dark text-left">
                        <div class="main-subtitle-top mb-4">Graphic Design</div>
                        <h4>Professional and affordable graphic design suited for any project and business.</h4>
                        <div class="main-subtitle-bottom smaller mt-3">a unique approach to design.</div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-4" id="progress">
                    <div class="progress-container">
                        <span class="progress-badge dark">Research</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                <span class="progress-value"><span class="counter">94</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Prototype</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Design</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Release</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">98</span>%</span>
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

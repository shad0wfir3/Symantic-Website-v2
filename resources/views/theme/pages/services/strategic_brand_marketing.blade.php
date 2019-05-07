@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative - Strategic Marketing Consulting" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title')
    Strategic Brand Marketing
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
                        <h2>Strategic Brand Marketing</h2>
                        <div class="main-subtitle-bottom mt-2">Strategic impact analyses, brand awareness and road-mapping through qualified research.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    @endsection
@section('content')

    <!-- Call To Action Block
	================================================== -->

    <div class="section padding-top-bottom-smaller background-white z-bigger-2" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left">
                        <h5 class="mb-3">Strategy is nothing without execution.</h5>
                        <p class="mb-0">Some press for better execution when they actually need a better strategy or they change the strategy when they actually should focus on execution.</p>
                    </div>
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
                        <span class="separator"><span class="separator-line dashed"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-small background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">SC.</div>
                        <h5 class="mt-3">Strategic Consulting</h5>
                        <p class="mt-3 mb-4">Consultation services offered to help your business with your next big thing.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">BA.</div>
                        <h5 class="mt-3">Brand Awareness</h5>
                        <p class="mt-3 mb-4">Marketing campaigns designed to increase your business image.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">CD.</div>
                        <h5 class="mt-3">Campaign Development</h5>
                        <p class="mt-3 mb-4">Expert knowledge on campaign execution and analyses.</p>
                    </div>
                </div>
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">PT.</div>
                        <h5 class="mt-3">Prototyping</h5>
                        <p class="mt-3 mb-4">Gather insight into your next idea before committing large.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">MR.</div>
                        <h5 class="mt-3">Market Research</h5>
                        <p class="mt-3 mb-4">See how your product or service stack up in the real world.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">VA.</div>
                        <h5 class="mt-3">Viability Assesments</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<!-- Separator Line--}}
    {{--================================================== -->--}}

    <div class="section padding-top-bottom-smaller background-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="separator-wrap">
                        <span class="separator"><span class="separator-line dashed"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Half Blocks Grid  ---UX---
    ================================================== -->

    <div id="user-experience" class="section over-hide scroll ">
        <div class="container-fluid m-0 p-0 padding-top-bottom-small">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover" style="background-image: url('http://placehold.it/300x300')">
                </div>
                <div class="col-md-6 align-items-stretch">
                    <div class="section justify-content-center text-left padding-on-grid-12 padding-top-bottom">

                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Strategic Brand Marketing</div>
                            <h4>Grow your business by making the right choices</h4>
                            <div class="main-subtitle-bottom smaller mt-3">Increase brand awareness.</div>
                            <p class="mt-3">
                                We provide a crucial part of building your business through perpective driven marketing strategies and brand management.
                            </p>
                            <p>
                                This also encompasses figuring out a few core features that will distinguish your brand amongst your competition in crowded marketplaces. Finding brand positioning that will uncover assets and highlighting long term benefits to your business.</p>
                            </p>

                            <p>
                                These marketing events must bring up positive feeling in the minds of potential consumers in order for them to become loyal customers and purchase your products.
                            </p>
                            <p>
                                These marketing events must bring up positive feeling in the minds of potential consumers in order for them to become loyal customers and purchase your products.
                            </p>
                            <p>
                                These marketing events must bring up positive feeling in the minds of potential consumers in order for them to become loyal customers and purchase your products.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('theme.includes.sbds-cta',[
"title" => 'Discover Symantic Business Development Services (SBDS)&trade;',
"text" => "Not sure where to start? Why not have a look at our packaged solutions? SBDS is the ultimate solution for your startup or small bushiness's marketing needs. <strong>Affordable</strong> and <strong>Professional</strong>.",
'button_text' => 'discover SBDS &trade;',
'url_route' => 'theme.services.sbds'
])
    {{--@include('theme.includes.quote_cta',['service' => 'strategic brand marketing'])--}}

    {{--<div class="section padding-top-bottom-smaller background-white background-primary-color z-bigger-2" id="scroll-top">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-9">--}}
                    {{--<div class="call-box-3 text-center text-md-left on-dark">--}}
                        {{--<h5 class="mb-3 text-white">Want to work with us?</h5>--}}
                        {{--<p class="mb-0 text-white">If anything is unclear, or you just want to say hello, why not get in touch.--}}
                            {{--<br> We provide obligation free quotes and would love to talk to you about your next project.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--TODO: Update link to quote/onboarding page--}}
                {{--<div class="col-md-3 mt-4 mt-md-0">--}}
                    {{--<div class="call-box-3 text-center text-md-right">--}}
                        {{--<a href="{{ route('theme.pages.contact_us') }}" class="btn background-dark text-white  mt-0 mt-md-4" >Contact Us!</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--@include('theme.includes.sbds-cta')--}}
    @include('theme.includes.logo-block')
    {{--@include('theme.includes.seperator-line')--}}

@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

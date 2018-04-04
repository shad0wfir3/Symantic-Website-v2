@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/services/design-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','Graphic Design Solutions')

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url({{ asset('img/services/branding/header.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2><mark>Brand Marketing & Strategy</mark></h2></h2>
                        <div class="main-subtitle-bottom mt-4">Driving implementation, adoption and experiences for you business' brand</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    @endsection
@section('content')
    <!-- Primary Page Layout
	================================================== -->



    <!-- Call To Action Block
    ================================================== -->

    <div class="section padding-top-bottom-smaller background-white z-bigger-2" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left">
                        <h5 class="mt-3">We provide concrete and tested brand services to suit your business.</h5>
                        <p class="mb-0">Our brand strategy and marketing services gives you the edge you need.</p>
                    </div>
                </div>
                {{--TODO: Update link to quote/onboarding page--}}
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="{{ route('quote-me','branding') }}" class="btn btn-primary btn-long mt-0 mt-md-4" >request a quote!</a>
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

    <!-- Icons Block
	================================================== -->

    <div class="section padding-top-bottom-small background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 mt-4 mt-lg-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Switch"></i>
                        <p class="mt-3">Campaign Activations</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Rocket"></i>
                        <p class="mt-3">Brand Experiences</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Paper-Plane"></i>
                        <p class="mt-3">Marketing Campaigns</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid  ---UX---
    ================================================== -->

    <div id="user-experience" class="section background-grey over-hide scroll">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/branding/service.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Brand Marketing & Strategy</div>
                            <h4>Activations and Branding Campaigns</h4>
                            <div class="main-subtitle-bottom smaller mt-3">Increase brand awareness.</div>
                            <p class="mt-3">
                                We provide a crucial part of building brand perspective through product samplings, in-store retail marketing, sponsorships, and experiential events by exploring ways for brands to reach potential customers that can shift perceptions and create a real emotional engagement.
                            </p>
                            <p>
                                This also encompasses figuring out a few core features that will distinguish your brand amongst your competition in crowded marketplaces. Finding brand positioning that will uncover assets and highlighting long term benefits to your business.</p>
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
    <div class="section padding-top-bottom-smaller background-white background-primary-color z-bigger-2" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left on-dark">
                        <h5 class="mb-3 text-white">Want to work with us?</h5>
                        <p class="mb-0 text-white">If anything is unclear, or you just want to say hello, why not get in touch.
                            <br> We provide obligation free quotes and would love to talk to you about your next project.</p>
                    </div>
                </div>
                {{--TODO: Update link to quote/onboarding page--}}
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="{{ route('contact-us') }}" class="btn background-dark text-white  mt-0 mt-md-4" >contact us today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

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
        <div class="parallax" style="background-image: url({{ asset('img/services/design/header.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2><mark>Website Design & Development</mark></h2></h2>
                        <div class="main-subtitle-bottom mt-4">Some people think design means how it looks. But of course, if you dig deeper, it's really how it works.</div>
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
                        <h5 class="mb-3">Need a new or updated look? Want to expand your business?</h5>
                        <p class="mb-0">Let us provide you with professional and expert design solutions, that increases consumer turnaround,<br>
                            generates more leads and ultimately brings in more business.</p>
                    </div>
                </div>
                {{--TODO: Update link to quote/onboarding page--}}
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="#" class="btn btn-primary btn-long mt-0 mt-md-4" >request a quote!</a>
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
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Idea-3"></i>
                        <p class="mt-3">User Experience (UX)</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Profile"></i>
                        <p class="mt-3">Business Cards</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Paper-Plane"></i>
                        <p class="mt-3">Flyers</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Board"></i>
                        <p class="mt-3">Posters</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Paper"></i>
                        <p class="mt-3">Brochures</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Thumbs-UpSmiley"></i>
                        <p class="mt-3">Social Media</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Monitor-phone"></i>
                        <p class="mt-3">Websites</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Phone"></i>
                        <p class="mt-3">Application UI</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Pen-3"></i>
                        <p class="mt-3">Stationary</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Book"></i>
                        <p class="mt-3">Booklets</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Loading-2"></i>
                        <p class="mt-3">Logo's</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0 mt-lg-4">
                    <div class="services-box-2 service-scroll text-center">
                        <i class="funky-ui-icon icon-Open-Book"></i>
                        <p class="mt-3">Magazines</p>
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
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/service.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Graphic Design.</div>
                            <h4>Digital, Social & Print Design</h4>
                            <div class="main-subtitle-bottom smaller mt-3">Complete design solutions for your business.</div>
                            <p class="mt-3 mb-0">
                                <br>
                                At Symantic Creative we provide an expert and professional approach to all our design projects.
                                From small alterations, to big renovaton projects, we ensure that our clients are fully satisfied with your designs
                                <br>
                                <br>
                                We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<!-- Half Blocks Grid --Corporate Identity-----}}
    {{--================================================== -->--}}

    {{--<div id="corporate-identity" class="section background-white over-hide">--}}
        {{--<div class="container-fluid m-0 p-0 background-white">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/ci.jpg') }})">--}}

                {{--</div>--}}
                {{--<div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">--}}
                    {{--<div class="section justify-content-center text-left padding-on-grid-12">--}}
                        {{--<div class="main-title">--}}
                            {{--<div class="main-subtitle-top mb-4">Corporate Identity</div>--}}
                            {{--<h4>Creative Business Identity</h4>--}}
                            {{--<div class="main-subtitle-bottom smaller mt-3">your image redefined</div>--}}
                            {{--<p class="mt-3 mb-3">--}}
                                    {{--Our corporate identity design services is specifically formulated and refined through years of experience from <strong>world class designers</strong>.--}}
                                    {{--<br>--}}
                                    {{--<br>--}}
                                    {{--From logo design to letterheads and stationary, corporate identity design allows you the freedom to choose the level of branding you desire and stand out from your competition.--}}
                            {{--</p>--}}

                        {{--</div>--}}
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        {{--<a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">redefine your image</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Half Blocks Grid --Website & App Design -----}}
{{--================================================== -->--}}

    {{--<div id="ux" class="section background-grey over-hide">--}}
        {{--<div class="container-fluid m-0 p-0 background-grey">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/websites.jpg') }})">--}}
                {{--</div>--}}
                {{--<div class="col-md-6 align-items-stretch padding-top-bottom">--}}
                    {{--<div class="section justify-content-center text-left padding-on-grid-12">--}}
                        {{--<div class="main-title">--}}
                            {{--<div class="main-subtitle-top mb-4">Website & App Design</div>--}}
                            {{--<h4>Modern Responsive Websites and Applications</h4>--}}
                            {{--<div class="main-subtitle-bottom smaller mt-3">changing with the times</div>--}}
                            {{--<p class="mt-3 mb-3">--}}
                                {{--At Symantic Creative, we provide our clients with a unique and creative design experience through discovery and analyses.--}}
                                {{--<br>--}}
                                {{--<br>--}}
                                {{--Consequently, our work invariably features smart designs that accommodate users’ demand for simple, attractive, efficient, credible and engaging online experiences and provides customer satisfaction.--}}
                            {{--</p>--}}

                        {{--</div>--}}
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        {{--<a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">request a quote</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Half Blocks Grid -- Branding Material--}}
    {{--================================================== -->--}}

    {{--<div id="website-apps" class="section background-white over-hide">--}}
        {{--<div class="container-fluid m-0 p-0 background-white">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/marketing.jpg') }})">--}}

                {{--</div>--}}
                {{--<div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">--}}
                    {{--<div class="section justify-content-center text-left padding-on-grid-12">--}}
                        {{--<div class="main-title">--}}
                            {{--<div class="main-subtitle-top mb-4">Marketing Material</div>--}}
                            {{--<h4>Printed, Media and Social marketing design</h4>--}}
                            {{--<div class="main-subtitle-bottom smaller mt-3">changing with the times</div>--}}
                            {{--<p class="mt-3 mb-3">--}}
                                {{--At Symantic Creative, we provide our clients with a unique and creative website and application design experiences through discovery and analyses.--}}
                                {{--<br>--}}
                                {{--<br>--}}
                                {{--Consequently, our work invariably features smart designs that accommodate users’ demand for simple, attractive, efficient, credible and engaging online experiences and provides customer satisfaction.--}}
                            {{--</p>--}}

                        {{--</div>--}}
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        {{--<a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">request a quote</a>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <!-- Call To Action Block
   ================================================== -->

    <div class="section padding-top-bottom-smaller background-white background-primary-color z-bigger-2" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left on-dark">
                        <h5 class="mb-3 text-white">Why not get in touch ?</h5>
                        <p class="mb-0 text-white">If anything is unclear, or you just want to say hello, why not get in touch.
                            <br> We provide obligation free quotes and would love to talk to you about your next project.</p>
                    </div>
                </div>
                {{--TODO: Update link to quote/onboarding page--}}
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="#" class="btn background-dark text-white  mt-0 mt-md-4" >request a quote!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

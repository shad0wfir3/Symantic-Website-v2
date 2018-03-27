@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/services/design-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','User Experience, Digital and Print Design')

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
                        <h2><mark>User Experience, Digital & Print Design</mark></h2></h2>
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
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3 mt-4 mt-lg-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#user-experience" class="scroll">
                            <i class="funky-ui-icon icon-Idea-3"></i>
                            <p class="mt-3">UX Design</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#corporate-identity" class="scroll">
                            <i class="funky-ui-icon icon-Profile"></i>
                            <p class="mt-3">Corporate Identity</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3 mt-4 mt-md-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#website-apps" class="scroll">
                            <i class="funky-ui-icon icon-Monitor-phone"></i>
                            <p class="mt-3">Website & App Design</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3 mt-4 mt-md-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#business-material" class="scroll">
                            <i class="funky-ui-icon icon-Photo-Album2"></i>
                            <p class="mt-3">Business Material</p>
                        </a>
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
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/ux.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h4>Targeted design focused on user psychology and behaviour</h4>
                            <div class="main-subtitle-bottom smaller mt-3">direct the narrative</div>
                            <p class="mt-3 mb-0"><strong>UX design is about making the user’s experience with the product the best it can be.</strong> At Symantic Creative all our design services has the concepts and principles of UX design ingrained in its core.
                                <br>
                                <br>
                                We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.</p>
                        </div>
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">ready to get started?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid --Corporate Identity---
    ================================================== -->

    <div id="corporate-identity" class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/ci.jpg') }})">

                </div>
                <div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Corporate Identity</div>
                            <h4>Creative Business Identity</h4>
                            <div class="main-subtitle-bottom smaller mt-3">your image redefined</div>
                            <p class="mt-3 mb-3">
                                    Our corporate identity design services is specifically formulated and refined through years of experience from <strong>world class designers</strong>.
                                    <br>
                                    <br>
                                    From logo design to letterheads and stationary, corporate identity design allows you the freedom to choose the level of branding you desire and stand out from your competition.
                            </p>

                        </div>
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">redefine your image</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid --Website & App Design ---
================================================== -->

    <div id="ux" class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/websites.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Website & App Design</div>
                            <h4>Modern Responsive Websites and Applications</h4>
                            <div class="main-subtitle-bottom smaller mt-3">changing with the times</div>
                            <p class="mt-3 mb-3">
                                At Symantic Creative, we provide our clients with a unique and creative design experience through discovery and analyses.
                                <br>
                                <br>
                                Consequently, our work invariably features smart designs that accommodate users’ demand for simple, attractive, efficient, credible and engaging online experiences and provides customer satisfaction.
                            </p>

                        </div>
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid -- Branding Material
    ================================================== -->

    <div id="website-apps" class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design/websites.jpg') }})">

                </div>
                <div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4"></div>
                            <h4>Modern Responsive Websites and Applications</h4>
                            <div class="main-subtitle-bottom smaller mt-3">changing with the times</div>
                            <p class="mt-3 mb-3">
                                At Symantic Creative, we provide our clients with a unique and creative website and application design experiences through discovery and analyses.
                                <br>
                                <br>
                                Consequently, our work invariably features smart designs that accommodate users’ demand for simple, attractive, efficient, credible and engaging online experiences and provides customer satisfaction.
                            </p>

                        </div>
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">request a quote</a>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- Half Blocks Grid
================================================== -->

    <div id="business-material" class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Website & App Design</div>
                            <h4>Modern Responsive Websites and Applications</h4>
                            <div class="main-subtitle-bottom smaller mt-3">changing with the times</div>
                            <p class="mt-3 mb-3">
                                At Symantic Creative, we provide our clients with a unique and creative design experience through discovery and analyses.
                                <br>
                                <br>
                                Consequently, our work invariably features smart designs that accommodate users’ demand for simple, attractive, efficient, credible and engaging online experiences and provides customer satisfaction.
                            </p>

                        </div>
                        {{--TODO: Update link to onboarding/quote page with service definition--}}
                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

@extends('layouts.site')
@section('title','User Experience, Digital and Print Design')
@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url({{ asset('img/services/design-header.jpg') }})"></div>
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
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#user-experience" class="scroll">
                            <i class="funky-ui-icon icon-Idea-3"></i>
                            <p class="mt-3">UX Design</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#corporate-identity" class="scroll">
                            <i class="funky-ui-icon icon-Profile"></i>
                            <p class="mt-3">Corporate Identity</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#websites-apps" class="scroll">
                            <i class="funky-ui-icon icon-Monitor-phone"></i>
                            <p class="mt-3">Website & App Design</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0">
                    <div class="services-box-2 service-scroll  text-center">
                        <a href="#social-media" class="scroll">
                            <i class="funky-ui-icon icon-Hand-Touch2"></i>
                            <p class="mt-3">Social Media Design</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-md-0 mt-sm-0">
                    <div class="services-box-2 service-scroll text-center">
                        <a href="#marketing-material" class="scroll">
                            <i class="funky-ui-icon icon-Photo-Album2"></i>
                            <p class="mt-3">Marketing Material</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-lg-2 mt-4 mt-lg-0 mt-sm-0">
                    <div class="services-box-2 service-scroll  text-center">
                        <a href="#corporate-stationary" class="scroll">
                            <i class="funky-ui-icon icon-Testimonal"></i>
                            <p class="mt-3">Corporate Stationary</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div id="user-experience" class="section background-grey over-hide scroll">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h4>Targeted design focused on user psycology and behaviour</h4>
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

    <!-- Half Blocks Grid
    ================================================== -->

    <div id="corporate-identity" class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/video-2.jpg') }})">

                </div>
                <div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Corporate Identity</div>
                            <h4>Creative Branding Solutions</h4>
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

    <!-- Half Blocks Grid
================================================== -->

    <div id="ux" class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title no-subtitle">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h3 class="mb-0">Targeted design focused on user psycology and behaviour</h3>
                        </div>
                        <p class="lead mb-1"><strong>UX design is about making the user’s experience with the product the best it can be.</strong> At Symantic Creative all our design services has the concepts and principles of UX design ingrained in its core.
                            <br>
                            <br>
                            We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.</p>

                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">work with us</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">

                </div>
                <div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h4>Targeted design focused on user psycology and behaviour</h4>
                            <div class="main-subtitle-bottom smaller mt-3">direct the narrative</div>
                            <p class="mt-3 mb-0"><strong>UX design is about making the user’s experience with the product the best it can be.</strong> At Symantic Creative all our design services has the concepts and principles of UX design ingrained in its core.
                                <br>
                                <br>
                                We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- Half Blocks Grid
================================================== -->

    <div id="ux" class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        <div class="main-title no-subtitle">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h3 class="mb-0">Targeted design focused on user psycology and behaviour</h3>
                        </div>
                        <p class="lead mb-1"><strong>UX design is about making the user’s experience with the product the best it can be.</strong> At Symantic Creative all our design services has the concepts and principles of UX design ingrained in its core.
                            <br>
                            <br>
                            We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.</p>

                        <a href="contact-map.html" class="btn btn-primary btn-simple btn-round btn-long">work with us</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-md-6 flex-sm-last align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/services/design-header.jpg') }})">

                </div>
                <div class="col-md-6 flex-xs-first align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">User Experience (UX) Design</div>
                            <h4>Targeted design focused on user psycology and behaviour</h4>
                            <div class="main-subtitle-bottom smaller mt-3">direct the narrative</div>
                            <p class="mt-3 mb-0"><strong>UX design is about making the user’s experience with the product the best it can be.</strong> At Symantic Creative all our design services has the concepts and principles of UX design ingrained in its core.
                                <br>
                                <br>
                                We want to make sure we attract people to your website, brand, campaign or business, and then, once they are there, make their journey to executing transactions as easy and fun as possible.</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
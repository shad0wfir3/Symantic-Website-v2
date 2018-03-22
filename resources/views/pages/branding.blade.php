@extends('layouts.site')

@section('title','Brand Activation & Marketing')


@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url( {{ asset('img/services/branding-header.jpg')}} )"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-title on-dark text-left mb-0">
                        <h2><mark>Brand Activation, Marketing and Growth</mark></h2>
                        <div class="main-subtitle-bottom mt-4 ">Some people think design means how it looks. But of course, if you dig deeper, it's really how it works.</div>
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
                        <h5 class="mb-3">Design must reflect the practical and aesthetic in business.</h5>
                        <p class="mb-0">Some people think design means how it looks. But of course, if you<br>dig deeper, it's really how it works.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="portfolio-masonry-3col.html" class="btn btn-primary btn-long mt-0 mt-md-4" >discover design</a>
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

    <div class="section padding-top-bottom background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="big-text-in">01.</div>
                        <h5 class="mt-3">100% Responsive</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="big-text-in">02.</div>
                        <h5 class="mt-3">Bootstrap 4 Grid</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="big-text-in">03.</div>
                        <h5 class="mt-3">Support</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url('img/parallax-hero-11.jpg')">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Perfect design</div>
                            <h4>Moving boundaries into digital solution.</h4>
                            <div class="main-subtitle-bottom smaller mt-3">unique and truly responsive</div>
                        </div>
                        <div class="clear"></div>
                        <div class="section text-left">
                            <div class="services-box-3 border-on-light p-4 rounded-2">
                                <h5><i class="funky-ui-icon icon-Monitor-phone"></i>100% Responsive</h5>
                                <p class="mt-3 mb-0">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                            </div>
                            <div class="services-box-3 border-on-light p-4 rounded-2 mt-4">
                                <h5><i class="funky-ui-icon icon-Split-FourSquareWindow"></i>Bootstrap 4 Grid</h5>
                                <p class="mt-3 mb-0">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                            </div>
                        </div>
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
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">Unique design</div>
                            <h4>Your brand is how your customers see your business.</h4>
                            <div class="main-subtitle-bottom smaller mt-3">unique and truly responsive</div>
                        </div>
                        <div class="clear"></div>
                        <div class="section text-left">
                            <div class="services-box-3 border-on-light p-4 rounded-2">
                                <h5><i class="funky-ui-icon icon-Compass-2"></i>Design Process</h5>
                                <p class="mt-3 mb-0">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                            </div>
                            <div class="services-box-3 border-on-light p-4 rounded-2 mt-4">
                                <h5><i class="funky-ui-icon icon-Check-2"></i>Digital Assets</h5>
                                <p class="mt-3 mb-0">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url('img/parallax-hero-8.jpg')">
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url('img/content-4.jpg')">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">
                        <div class="main-title">
                            <div class="main-subtitle-top mb-4">what we can do</div>
                            <h4>Our skills.</h4>
                            <div class="main-subtitle-bottom smaller mt-3">we do magic</div>
                        </div>
                        <div class="clear"></div>
                        <div class="section" id="progress">
                            <div class="progress-container">
                                <span class="progress-badge">development</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                        <span class="progress-value"><span class="counter">87</span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container mt-4">
                                <span class="progress-badge">happiness</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="progress-value"><span class="counter">100</span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container mt-4">
                                <span class="progress-badge">design</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                        <span class="progress-value"><span class="counter">93</span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container mt-4">
                                <span class="progress-badge">marketing</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                        <span class="progress-value"><span class="counter">78</span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container mt-4">
                                <span class="progress-badge">creativity</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                        <span class="progress-value"><span class="counter">99</span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

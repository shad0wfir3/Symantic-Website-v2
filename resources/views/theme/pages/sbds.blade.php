@extends('theme.layouts.site')
@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design - About Us" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/about-us-header.jpg') }}" />
    <meta property="og:description" content="Professional, quality, dedicated and expert services to grow your business" />
@endsection
@section('title','Business Development Solutions')
@section('slider')
    <div class="section full-height-2 over-hide">
        <div class="parallax" style="background-image: url('img/parallax-hero-6.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="hero-center-wrap move-top-on-mob z-bigger">
            <div class="container parallax-fade-top">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="quote-box-2 text-right">
                            <h4 class="color-white">now that we can do anything, what we will do?</h4>
                            <p class="mt-5">bill buxton</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <button data-toggle="modal" data-target="#Modal-video" type="button" class="video-button on-dark float-right float-lg-left ml-4 mt-4"><i class="fa fa-play"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')



    <!-- Modal With Video
    ================================================== -->

    <div class="modal fade default search-modal" id="Modal-video" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="hero-center-wrap move-top">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="video-section">
                                        <figure class="vimeo rounded-2 over-hide">
                                            <a href="https://player.vimeo.com/video/219627581">
                                                <img src="img/video-4.jpg" alt="image" class="rounded-2 over-hide" />
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid
    ================================================== -->

    <div class="section background-white z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 transform-y-120 transform-on-mob">
                    <div class="grid-wraper background-dark rounded-2 over-hide">
                        <div class="grid-box float-inline half height-50-block background-image-cover" style="background-image: url('img/content-3.jpg')">
                        </div>
                        <div class="grid-box float-inline half height-50-block">
                            <div class="section-center-wrap">
                                <div class="in-grid-wrap w-80 mg-auto">
                                    <div class="main-title mb-0 on-dark text-center">
                                        <div class="main-subtitle-top mb-4">Unique & responsive</div>
                                        <h4>Moving boundaries</h4>
                                        <div class="main-subtitle-bottom smaller mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-bottom background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="icon-in-box rounded-circle mg-auto"><i class="funky-ui-icon icon-Monitor-phone"></i></div>
                        <h5 class="mt-4">100% Responsive</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="icon-in-box rounded-circle mg-auto"><i class="funky-ui-icon icon-Split-FourSquareWindow"></i></div>
                        <h5 class="mt-4">Bootstrap 4 Grid</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <div class="icon-in-box rounded-circle mg-auto"><i class="funky-ui-icon icon-Support"></i></div>
                        <h5 class="mt-4">Support</h5>
                        <p class="mt-3 mb-4">Above all good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Work Title Block
    ================================================== -->

    <div class="section padding-top-bottom over-hide">
        <div class="parallax-1" style="background-image: url('img/parallax-8.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title on-dark text-center">
                        <div class="main-subtitle-top mb-4">LATEST WORK</div>
                        <h3>We Take Pride In Delivering Only The Best.</h3>
                        <div class="main-subtitle-bottom mt-3">we do magic</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Work Block
    ================================================== -->

    <div class="section background-white z-bigger">
        <div class="container-fluid">
            <div class="row transform-y-120 transform-on-mob">
                <div class="work-slider-wrap mb-4">
                    <div id="owl-work" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/1.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/2.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/3.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/4.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/5.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/6.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/7.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project-image.html">
                                <div class="portfolio-box-1 dark rounded">
                                    <img  src="img/portfolio/grid/8.jpg" alt="" />
                                    <div class="portfolio-mask-2 rounded"></div>
                                    <h5 class="on-center text-center">primarily serve people</h5>
                                    <p class="on-center text-center">design, motion</p>
                                </div>
                            </a>
                        </div>
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

    <!-- Logos Block
    ================================================== -->

    <div class="section padding-top-bottom-small background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="#">
                        <img  src="img/logos/d1.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d2.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d3.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d9.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d11.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d6.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Text Chart & Progress Bars
    ================================================== -->

    <div class="section padding-top-bottom background-dark-2 over-hide">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h4 class="color-white">Strategy Planning</h4>
                    <p class="lead color-white mt-3 mb-4">The data sources that we use for this type of analysis include customer enquiry data and customer feedback.</p>
                    <div class="clear"></div>
                    <div class="chart mt-4 mr-3" data-percent="83" data-bar-color="#6dc234">
                        <div class="chart-text">brand</div>
                    </div>
                    <div class="chart mt-4 mr-3" data-percent="95" data-bar-color="#6dc234">
                        <div class="chart-text">results</div>
                    </div>
                    <div class="chart mt-4 mr-3" data-percent="77" data-bar-color="#6dc234">
                        <div class="chart-text">data</div>
                    </div>
                    <div class="chart mt-4" data-percent="86" data-bar-color="#6dc234">
                        <div class="chart-text">analysis</div>
                    </div>
                </div>
                <div class="col-xl-5 mt-5 mt-xl-0" id="progress">
                    <div class="progress-container">
                        <span class="progress-badge dark">development</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                <span class="progress-value"><span class="counter">87</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">happiness</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">design</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">93</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">marketing</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                <span class="progress-value"><span class="counter">78</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">creativity</span>
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

    <!-- Team Block
    ================================================== -->

    <div class="section padding-top-bottom background-grey over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title text-center">
                        <div class="main-subtitle-top mb-4">our team</div>
                        <h3>Team Of Creatives.</h3>
                        <div class="main-subtitle-bottom mt-3">only the best</div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="team-slider-wrap">
                    <div id="owl-team-1" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img src="img/t4.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Marco Kulis</h6>
                                <p class="mb-4">app & media</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t1.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Anna Furius</h6>
                                <p class="mb-4">identity building</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="facebook">
                                        <a href="#">Fb</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t2.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Alex Andrews</h6>
                                <p class="mb-4">design process</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t3.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Frank Furius</h6>
                                <p class="mb-4">web development</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#">Fb</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t4.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Marco Kulis</h6>
                                <p class="mb-4">app & media</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t1.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Anna Furius</h6>
                                <p class="mb-4">identity building</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#">Fb</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t2.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Alex Andrews</h6>
                                <p class="mb-4">design process</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#">Fb</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t3.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Frank Furius</h6>
                                <p class="mb-4">web development</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="facebook">
                                        <a href="#">Fb</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5">
                                <img  src="img/t4.jpg" alt="" class="img-raised" />
                                <h6 class="mb-1">Marco Kulis</h6>
                                <p class="mb-4">app & media</p>
                                Design must reflect the practical in business but above all... good design must primarily serve people.
                                <ul class="team-social mt-4">
                                    <li class="twitter">
                                        <a href="#">Tw</a>
                                    </li>
                                    <li class="google">
                                        <a href="#">G+</a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">Vm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Separator Line
    ================================================== -->

    <div class="section padding-top-bottom-1 background-grey">
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

    <!-- Pricing Block
    ================================================== -->

    <div class="section padding-top-bottom background-grey over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title text-center">
                        <div class="main-subtitle-top mb-4">our pricing</div>
                        <h3>From whiteboard sketches to pixel-perfect designs.</h3>
                        <div class="main-subtitle-bottom mt-3">our numbers</div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="pricing p-xl-5 background-white text-center">
                        <h5>Starter</h5>
                        <div class="pricing-sub mb-4">billed annually or $12 month-to-month</div>
                        <div class="pricing-price mt-3"><sup>$</sup>10</div>
                        <div class="pricing-per mt-2">per month</div>
                        <div class="pricing-line mt-4"></div>
                        <ul class="list-style mt-4">
                            <li><i class="fa fa-check"></i>Up to 7 pages</li>
                            <li><i class="fa fa-times grey"></i>Ecommerce</li>
                        </ul>
                        <button class="btn btn-primary btn-round mt-4" type="button">Order Now</button>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="pricing dark big-shad popular p-xl-5 text-center background-image-cover" style="background-image: url('img/pricing.jpg')">
                        <div class="ribbon"><i class="funky-ui-icon icon-Star"></i></div>
                        <h5 class="color-white">Personal</h5>
                        <div class="pricing-sub mb-4">billed annually or $20 month-to-month</div>
                        <div class="pricing-price mt-3"><sup>$</sup>16</div>
                        <div class="pricing-per mt-2">per month</div>
                        <div class="pricing-line mt-4"></div>
                        <ul class="list-style mt-4">
                            <li><i class="fa fa-check"></i>Up to 20 pages</li>
                            <li><i class="fa fa-times grey"></i>Ecommerce</li>
                        </ul>
                        <button class="btn btn-primary btn-simple btn-round mt-4" type="button">Order Now</button>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="pricing p-xl-5 background-white text-center">
                        <h5>Ultimate</h5>
                        <div class="pricing-sub mb-4">billed annually or $29 month-to-month</div>
                        <div class="pricing-price mt-3"><sup>$</sup>24</div>
                        <div class="pricing-per mt-2">per month</div>
                        <div class="pricing-line mt-4"></div>
                        <ul class="list-style mt-4">
                            <li><i class="fa fa-check"></i>Infinite pages</li>
                            <li><i class="fa fa-check"></i>Ecommerce</li>
                        </ul>
                        <button class="btn btn-primary btn-round mt-4" type="button">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-bottom background-dark over-hide">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-lg-4">
                    <div class="services-box-3 dark bigger-icon">
                        <h5><i class="funky-ui-icon icon-Monitor-phone"></i><span class="color-white">100% Responsive</span></h5>
                        <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must serve people.</p>
                    </div>
                    <div class="services-box-3 dark bigger-icon mt-4 mt-lg-5">
                        <h5><i class="funky-ui-icon icon-Split-FourSquareWindow"></i><span class="color-white">Bootstrap 4 Grid</span></h5>
                        <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must serve people.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box-3 dark bigger-icon">
                        <h5><i class="funky-ui-icon icon-Duplicate-Window"></i><span class="color-white">Modal Style</span></h5>
                        <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must serve people.</p>
                    </div>
                    <div class="services-box-3 dark bigger-icon mt-4 mt-lg-5">
                        <h5><i class="funky-ui-icon icon-Support"></i><span class="color-white">Support</span></h5>
                        <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must serve people.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="call-box-5 dark">
                        <h4 class="color-white">Unique and truly responsive!</h4>
                        <p class="mt-3 mb-5">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Block
    ================================================== -->

    <div class="section padding-top-bottom background-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="quote-box-1 text-center">
                        <i class="funky-ui-icon icon-Anchor-2"></i>
                        <h5 class="mt-5 mb-5">"Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people."</h5>
                        <h4>Thomas J. Watson</h4>
                        <p class="mt-2">some magazine</p>
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

    <!-- Blog Block
    ================================================== -->

    <div class="section padding-top-bottom background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="main-title text-left">
                        <div class="main-subtitle-top mb-4">latest news</div>
                        <h4>Add your creation to<br>our collections.</h4>
                        <div class="main-subtitle-bottom smaller mt-3">you inspired me</div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="blog-box-2">
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>May 4, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>We want to share with you our mood after selection.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>May 1, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Sleep, code, eat, travel. Repeat.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>April 28, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Don’t get lost quoting your next projects.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>April 23, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Don´t give up, keep on focus.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>April 15, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Moments from a life. Day of photography.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 26, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>The golden rule of modern webdesign. Moments from a life.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 17, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Design is the method of putting form and content together.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 13, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Design is so simple, that's why it is so complicated.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 05, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>How you look at it is pretty much how you'll see it.</h5></a>
                        </div>
                        <div class="post-link-box mb-2" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 04, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>Don’t get lost quoting your next projects.</h5></a>
                        </div>
                        <div class="post-link-box" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                            <p>March 03, 2017</p>
                            <a href="post.html" class="tipped" data-title="by <em>Marco Kulis</em>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'><h5>The golden rule of modern webdesign. Moments from a life.</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/custom/custom-about-company.js')}}"></script>
@endpush

@extends('layouts.site')
@section('title','Full Service Digital Agency')
@section('slider')
    <div class="section full-height over-hide">
        <div class="hero-slider-wrap">
            <div class="customNavigation hero-sinc-1-2">
                <a class="prev-hero-sync-1"><i class="fa fa-long-arrow-left"></i></a>
                <a class="next-hero-sync-1"><i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div id="hero-sync1" class="owl-carousel">
                <div class="item full-height background-image-cover" style="background-image:url({{ asset('img/slide1.jpg') }})">
                    <div class="grey-fade-over"></div>
                    <div class="hero-center-wrap move-top-2 z-bigger">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-12 corporate-hero-text">
                                    <p>we build</p>
                                    <h1 class="color-white mt-4">brands</h1>
                                    <a href="#scroll-top" class="btn btn-primary btn-simple btn-round btn-long mt-5 scroll" >read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item full-height background-image-cover" style="background-image:url({{ asset('img/slide2.jpg') }})">
                    <div class="grey-fade-over"></div>
                    <div class="hero-center-wrap move-top-2 z-bigger">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-12 corporate-hero-text">
                                    <p>focussed on</p>
                                    <h1 class="color-white mt-4">strategy</h1>
                                    <a href="#scroll-top" class="btn btn-primary btn-simple btn-round btn-long mt-5 scroll" >read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item full-height background-image-cover" style="background-image:url({{ asset('img/slide3.jpg') }})">
                    <div class="grey-fade-over"></div>
                    <div class="hero-center-wrap move-top-2 z-bigger">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-12 corporate-hero-text">
                                    <p>providing</p>
                                    <h1 class="color-white mt-4">solutions</h1>
                                    <a href="#scroll-top" class="btn btn-primary btn-simple btn-round btn-long mt-5 scroll" >read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hero-sync2" class="owl-carousel">
                <div class="item">
                    <p>01 <span>/</span>we build</p>
                    <h5 class="mt-1"><span>brands</span></h5>
                </div>
                <div class="item">
                    <p>02 <span>/</span>focussed on</p>
                    <h5 class="mt-1"><span>strategy</span></h5>
                </div>
                <div class="item">
                    <p>03 <span>/</span>providing</p>
                    <h5 class="mt-1"><span>solutions</span></h5>
                </div>
            </div>
        </div>
        <a href="#scroll-top" class="scroll" ><div class="scroll-down-hero-1"><i class="fa fa-long-arrow-down"></i></div></a>
    </div>

@endsection

@section('title', 'Symantic Creative Digital Agency')

@section('content')

    <!-- Text Block
================================================== -->

    <div class="section padding-top-bottom background-white over-hide" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Professional Digital Creative Agency.</h3>
                    <p class="mt-3 mb-0">
                        Complete professional and specialised branding, marketing and advertisement solutions for your business.
                        <a href="#" class="btn-link btn-primary">Request a quote!</a>
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class="lead mb-0">Symantic Creative is a full service digital agency based in the beautiful Cape Town, South Africa.
                        Established in 2016, we have had the opportunity to work with industry leading clients and partners from all over the world, providing professional branding, marketing and advertisement solutions and services.
                        <br><span class=" colored-prim">Is your business next?</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-bottom-smaller background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Target-Market"></i>
                        <h5 class="mt-3">Brand Activation & Marketing</h5>
                        <p class="mt-3 mb-4">Increase your brands' reputation though engagement campaigns.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Optimization"></i>
                        <h5 class="mt-3">User Experience (UX), Digital & Print Design</h5>
                        <p class="mt-3 mb-4">Professional design solutions for your business needs.</p>
                        <a href="{{ route('design') }}" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Monitor-Laptop"></i>
                        <h5 class="mt-3">E-Commerce Design & Development</h5>
                        <p class="mt-3 mb-4">Business growth through online selling & e-commerce platforms</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section padding-bottom background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Monitor-phone"></i>
                        <h5 class="mt-3">Wordpress & Website Development</h5>
                        <p class="mt-3 mb-4">Manage your website and content without writing a single line of code.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Business-ManWoman"></i>
                        <h5 class="mt-3">Business Operations & Solutions</h5>
                        <p class="mt-3 mb-4">Business management through professional integrated solutions.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="services-box-1 border-on-light text-center">
                        <i class="funky-ui-icon icon-Support"></i>
                        <h5 class="mt-3">Strategic Marketing Consulting</h5>
                        <p class="mt-3 mb-4">Achieve growth and inoperations and growth through a dedicated strategy</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Video & Call To Action Block
    ================================================== -->

    <div class="section padding-top-bottom background-dark over-hide">
        <div class="container">
            <div class="row">
                <div class="clear"></div>
                <div class="col-lg-8 mt-lg-5 mt-xl-0">
                    <div class="video-section">
                        <figure class="vimeo rounded-2 img-raised over-hide">
                            <a href="https://player.vimeo.com/video/219627581">
                                <img src="{{ asset('img/video-2.jpg') }}" alt="image"  class="rounded-2 over-hide"/>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0 mt-xl-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="call-box-5 dark">
                        <h5 class="color-white"><em>Engage</em> your Audiences. <em>Increase</em> your brands reputation. <em>Define</em> your business!</h5>
                        <p class="mt-3 mb-5"><mark>Symantic Creative</mark> provides a wide range of expert solutions and services for your marketing needs.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Work Title Block
        ================================================== -->

    <div class="section padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title text-center">
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

    <div class="section background-white padding-bottom">
        <div class="container-fluid">
            <div class="row">
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


    <!-- Seperator Line
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

    <div class="section padding-top-bottom background-white over-hide">
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
                        <img  src="img/logos/d5.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d6.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d7.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
                <div class="col-md-2 mt-4 mt-md-0">
                    <a href="#">
                        <img  src="img/logos/d11.png" class="img-120 mx-auto" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Block
   ================================================== -->

    <div class="section padding-top-bottom background-grey-2 over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title text-center">
                        <div class="main-subtitle-top mb-4">latest news</div>
                        <h3>Find out more about us</h3>
                        <div class="main-subtitle-bottom mt-3">informative. inspirational. funny</div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="blog-slider-wrap mb-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="customNavigation">
                        <a class="prev-blog"><i class="fa fa-angle-left"></i></a>
                        <a class="next-blog"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div id="owl-blog" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="post.html"><h5>Don’t get lost.</h5></a>
                                <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <img  src="img/t1.jpg" alt="" />
                                    <p> by <a href="#">Anna Furius</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="post.html"><h5>Moments from a life.</h5></a>
                                <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <img  src="img/t2.jpg" alt="" />
                                    <p> by <a href="#">Alex Andrews</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="post.html"><h5>Content together.</h5></a>
                                <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <img  src="img/t3.jpg" alt="" />
                                    <p> by <a href="#">Frank Furius</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="post.html"><h5>Modern webdesign.</h5></a>
                                <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <img  src="img/t4.jpg" alt="" />
                                    <p> by <a href="#">Marco Kulis</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="post.html"><h5>How you'll see it.</h5></a>
                                <p class="mt-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <img  src="img/t2.jpg" alt="" />
                                    <p> by <a href="#">Alex Andrews</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5 mg-auto" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <a href="blog-grid.html" class="btn btn-primary btn-simple btn-round btn-long">visit our blog</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Parallax Block
    ================================================== -->

    <div class="section padding-top-bottom over-hide">
        <div class="parallax-1" style="background-image: url('img/slide3.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title on-dark text-center">
                        <div class="main-subtitle-top mb-4">time to get started</div>
                        <h3>Give your business a boost!</h3>
                        <div class="main-subtitle-bottom mt-3">Discover the possibilities of marketing done right, and see what we can do for your business.</div>
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
                        <i class="funky-ui-icon icon-Add-UserStar"></i>
                        <h5 class="mt-4 mb-3 color-white">Ready to get started, request a quote!</h5>
                        <p class="mb-5">From graphic design to application development, contact us today to provide you with a obligation free quote!</p>
                        <a href="#" class="btn btn-primary btn-simple btn-round btn-long" >request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

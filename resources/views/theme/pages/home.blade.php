@extends('theme.layouts.site')
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
    ================================================= -->
    <div class="section padding-top-bottom  over-hide on-dark" id="scroll-top">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="">Professional Digital Creative Agency.</h3>
                    <p class="mt-3 mb-0">
                        Complete professional and specialised branding, marketing and advertisement solutions for your business.
                        <a href="#" class="btn-link btn-primary">Request a quote!</a>
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class="lead mb-0">Symantic Creative is a full service digital agency based in the beautiful Cape Town, South Africa.
                        Established in 2016, we have had the opportunity to work with industry leading clients and partners from all over the world, providing professional branding, marketing and advertisement solutions and services.
                        <br>We are dedicated to providing high-quality service in a comfortable atmosphere for clients who seek a professional experience from expert professionals.
                        <span class=" colored-prim">Is your business next?</span></p>
                </div>
            </div>
        </div>
    </div>


    @include('theme.includes.seperator-line')

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-bottom-smaller over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title text-center">
                        <div class="main-subtitle-top mb-4">services</div>
                        <h3>Our Services Offered</h3>
                        <div class="main-subtitle-bottom mt-3">growth. development. experience</div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.2s">
                    <div class="services-box-2  text-center">
                        <img src="{{ asset('img/services/strategic-marketing/service-2.png') }}" class="img-fluid img-raised-2" alt="">
                        <h5 class="mt-3">Strategic Brand Marketing</h5>
                        <p class="mt-3 mb-4 ">Strategic Brand Marketing focuses on the strategic marketing of your brand through research and analyses, raising awareness and increasing recognition. </p>
                        <a href="{{ route('theme.services.strategic_brand_marketing') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.4s">
                    <div class="services-box-2 text-center">
                        <img src="{{ asset('img/services/graphic-design/service-2.png') }}" class="img-fluid img-raised-2" alt="Graphic Design">
                        <h5 class="mt-3">Graphic Design</h5>
                        <p class="mt-3 mb-4">A core component in any business is the design elements that builds your image. From logo design to websites, newsletter and digital assets, our services build your business.</p>
                        <a href="{{ route('theme.services.graphic_design') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.6s">
                    <div class="services-box-2  text-center">
                        <img src="{{ asset('img/services/web-development/service-2.png') }}" class="img-fluid img-raised-2" alt="">
                        <h5 class="mt-3">Website Design & Development</h5>
                        <p class="mt-3 mb-4">Our comprehensive website development cater to your specific needs, from SPA pages to E-commerce and Custom solutions, we provide you with a product that excells.</p>
                        <a href="{{ route('theme.services.website_development') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
                </div>

                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.2s">
                    <div class="services-box-2  text-center">
                        <img src="{{ asset('img/services/social-media-marketing/service-2.png') }}" class="img-fluid img-raised-2" alt="">
                        <h5 class="mt-3">Social Media Marketing</h5>
                        <p class="mt-3 mb-4">Targeted campaigns and managed social profiles provide you with the ultimate solutions to increase your customers while you focus on running your business.</p>
                        <a href="{{ route('theme.services.social_media_marketing') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.4s">
                    <div class="services-box-2 text-center">
                        <img src="{{ asset('img/services/seo/service-2.png') }}" class="img-fluid img-raised-2" alt="Search Engine Optimisation">
                        <h5 class="mt-3">Search Engine Optimisation</h5>
                        <p class="mt-3 mb-4">Our SEO services provide your business with a scalable online presence that increases customer aquisition, exposes your brand and grants you specialised insights into your business.</p>
                        <a href="{{ route('theme.services.strategic_brand_marketing') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mb-4" data-scroll-reveal="enter bottom move 40px over 0.6s after 0.6s">
                    <div class="services-box-2 text-center rounded-3">
                        <img src="{{ asset('img/services/business-development/service-2.png') }}" class="img-fluid img-raised-2" alt="Business Development">
                        <h5 class="mt-3">Business Development</h5>
                        <p class="mt-3 mb-4">We provide a variety of expertly crafted well established managment and automation solutions that will help you manage the day to day operations of your business. </p>
                        <a href="{{ route('theme.services.strategic_brand_marketing') }}" class="btn btn-primary btn-simple btn-round btn-long">read more</a>
                    </div>
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
                        <h5 class="mt-4 mb-3 color-white">Ready to get started, request a quote today!</h5>
                        <p class="mb-5">From graphic design to application development, contact us today and let us help you grow!</p>
                        <a href="#" class="btn btn-primary btn-simple btn-round btn-long" >request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seperator Line
    ================================================== -->


    <!-- Work Block
    ================================================== -->
    <div class="section background-grey over-hide">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-lg-7 row-in background-image-cover padding-top-bottom" style="background-image: url('img/parallax-6.jpg')">
                    <div class="grey-fade-over"></div>
                </div>
                <div class="col-lg-5 row-in padding-top-bottom">
                    <div class="section align-self-center text-left padding-on-grid-12">
                        <div class="main-title no-subtitle">
                            <div class="main-subtitle-top mb-4">CASE STUDY</div>
                            <h3 class="mb-0">Lookor - A innovative solution to equipment hire</h3>
                        </div>
                        <p class="lead mb-5">Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people. Some people think design means how it looks.</p>
                        <a href="#" class="btn btn-primary btn-simple btn-round btn-long scroll">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Block
   ================================================== -->
    <div class="section padding-top-bottom-small background-grey-2 over-hide">
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
                        @foreach($featured_posts as $post)
                        <div class="item">
                            <div class="blog-box-1 background-white drop-shadow">
                                <a href="{{ route('theme.blog.post',$post->slug) }}"><h5>{{ truncate_headings($post->title) }}</h5></a>
                                <p class="mt-3">{{ $post->excerpt}}</p>
                                <div class="separator-wrap pt-3">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-3">
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('theme.blog.tags',$tag->slug) }}" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">{{ $tag->title }}</a>
                                        @endforeach
                                    <p class="mt-2"> by <a href="#">{{ $post->author->name }}</a></pmt-2>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5 mg-auto" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <a href="{{ route('blog.index') }}" class="btn btn-primary btn-simple btn-round btn-long">visit our blog</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Block
    ================================================== -->

    <div class="section padding-top-bottom">
        <div class="parallax-1" style="background-image: url('{{ asset('img/about_page.jpg') }}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            @include('theme.includes.sbds-cta',[
    "title" => 'Discover Symantic Business Development Services (SBDS)&trade;',
    "text" => "Not sure where to start? Why not have a look at our packaged solutions? SBDS is the ultimate solution for your startup or small bushiness's marketing needs. <strong>Affordable</strong> and <strong>Professional</strong>.",
    'button_text' => 'discover SBDS &trade;',
    'url_route' => 'theme.services.sbds'
    ])
        </div>
    </div>

    <div class="section" id="contact">
        <div class="section padding-top-bottom background-grey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <h4 class="mb-5">Subscribe to our Newsletter</h4>
                        <div class="subscribe-box-1">
                            <input type="text" value="" placeholder="Email address" class="form-control" />
                            <button class="btn btn-primary subscribe-1" type="submit" value="">
                                <i class="fa fa-angle-right"></i>
                            </button>
                            <p class="mt-1"><small>* we promise not to spam you!</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Logos Block
    ================================================== -->
    @include('theme.includes.logo-block')
    <!-- Seperator Line
    ================================================== -->
    @include('theme.includes.seperator-line')
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

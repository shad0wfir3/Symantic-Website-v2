@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design - About Us" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/services/design-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','Contact Us')

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('img/parallax-pages-1.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>About Symantic Creative</h2>
                        <div class="main-subtitle-bottom mt-4">Established in 2016, We have made it our mission to provide businesses with the tools they need to succeed.</div>
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

    <div class="section padding-top-bottom background-white over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-lg-4">
                    <div class="services-box-3 bigger-icon">
                        <h5><i class="funky-ui-icon icon-Monitor-phone"></i>Professional Service</h5>
                        <p class="mt-3">We provide a professional service to all our clients, big and small, and will guarantee satisfaction.</p>
                    </div>
                    <div class="services-box-3 bigger-icon mt-4 mt-lg-5" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                        <h5><i class="funky-ui-icon icon-User"></i>Dedicated Support</h5>
                        <p class="mt-3">Our staff and employees will guide you through all the steps and provide you with quality support 24/7</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box-3 bigger-icon">
                        <h5><i class="funky-ui-icon icon-Duplicate-Window"></i>Quality Products</h5>
                        <p class="mt-3">All of our services and products are professionally created and extensively tested for your satisfaction.</p>
                    </div>
                    <div class="services-box-3 bigger-icon mt-4 mt-lg-5" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                        <h5><i class="funky-ui-icon icon-Support"></i>Expert Advice</h5>
                        <p class="mt-3">Our expert staff provide you, our client, with the best advice and resources for any situation.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="call-box-5">
                        <h4>Truly focused on growth!</h4>
                        <p class="mt-3 mb-5">At Symantic Creative we are truly focused on the growth of your business. We have created a all-encompassing packaged solution to take your business to the next stage.</p>
                        <a href="#" class="btn-link btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials & Facts Block
    ================================================== -->

    <div class="section padding-top-bottom">
        <div class="parallax-1" style="background-image: url('img/parallax-5.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="testimonials-1-slider-wrap">
                        <div class="customNavigation">
                            <a class="prev-testimonials-1"><i class="fa fa-angle-left"></i></a>
                            <a class="next-testimonials-1"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="owl-testimonials-1" class="owl-carousel owl-theme">
                            @foreach($quotes as $quote)
                                <div class="item">
                                    <div class="testimonials-box-2 text-center">
                                        <h5 class="mb-5 color-white">"{{ $quote->quote }}"</h5>
                                        <h4 class="color-white">{{ $quote->author }}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12 padding-top-bottom-small">
                    <div class="separator-wrap">
                        <span class="separator"><span class="separator-line dashed opacity-40"></span></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-wrap dark">
                        <p><span class="counter-numb small-2">40819</span></p>
                        <h6>lines of code</h6>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="counter-wrap dark">
                        <p><span class="counter-numb small-2">307</span></p>
                        <h6>coups of coffee</h6>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="counter-wrap dark">
                        <p><span class="counter-numb small-2">5820</span></p>
                        <h6>hours</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call To Action Block
    ================================================== -->

    <div class="section padding-top-bottom-smaller background-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left dark">
                        <h5 class="mb-3 color-white">Discover Small Business Development Services (SBDS) &trade;</h5>
                        <p class="mb-0">SBDS is the ultimate solution for Start-Ups and Small Businesses<br>Find out how we can help you.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="portfolio-masonry-3col.html" class="btn btn-primary btn-simple btn-round btn-long mt-0 mt-md-4" >discover SBDS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Block
    ================================================== -->

    {{--<div class="section padding-top-bottom background-grey over-hide z-bigger-2">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="team-slider-wrap">--}}
                    {{--<div id="owl-team-1" class="owl-carousel owl-theme">--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img src="img/t4.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Marco Kulis</h6>--}}
                                {{--<p class="mb-4">app & media</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t1.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Anna Furius</h6>--}}
                                {{--<p class="mb-4">identity building</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="facebook">--}}
                                        {{--<a href="#">Fb</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t2.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Alex Andrews</h6>--}}
                                {{--<p class="mb-4">design process</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t3.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Frank Furius</h6>--}}
                                {{--<p class="mb-4">web development</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="facebook">--}}
                                        {{--<a href="#">Fb</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t4.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Marco Kulis</h6>--}}
                                {{--<p class="mb-4">app & media</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t1.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Anna Furius</h6>--}}
                                {{--<p class="mb-4">identity building</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="facebook">--}}
                                        {{--<a href="#">Fb</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t2.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Alex Andrews</h6>--}}
                                {{--<p class="mb-4">design process</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="facebook">--}}
                                        {{--<a href="#">Fb</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t3.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Frank Furius</h6>--}}
                                {{--<p class="mb-4">web development</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="facebook">--}}
                                        {{--<a href="#">Fb</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="team-box-1 all-padding background-white drop-shadow text-center">--}}
                                {{--<img  src="img/t4.jpg" alt="" />--}}
                                {{--<h6 class="mt-4 mb-1">Marco Kulis</h6>--}}
                                {{--<p class="mb-4">app & media</p>--}}
                                {{--<ul class="team-social">--}}
                                    {{--<li class="twitter">--}}
                                        {{--<a href="#">Tw</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="google">--}}
                                        {{--<a href="#">G+</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="vimeo">--}}
                                        {{--<a href="#">Vm</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@include('includes.logo-block')
    @include('includes.seperator-line')
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/custom/custom-about-company.js')}}"></script>
@endpush

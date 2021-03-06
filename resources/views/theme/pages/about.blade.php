@extends('theme.layouts.site')
@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design - About Us" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/about-us-header.jpg') }}" />
    <meta property="og:description" content="Professional, quality, dedicated and expert services to grow your business" />
@endsection
@section('title','About Us')
@section('slider')
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/about-us-header.jpg') }}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h1 class="text-white">Get to know us!</h1>
                        <div class="main-subtitle-bottom mt-4">Established in 2016, We have made it our mission to provide businesses with the tools they need to succeed.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="section padding-top-bottom background-white over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-lg-4">
                    <div class="services-box-3 bigger-icon">
                        <h5><i class="funky-ui-icon icon-Monitor-phone"></i>Professional Service</h5>
                        <p class="mt-3">We provide a professional service to all our clients, big and small, and will guarantee satisfaction.</p>
                    </div>
                    <div class="services-box-3 bigger-icon mt-4 mt-lg-5">
                        <h5><i class="funky-ui-icon icon-User"></i>Dedicated Support</h5>
                        <p class="mt-3">Our staff and employees will guide you through all the steps and provide you with quality support 24/7</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box-3 bigger-icon">
                        <h5><i class="funky-ui-icon icon-Duplicate-Window"></i>Quality Products</h5>
                        <p class="mt-3">All of our services and products are professionally created and extensively tested for your satisfaction.</p>
                    </div>
                    <div class="services-box-3 bigger-icon mt-4 mt-lg-5">
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

    <!-- Half Blocks Grid
	================================================== -->

    <div class="section background-white over-hide">
        <div class="container-fluid m-0 p-0 background-white">
            <div class="row">
                <div class="col-lg-6 row-in background-image-cover padding-top-bottom" style="background-image: url({{ asset('img/about_2.jpg') }})">
                    <div class="grey-fade-over"></div>
                    <div class="section align-self-center text-left padding-on-grid-12 z-bigger">
                        <div class="testimonials-1-slider-wrap">
                            <div class="customNavigation">
                                <a class="prev-testimonials-1"><i class="fa fa-angle-left"></i></a>
                                <a class="next-testimonials-1"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div id="owl-testimonials-1" class="owl-carousel owl-theme">
                                @foreach($quotes as $quote)
                                    <div class="item">
                                        <div class="testimonials-box-1 background-on-dark dark">
                                            <img  src="img/t1.jpg" alt="" />
                                            <p class="mt-4 mb-5">{{ $quote->quote }}</p>
                                            <h6>{{ $quote->author }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 row-in padding-top-bottom">
                    <div class="section align-self-center text-left padding-on-grid-12">
                        <div class="counter-wrap ver-3">
                            <p><span class="counter-numb small-2">174.819</span></p>
                            <h6>ACTIVE TRAFFIC</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="section padding-top-bottom">--}}
        {{--<div class="parallax-1" style="background-image: url('img/parallax-5.jpg')"></div>--}}
        {{--<div class="parallax-1" style="background-image: url('{{ asset('img/about_page.jpg') }}')"></div>--}}
        {{--<div class="grey-fade-over"></div>--}}
        {{--<div class="container z-bigger">--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-md-11">--}}
                    {{--<div class="testimonials-1-slider-wrap">--}}
                        {{--<div class="customNavigation">--}}
                            {{--<a class="prev-testimonials-1"><i class="fa fa-angle-left"></i></a>--}}
                            {{--<a class="next-testimonials-1"><i class="fa fa-angle-right"></i></a>--}}
                        {{--</div>--}}
                        {{--<div id="owl-testimonials-1" class="owl-carousel owl-theme">--}}
                            {{--@foreach($quotes as $quote)--}}
                                {{--<div class="item">--}}
                                    {{--<div class="testimonials-box-2 text-center">--}}
                                        {{--<h5 class="mb-5 color-white">"{{ $quote->quote }}"</h5>--}}
                                        {{--<h4 class="color-white">{{ $quote->author }}</h4>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    <!-- Counter Block
	================================================== -->

    <div class="section padding-top-bottom-small background-dark over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-wrap ver-2 dark">
                        <p><span class="counter-numb small-2">151.28</span></p>
                        <h6>conversions</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="counter-wrap ver-2 dark">
                        <p><span class="counter-numb small-2">61</span></p>
                        <h6>projects</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="counter-wrap ver-2 dark">
                        <p><span class="counter-numb small-2">1246</span></p>
                        <h6>coffees</h6>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="counter-wrap ver-2 dark">
                        <p><span class="counter-numb small-2">42</span></p>
                        <h6>campaigns</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('theme.includes.sbds-cta',[
   "title" => 'Discover Symantic Business Development Services (SBDS)&trade;',
   "text" => "Not sure where to start? Why not have a look at our packaged solutions? SBDS is the ultimate solution for your startup or small bushiness's marketing needs. <strong>Affordable</strong> and <strong>Professional</strong>.",
   'button_text' => 'discover SBDS&trade;',
   'url_route' => 'theme.services.sbds'
   ])
    @include('theme.includes.logo-block')
    @include('theme.includes.seperator-line')
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/custom/custom-about-company.js')}}"></script>
@endpush

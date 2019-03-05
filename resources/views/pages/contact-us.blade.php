@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/services/design-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','Contact Us')

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{asset('img/contact-us.jpg')}}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h1 class="text-white">Read to work with us?</h1>
                        <div class="main-subtitle-bottom mt-4">Call us, email us, whatsapp us, or send smoke signals. Whatever works for you, but get in touch and let us help you grow! </div>
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

    <div class="section background-white padding-top-bottom-small over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Phone-2"></i>
                        <a href="tel:0838223872" class="btn-link"><h5 class="mt-3 pb-0 mb-0">+27 (0)73 132 9076</h5></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Smartphone-4"></i>
                        <h5 class="mt-3 pb-0 mb-0">+27 (0)83 822 3872</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Mail-Open"></i>
                        <h5 class="mt-3 pb-0 mb-0">hello@symanticreative.com</h5>
                    </div>
                </div>
            </div>
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


            <div class="row">
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Facebook"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">Facebook</h6>
                        </a>

                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Instagram"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">Instagram</h6>
                        </a>

                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Twitter"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">Twitter</h6>
                        </a>

                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Google-Plus"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">Google+</h6>
                        </a>

                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Linkedin"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">LinkedIN</h6>
                        </a>

                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="services-box-1 p-0 text-center">
                        <a href="#">
                            <i class="funky-ui-icon icon-Youtube"></i>
                            <h6 class="mt-3 pb-0 mb-0 main-subtitle-bottom">Youtube</h6>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


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



    <!-- Block
    ================================================== -->

    <div class="section background-white padding-top-bottom-smaller over-hide z-bigger-2">
        <div class="main-title text-center">
            <h3>Send us a message and we will get back to you!</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="subscribe-box-1">
                        <input type="text" value="" placeholder="Your Name *" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="subscribe-box-1">
                        <input type="text" value="" placeholder="Email *" class="form-control" />
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-8 mt-4">
                    <div class="subscribe-box-1">
                        <textarea name="message"  placeholder="Tell Us Everything *" class="for-textarea form-control" ></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <div class="checkbox primary line-icon on-light">
                        <input id="checkboxForm" type="checkbox">
                        <label for="checkboxForm">
                            I'm not a robot
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <button class="btn btn-primary btn-round btn-long" type="button">submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Separator Line
    ================================================== -->



    <!-- Block
    ================================================== -->



    <!-- Google Map Block
    ================================================== -->

    <div class="section over-hide">
        <div id="cd-google-map">
            <div id="google-container"></div>
            <div id="cd-zoom-in"></div>
            <div id="cd-zoom-out"></div>
        </div>
    </div>

@endsection
@push('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWOda6UIX6b_ixVAyOyQHcg-zhrc8zMaI"></script>
    <script type="text/javascript" src="{{asset('js/custom/custom-contact-simple.js')}}"></script>
@endpush

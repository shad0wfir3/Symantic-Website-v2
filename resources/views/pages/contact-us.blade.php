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
        <div class="parallax" style="background-image: url('img/parallax-hero-4.jpg')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-center mb-0">
                        <h2>Get in Touch</h2>
                        <div class="main-subtitle-bottom mt-4">find out more, or just say hello</div>
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


    <!-- Block
    ================================================== -->

    <div class="section background-white padding-top-bottom over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-box-1">
                        <input type="text" value="" placeholder="Your Name *" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="subscribe-box-1">
                        <input type="text" value="" placeholder="Email *" class="form-control" />
                    </div>
                </div>
                <div class="col-md-12 mt-4">
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

    <div class="section background-white padding-top-bottom-small over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Phone-2"></i>
                        <h5 class="mt-3 pb-0 mb-0">+1 62 254 2722</h5>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Smartphone-4"></i>
                        <h5 class="mt-3 pb-0 mb-0">+1 425 424 8643</h5>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 p-0 text-center">
                        <i class="funky-ui-icon icon-Mail-Open"></i>
                        <h5 class="mt-3 pb-0 mb-0">info@funky.com</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

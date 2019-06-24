@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Website Design and Development | Symantic Creative " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title')
    Website Design & Development
@endsection

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/services/web-development/image_2.jpg') }}')"></div>
        <div class="dark-fade-over "></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>Website Design & Development</h2>
                        <div class="main-subtitle-bottom mt-2">Complete digital property adn asset conceptualisation, design and development. </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <!-- Text Block
    ================================================= -->
    <div class="section padding-top-bottom-small  over-hide on-dark" id="scroll-top">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="">Increasing your business through technology</h3>
                    <p class="mt-3 mb-0">
                        Static, Advertising and Digital commerce solutions for your business
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class=" mb-0 lead a">Technology is at the helm of our business, so its safe to say we do it right. At Symantic Creative we use the latest
                        technologies and trends to provide you with expert products and services when it comes to the digital space. Our team of expert developers and
                        designers will provide you with professional websites, digital assets and e-commerce systems, allowing you to focus on what you are good at,
                        running your business.
                    </p>

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
                        <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                        <p>&nbsp;</p><h4 class="text-center text-uppercase">Offers</h4><p>&nbsp;</p>
                        <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-small padding-bottom-small background-white over-hide">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">WD.</div>
                        <h5 class="mt-3">Website Development</h5>
                        <p class="mt-3 mb-4">Our professional website development services cater to the development and design of unique and professional website of any size.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">TC.</div>
                        <h5 class="mt-3">Template Conversion</h5>
                        <p class="mt-3 mb-4">We offer a comprehensive template conversion service, allowing you to easily customise and update your website to suit your style.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">ND.</div>
                        <h5 class="mt-3">Newsletter Development</h5>
                        <p class="mt-3 mb-4">Engage with your consumers and customers by providing expertly designed and developed newsletters that grabs their attention.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">SP.</div>
                        <h5 class="mt-3">Single Page Applications</h5>
                        <p class="mt-3 mb-4">We provide a quick and efficient SPA service that allows you to quickly validate ideas or market products through semi-temporary SPA pages.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">ES.</div>
                        <h5 class="mt-3">E-Commerce Solutions</h5>
                        <p class="mt-3 mb-4">Our unique E-Commerce solutions services provide you with the digital platform and tools needed to sell products online safely and securely.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">IC.</div>
                        <h5 class="mt-3">Integration Services</h5>
                        <p class="mt-3 mb-4">Our integration services provides you with a wide range of integration products ranging from tracking to security for many digital platforms</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parallax Block
  ================================================== -->

    <div class="section padding-top-bottom over-hide">
        <div class="parallax-1" style="background-image: url({{ asset('img/services/web-development/header_1.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="main-title on-dark text-center">
                        <div class="main-subtitle-top mb-4">time to get started</div>
                        <h3>Request a quote below</h3>
                        <div class="main-subtitle-bottom mt-3">Technology at its best</div>
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
                        <i class="funky-ui-icon icon-Computer-Secure"></i>
                        <h5 class="mt-4 mb-3 color-white">Request a quote!</h5>
                        <p class="mb-5">Our affordable website design services and solutions is just the boost your business needs!</p>
                        <a href="{{route('theme.pages.request_quote')}}" class="btn btn-primary btn-simple btn-round btn-long" >request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('theme.includes.seperator-line')

@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

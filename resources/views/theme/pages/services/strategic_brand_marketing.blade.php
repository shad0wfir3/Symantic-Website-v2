@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative - Strategic Marketing Consulting" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title')
    Strategic Branding & Marketing
    @endsection

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/services/strategic-marketing/hero_1.jpg') }}')"></div>
        <div class="dark-fade-over "></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>Strategic Branding & Marketing</h2>
                        <div class="main-subtitle-bottom mt-2">Strategic impact analyses, brand awareness and road-mapping through qualified research and conceptualisation.</div>
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
    <div class="section padding-top-bottom over-hide on-dark background-grey-2" id="scroll-top">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="">Define your brand!</h3>
                    <p class="mt-3 mb-0">
                        Strategic market placement, research, and analyses.
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class=" mb-0 lead a">We provide a crucial part of building your business through perspective
                        driven marketing strategies and brand management that provides positivity in the minds of potential consumers
                        in order for them to become loyal customers and purchase your products or services.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Video & Call To Action Block
================================================== -->

    <div class="section padding-top-bottom background-dark-2 over-hide">
        <div class="container">
            <div class="row">
                <div class="clear"></div>
                <div class="col-lg-8 mt-lg-5 mt-xl-0">
                    <div class="video-section">
                        <figure class="youtube rounded-2 img-raised over-hide">
                            <a href="https://www.youtube.com/embed/7HpULxbZ874">
                                <img src="{{ asset('img/services/strategic-marketing/video_placeholder.jpg') }}" alt="image"  class="rounded-2 over-hide"/>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0 mt-xl-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                    <div class="call-box-5 dark">
                        <h1 class="color-white">
                            EFFECTIVE.
                            <hr class="separator-line">
                            BRAND.
                            <hr class="separator-line">
                            MARKETING.
                            <hr></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-small padding-bottom-small over-hide">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">SC.</div>
                        <h5 class="mt-3">Strategic Consulting</h5>
                        <p class="mt-3 mb-4">Our strategic consultation services defines your marketing needs and provides you with an expert and professional roadmap/plan to increase ROI and grow your business.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">BA.</div>
                        <h5 class="mt-3">Brand Awareness</h5>
                        <p class="mt-3 mb-4">Through engaging campaigns and ongoing analyses,we provide a current and continuous representation of your brand awareness in the real world.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">CD.</div>
                        <h5 class="mt-3">Campaign Development</h5>
                        <p class="mt-3 mb-4">Our campaign development services results in unique, targeted and successfull professionally designed campaigns and programs to achieve you goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">PT.</div>
                        <h5 class="mt-3">Prototyping</h5>
                        <p class="mt-3 mb-4">Our low-cost prototyping speciality services allows you to define and execute an idea, plan or campaign at minimal cost with maximum feedback.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">MR.</div>
                        <h5 class="mt-3">Market Research</h5>
                        <p class="mt-3 mb-4">By using our market research services with your next project, we provide comprehensive reports on current advertising trends and market fluctuations.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">VA.</div>
                        <h5 class="mt-3">Viability Assesments</h5>
                        <p class="mt-3 mb-4">Our ongoing viability assessment service provides you with a continuous stream of data through reports and updates, allowing you to make the right desisions. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Parallax Block
	================================================== -->
    <div class="section padding-top-small padding-bottom-1st over-hide">
        <div class="parallax-1" style="background-image: url({{ asset('img/services/strategic_marketing_cta.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title on-dark text-left">
                        <div class="main-subtitle-top mb-4">Digital Marketing</div>
                        <h4>Industry leading experts in <br> strategic marketing</h4>
                            <div class="main-subtitle-bottom smaller mt-3">strategic initiatives in<br>brand marketing and thought analyses</div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-4" id="progress">
                    <div class="progress-container">
                        <span class="progress-badge dark">Research</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                <span class="progress-value"><span class="counter">87</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Analyse</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Plan</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">93</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Execute</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">93</span>%</span>
                            </div>
                        </div>
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
                        <p class="mb-5">Our strategic branding and marketing services are the perfect starting point for your next project</p>
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

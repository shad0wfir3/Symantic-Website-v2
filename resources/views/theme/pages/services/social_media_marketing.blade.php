@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Social Media Marketing | Symantic Creative" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title','Social Media Marketing')


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
                        <h2>Social Media Marketing</h2>
                        <div class="main-subtitle-bottom mt-2">Strategic impact analyses, brand awareness and road-mapping through qualified research.</div>
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
                    <h3 class="">Quantify your brand and increase conversion.</h3>
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
        <div class="parallax-1" style="background-image: url({{ asset('img/services/graphic-design/cta_1.jpg') }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title on-dark text-left">
                        <div class="main-subtitle-top mb-4">Graphic Design</div>
                        <h4>Professional and affordable graphic design suited for any project and business.</h4>
                        <div class="main-subtitle-bottom smaller mt-3">a unique approach to design.</div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-4" id="progress">
                    <div class="progress-container">
                        <span class="progress-badge dark">Research</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                                <span class="progress-value"><span class="counter">94</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Prototype</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Design</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">100</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container mt-4">
                        <span class="progress-badge dark">Release</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                <span class="progress-value"><span class="counter">98</span>%</span>
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

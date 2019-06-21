@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative - Strategic Marketing Consulting" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Description here" />
@endsection

@section('title')
    Graphic Design
    @endsection

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/services/graphic-design/header_2.jpg') }}')"></div>
        <div class="dark-fade-over "></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2>Graphic Design</h2>
                        <div class="main-subtitle-bottom mt-2">Professional design at affordable rates.</div>
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
                    <h3 class="">Logo? Business Cards? Banners?</h3>
                    <p class="mt-3 mb-0">
                        Graphic Design for digital and print.
                    </p>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <p class=" mb-0 lead a">Branding, marketing and advertisement rely heavily on design elements that influence prospective consumers and customers
                        in a positive manner. Our design process is expertly crafted and professionally executed to provide you with the ultimate products. If you need
                        a new logo, corporate branding or just want to consolidate or revamp your company image, look no further than Symantic Creative for your digital needs.
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
                        <div class="separator-wrap">
                            <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                            <p>&nbsp;</p><h4 class="text-center text-uppercase">Offers</h4><p>&nbsp;</p>
                            <span class="separator"><span class="separator-line primary-color med dashed"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block
    ================================================== -->

    <div class="section padding-top-bottom-small background-white over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">CI.</div>
                        <h5 class="mt-3">Corporate Identity</h5>
                        <p class="mt-3 mb-4">Logos, business cards, stationary, folders, brand books, etc. for a professional company identity profile. </p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">UX.</div>
                        <h5 class="mt-3">User Experience</h5>
                        <p class="mt-3 mb-4">Driven design for Websites, CI, Onboarding, Campaigns, etc. through guided outcomes.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">ES.</div>
                        <h5 class="mt-3">Email Signatures</h5>
                        <p class="mt-3 mb-4">Email signature design that contributes to professionalism and increases your trust factor </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">SM.</div>
                        <h5 class="mt-3">Social Media Design</h5>
                        <p class="mt-3 mb-4">Banners, Profile imagery, Posts and engagement design elements that gives an authentic digital presence.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">PM.</div>
                        <h5 class="mt-3">Printed Media</h5>
                        <p class="mt-3 mb-4">Brochures, Flyer, Banners, Posters, etc. designed print ready for all your adevertising needs.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="services-box-1 border-on-light text-center mb-4">
                        <div class="big-text-in color-primary">BD.</div>
                        <h5 class="mt-3">Brand Design</h5>
                        <p class="mt-3 mb-4">Clothing, Packaging, Bags, CD covers and Vinyl branding design for every day use.</p>
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
                        <h4>Printed, Digital, Social, UX.<br> Graphic design for any project.</h4>
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
                        <i class="funky-ui-icon icon-Digital-Drawing"></i>
                        <h5 class="mt-4 mb-3 color-white">Request a quote!</h5>
                        <p class="mb-5">Interested in a rebrand, new logo, business card or online grapics? Look no further, request a quote below.</p>
                        <a href="{{route('theme.pages.request_quote')}}" class="btn btn-primary btn-simple btn-round btn-long" >request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

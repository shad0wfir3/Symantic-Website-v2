@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design - About Us" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/portfolio-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','Contact Us')

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/portfolio-header.jpg') }}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h1 class="text-white ">Specialized in brand experience.</h1>
                        <div class="main-subtitle-bottom on-light mt-4">Some people think design means how it looks. But of course, if you dig deeper, it's really how it works.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    @endsection
@section('content')

    <!-- Portfolio Block
	================================================== -->

    <div class="section padding-top-bottom background-white z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="grid-filter">
                        <ul class="filter">
                            <li><a href="#" class="current" data-filter="*" title="">all</a></li>
                            <li><a href="#" data-filter=".branding" title="">branding</a></li>
                            <li><a href="#" data-filter=".websites" title="">websites</a></li>
                            <li><a href="#" data-filter=".social" title="">social media</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="grid-wraper clearfix">
                    <div class="grid-box float-inline third with-margin photo motion">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/1.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin photo motion">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/2.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin branding">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/3.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin motion">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/4.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin branding photo">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/5.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin photo">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/6.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin branding">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/7.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin motion">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/8.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin branding">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/11.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                    <div class="grid-box float-inline third with-margin photo">
                        <a href="project-image.html">
                            <div class="portfolio-box-1 rounded">
                                <img  src="img/portfolio/masonry/10.jpg" alt="" />
                                <div class="portfolio-mask-3 rounded"></div>
                                <h5 class="on-center text-center">serve people</h5>
                                <p class="on-center text-center">design, motion</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quotes Block
    ================================================== -->

    <div class="section padding-bottom background-white">
        <div class="container">
            <div class="row justify-content-center" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
                <div class="col-md-8">
                    <div class="quote-box-1 text-center">
                        <h5 class="mb-5">"Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people."</h5>
                        <h4>Thomas J. Watson</h4>
                        <p class="mt-2">some magazine</p>
                    </div>
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
    @include('theme.includes.logo-block')
    @include('theme.includes.seperator-line')
@endsection
@push('scripts')
    {{--<script type="text/javascript" src="{{asset('js/custom/custom-about-company.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/custom/custom-portfolio-masonry-3col-full.js')}}"></script>
@endpush

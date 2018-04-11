@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="{{"Symantic Creative - ". $service->name }}" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $featured_img['src'] }}" />
    <meta property="og:description" content="{{ $service->short_description }}" />
@endsection

@section('title')
    {{ $service->name }}
    @endsection

@section('slider')
    <!-- Hero Block
    ================================================== -->
    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url({{ $featured_img['src'] }})"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h2><mark>{{ $service->name }}</mark></h2></h2>
                        <div class="main-subtitle-bottom mt-4">{{ $service->short_description }}</div>
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



    <!-- Call To Action Block
    ================================================== -->

    @if($service->request_type == 'quote')
        @include('includes.quote_cta')
    @else
        @include('includes.contact_cta')
    @endif

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

    <!-- Icons Block
	================================================== -->

    <div class="section padding-top-bottom-small background-white over-hide">
        <div class="container">
            <div class="row">

                @foreach($service->breakdown_services['services'] as $sub_service)
                    <div class="col-md col-sm col-lg mt-1">
                        <div class="services-box-2 service-scroll text-center">
                            <i class="funky-ui-icon {{ $sub_service['icon'] }}"></i>
                            <p class="mt-3">{{ ucwords($sub_service['name']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Half Blocks Grid  ---UX---
    ================================================== -->

    <div id="user-experience" class="section background-grey over-hide scroll">
        <div class="container-fluid m-0 p-0 background-grey">
            <div class="row">
                <div class="col-md-6 align-items-stretch background-image-cover padding-top-bottom" style="background-image: url({{ $page_img['src'] }})">
                </div>
                <div class="col-md-6 align-items-stretch padding-top-bottom">
                    <div class="section justify-content-center text-left padding-on-grid-12">

                        {!! $service->content !!}

                        {{--<div class="main-title">--}}
                            {{--<div class="main-subtitle-top mb-4">Brand Marketing & Strategy</div>--}}
                            {{--<h4>Activations and Branding Campaigns</h4>--}}
                            {{--<div class="main-subtitle-bottom smaller mt-3">Increase brand awareness.</div>--}}
                            {{--<p class="mt-3">--}}
                                {{--We provide a crucial part of building brand perspective through product samplings, in-store retail marketing, sponsorships, and experiential events by exploring ways for brands to reach potential customers that can shift perceptions and create a real emotional engagement.--}}
                            {{--</p>--}}
                            {{--<p>--}}
                                {{--This also encompasses figuring out a few core features that will distinguish your brand amongst your competition in crowded marketplaces. Finding brand positioning that will uncover assets and highlighting long term benefits to your business.</p>--}}
                            {{--</p>--}}

                            {{--<p>--}}
                                {{--These marketing events must bring up positive feeling in the minds of potential consumers in order for them to become loyal customers and purchase your products.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section padding-top-bottom-smaller background-white background-primary-color z-bigger-2" id="scroll-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-box-3 text-center text-md-left on-dark">
                        <h5 class="mb-3 text-white">Want to work with us?</h5>
                        <p class="mb-0 text-white">If anything is unclear, or you just want to say hello, why not get in touch.
                            <br> We provide obligation free quotes and would love to talk to you about your next project.</p>
                    </div>
                </div>
                {{--TODO: Update link to quote/onboarding page--}}
                <div class="col-md-3 mt-4 mt-md-0">
                    <div class="call-box-3 text-center text-md-right">
                        <a href="{{ route('contact_us') }}" class="btn background-dark text-white  mt-0 mt-md-4" >Contact Us!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

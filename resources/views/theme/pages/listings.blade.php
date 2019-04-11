@extends('layouts.site')
@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design - About Us" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/about-us-header.jpg') }}" />
    <meta property="og:description" content="Professional, quality, dedicated and expert services to grow your business" />
@endsection
@section('title','About Us')
@section('slider')
    <div class="section padding-top-1st padding-bottom-smaller over-hide">
        <div class="container z-bigger">
            <div class="row">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-left mb-0">
                        <h1 class="">Terms & Conditions</h1>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Block
	================================================== -->

    <div class="section padding-bottom over-hide z-bigger-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    career listings
                </div>
            </div>
        </div>
    </div>
    @include('theme.includes.seperator-line')
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/custom/custom-about-company.js')}}"></script>
@endpush

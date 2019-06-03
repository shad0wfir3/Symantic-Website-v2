@extends('theme.layouts.site')
@section('title','Page not Found')
@section('content')
    <!-- Primary Page Layout
================================================== -->

    <!-- Hero Block
    ================================================== -->

    <div class="section full-height over-hide on-dark">
        <div class="parallax" style="background-image: url( {{ asset('img/about-us-header.jpg')}} )"></div>
        <div class="grey-fade-over"></div>
        <div class="hero-center-wrap z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 error-page text-center parallax-fade-top on-dark">
                        <h1>404</h1>
                        <p class="mt-3 mb-5 color-white">The page you were looking for was not found.</p>
                        <a href="{{ route('theme.pages.index') }}" class="btn-link btn-primary mt-5"><i
                                    class="fa fa-long-arrow-left mr-2"></i> go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-corporate.js') }}"></script>
@endpush

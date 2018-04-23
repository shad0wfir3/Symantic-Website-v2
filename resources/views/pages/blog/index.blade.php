@extends('layouts.site')

@section('open_graph')
    <meta property="og:title" content="Symantic Creative Design" />
    <meta property="og:type" content="page" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/services/design-header.jpg') }}" />
    <meta property="og:description" content="Symantic Creative offers ux, digital and print design solutions for all your business needs" />
@endsection

@section('title','Graphic Design Solutions')

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ asset('img/blog/blog_header.jpg') }}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-center mb-0">
                        <h2>Our Blog</h2>
                        <div class="main-subtitle-bottom mt-4">Find out what makes us tick!</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

@endsection
@section('content')

    <div class="section padding-top background-grey over-hide">
        <div class="container-fluid">
            <div class="row">
                <div class="grid-wraper with-margin clearfix">
                    <?php
                        $count = 0;
                    ?>
                    @foreach($posts as $post)
                        @php($count++)
                        @if($posts->count() % $count)
                            <div class="grid-box float-inline quarter with-margin drop-shadow rounded">
                                <div class="blog-box-1 blog-home background-dark over-hide">
                                    <div class="blog-quote-wrap">
                                        <p class="mb-5">"Good buildings come from good people, and all problems are solved by good design."</p>
                                        <h5>Stephen Gardiner</h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    <div class="grid-box float-inline quarter with-margin drop-shadow rounded">
                        <div class="blog-box-1 blog-home background-white over-hide">
                            <img src="{{ get_cl_img($post->featured_img) }}" alt="" class="blog-home-img"/>
                            <div class="padding-in">
                                <a href="{{ route('blog.post',$post->slug) }}"><h5 class="pt-4 mt-3">{{ $post->title }}</h5></a>
                                <p class="mt-3">{{$post->excerpt}}</p>
                                <a href="{{ route('blog.post',$post->slug) }}" class="btn-link btn-primary pl-0 mt-4">read more</a>
                                <div class="separator-wrap pt-4">
                                    <span class="separator"><span class="separator-line"></span></span>
                                </div>
                                <div class="author-wrap mt-5">
                                    <p> by <a href="#">{{ $post->author->name }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Nex Prev Block
    ================================================== -->
    {{ $posts->links('vendor.pagination.simple-default') }}
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/custom/custom-blog-masonry.js') }}"></script>
@endpush

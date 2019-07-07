@extends('theme.layouts.site')

@section('open_graph')
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ get_cl_img($post->featured_img) }}" />
    <meta property="og:description" content="{{ $post->excerpt }}" />
@endsection

@section('title', $post->title )

@section('slider')
    <!-- Hero Block
    ================================================== -->

    <div class="section padding-top-1st padding-bottom-1st over-hide">
        <div class="parallax" style="background-image: url('{{ storage_image($post->featured_img) }}')"></div>
        <div class="grey-fade-over"></div>
        <div class="container z-bigger">
            <div class="row justify-content-center">
                <div class="col-md-7 parallax-fade-top">
                    <div class="main-title on-dark text-center mb-0">
                        <h2>{{ ucwords($post->title) }}</h2>
                        <div class="main-subtitle-bottom mt-4">{{ presentable_date($post->published_date) }}</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

@endsection
@section('content')

    <div class="section padding-top background-grey over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section drop-shadow rounded">
                        <div class="blog-box-1 blog-home background-white over-hide">
                            <div class="padding-in">
                                <div class="main_post_content">
                                   @markdown($post->content)
                                </div>

                                <div class="clear"></div>
                                <div class="separator-wrap pt-4 pb-4">
                                    <span class="separator"><span class="separator-line dashed"></span></span>
                                </div>
                                <div class="clear"></div>
                                @foreach($post->tags as $tag)
                                    <a href="{{ route('theme.blog.tags',$tag->slug) }}" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">{{ $tag->title }}</a>
                                @endforeach
                                <div class="clear"></div>
                                <div class="separator-wrap pt-4 pb-4">
                                    <span class="separator"><span class="separator-line dashed"></span></span>
                                </div>
                                <div class="clear"></div>
                                <div class="section clearfix">
                                    <ul class="post-social">
                                        <li>
                                            <strong>Share:</strong>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">Tw</a>
                                        </li>
                                        <li class="facebook">
                                            <a href="#">Fb</a>
                                        </li>
                                        <li class="google">
                                            <a href="#">G+</a>
                                        </li>
                                        <li class="vimeo">
                                            <a href="#">Vm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section drop-shadow rounded mt-4 mb-5">
                        <div class="post-comm-box background-white over-hide">
                            <div id="disqus_thread"></div>
                            <script>
                                var disqus_config = function () {
                                this.page.url = "{{ url()->current() }}";  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = "{{ $post->slug }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };

                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://symanticreative.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-box background-white drop-shadow rounded">
                        <h6 class="mb-3">Categories</h6>
                        <ul class="list-style circle pl-4 pb-0">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('theme.blog.categories',$category->slug) }}" class="btn-link btn-primary pl-0">{{ $category->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                        <div class="separator-wrap my-5">
                            <span class="separator"><span class="separator-line dashed"></span></span>
                        </div>
                        <div class="clear"></div>
                        <h6 class="mb-3">Text Widget</h6>
                        <p class="pb-0">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
                        <div class="clear"></div>
                        <div class="separator-wrap my-5">
                            <span class="separator"><span class="separator-line dashed"></span></span>
                        </div>
                        <div class="clear"></div>
                        <h6 class="mb-3">Latest Posts</h6>
                        <ul class="list-style circle-o pl-4 pb-0">
                            @foreach($latest_posts as $latest_post)
                            <li>
                                <a href="{{ route('theme.blog.post',$latest_post->slug) }}" class="btn-link btn-primary pl-0">{{ $latest_post->title }}</a>
                            </li>
                            @endforeach()
                        </ul>
                        <div class="clear"></div>
                        <div class="separator-wrap my-5">
                            <span class="separator"><span class="separator-line dashed"></span></span>
                        </div>
                        <div class="clear"></div>
                        <h6 class="mb-3">Tags</h6>
                        @foreach($tags as $tag)
                        <a href="{{ route('theme.blog.tags',$tag->slug) }}" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">{{$tag->title}}</a>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 mt-5">
                {{--@foreach($related_posts as $related_post)--}}
                    {{--<div class="col-md-3">--}}
                        {{--<div class="blog-box-1 blog-home background-white over-hide rounded">--}}
                            {{--<img src="{{ get_cl_img($related_post->featured_img) }}" alt="" class="blog-home-img"/>--}}
                            {{--<div class="padding-in">--}}
                                {{--<a href="{{ route('blog.post',$related_post->slug) }}"><h5 class="pt-4 mt-3">{{ $related_post->title }}</h5></a>--}}
                                {{--<p class="mt-3">{{$related_post->excerpt}}</p>--}}
                                {{--<a href="{{ route('blog.post',$related_post->slug) }}" class="btn-link btn-primary pl-0 mt-4">read more</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            </div>
        </div>
    </div>

    <!-- Nex Prev Block
    ================================================== -->


@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/custom/custom-post.js')}}"></script>
    <script id="dsq-count-scr" src="//symanticreative.disqus.com/count.js" async></script>
    @endpush

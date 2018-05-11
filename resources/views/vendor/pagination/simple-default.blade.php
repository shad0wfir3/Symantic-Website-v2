@if ($paginator->hasPages())
    <div class="section padding-top-bottom background-grey over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        @if ($paginator->onFirstPage())
                            <a href="{{ $paginator->previousPageUrl() }}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.7s after 0.1s">latest<div class="text-on-hover">Newer Posts</div></div></a>
                        @else
                            <a href="{{ $paginator->previousPageUrl() }}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.7s after 0.1s">latest<div class="text-on-hover">Newer Posts</div></div></a>
                        @endif
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <a href="{{ $paginator->nextPageUrl() }}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.7s after 0.1s">older<div class="text-on-hover">older Posts</div></div></a>
                        @else
                                <a href="{{ $paginator->nextPageUrl() }}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.7s after 0.1s">older<div class="text-on-hover">older Posts</div></div></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif





@if ($paginator->hasPages())
    <div class="section padding-top-bottom background-grey over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        @if ($paginator->onFirstPage())
                            <div class="left-nav disabled" data-scroll-reveal="enter left move 60px over 0.7s after 0.1s">old<div class="text-on-hover">older entries</div></div>
                        @else
                            <a href="{{ $paginator->previousPageUrl() }}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.7s after 0.1s">old<div class="text-on-hover">older entries</div></div></a>
                        @endif
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <a href="{{ $paginator->nextPageUrl() }}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.7s after 0.1s">new<div class="text-on-hover">new entries</div></div></a>
                        @else

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif





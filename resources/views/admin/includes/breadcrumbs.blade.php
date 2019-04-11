<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">@yield('page_title')</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">
                        @if(!Route::is('admin.index'))
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.index')}}">Dashboard</a>
                        </li>
                        @endif
                        @for($i = 2; $i <= count(Request::segments()); $i++)
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                                    {{ucfirst(Request::segment($i))}}
                                </a>
                            </li>
                        @endfor
                    </ol>
                    {{--<ol class="breadcrumb">--}}
                        {{--<li class="breadcrumb-item">--}}
                            {{--<a href="#">Home</a>--}}
                        {{--</li>--}}
                        {{--<li class="breadcrumb-item active" aria-current="page">Library</li>--}}
                    {{--</ol>--}}
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

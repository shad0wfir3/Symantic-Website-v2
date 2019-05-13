<div class="section padding-top-bottom-smaller background-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="call-box-3 text-center text-md-left dark">
                    <h5 class="mb-3 color-white">{!! $title !!}</h5>
                    <p class="mb-0">{!! $text !!}</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="call-box-3 text-center text-md-right">
                    <a href="{{ route($url_route) }}" class="btn btn-primary btn-simple btn-round btn-long mt-0 mt-md-4" >{!! $button_text  !!}</a>
                </div>
            </div>
        </div>
    </div>
</div>

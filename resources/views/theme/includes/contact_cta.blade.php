<div class="section padding-top-bottom-smaller background-white z-bigger-2" id="scroll-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="call-box-3 text-center text-md-left">
                    <h5 class="mt-3">Need more information regarding our {{ strtolower($service->name) }} services</h5>
                    <p class="mb-0">Email us at hello@symantic.co.za or fill in our easy to use contact form.</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="call-box-3 text-center text-md-right">
                    <a href="{{ route('theme.pages.contact_us',$service->id) }}" class="btn btn-primary btn-long mt-0 mt-md-4" >contact us today!</a>
                </div>
            </div>
        </div>
    </div>
</div>

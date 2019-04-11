<div id="menu-wrap" class="cbp-af-header black-menu-background-1st-trans menu-fixed-padding menu-shadow

@if(Request::is('terms-and-conditions'))
        background-dark
        @endif


">
    <div class="container nav-top-bar">
        <div class="row">
            <div class="col-md-7">
                <p><i class="fa fa-clock-o mr-1"></i> mon - fri: 09.00 - 17.00
                    <i class="fa fa-phone ml-2 mr-1"></i> <a href="tel:+27838223872"> +27 (0)83 822 3872</a>
                    <a href="mailto:hello@symanticreative.com"><i class="fa fa-comment-o ml-2 mr-1"></i> hello@symanticreative.com</a>
                </p>
            </div>
            <div class="col-md-5">
                <ul class="nav-top-social">
                    <li class="twitter">
                        <a href="https://twitter.com/symanticreative" target="_blank">Tw</a>
                    </li>
                    <li class="facebook">
                        <a href="https://www.facebook.com/symanticreative/" target="_blank">Fb</a>
                    </li>
                    <li class="google">
                        <a href="http://google.com/+SymanticZa" target="_blank">G+</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse bg-faded nav-line-top">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavMenuMain" aria-controls="navbarNavMenuMain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand limit-logo" href="{{ route('theme.pages.index') }}">
                        <svg id="Layer_1" class="pull-left syman-logo-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.86 129.34"><title>slog</title><path id="_Path_" data-name="&lt;Path&gt;" d="M81.94,9.34a110.54,110.54,0,0,1,18.31,5.36c5.18,2,14.56,6.58,15.24,7.42.3.34-.73,2.6-3,6.78a48.92,48.92,0,0,1-3.9,6.29A44,44,0,0,1,103.67,33c-14.8-7.08-32.57-10.12-46-7.91C42.87,27.57,33.19,33.42,27,43.65A31.33,31.33,0,0,0,23.18,63.5c1.13,8.06,3.76,13.32,9.53,19.12,6.3,6.29,12.79,9,24.12,10.13,6,.54,13.68-.1,18.32-1.53,6.15-1.91,8-6.83,3.71-9.73-1.66-1.13-1.71-1.13-12.4-.79-11.73.35-14.9,0-20-2.06-7.42-3-12-10.22-12-18.87,0-9.19,4.4-15.73,13.44-20,13.77-6.44,36.09-5.06,51.52,3.1a56.3,56.3,0,0,1,15.29,11.45c6.4,6.88,9.92,13.86,11.33,22.71a47.8,47.8,0,0,1-1.8,23c-8.06,25-34.68,39.76-67.36,37.35-16.55-1.23-30.67-6-43.91-15-6.54-4.47-7.62-5.4-7-6.19,4.1-5.26,8.64-11.06,8.94-11.35s1.95.83,3.95,2.36a87.77,87.77,0,0,0,17.29,9.33,74.08,74.08,0,0,0,39.52,3.2c17.87-3.64,28.18-11.4,32.57-24.67a23.18,23.18,0,0,0,1.52-9c0-7.72-1.42-12.63-5.67-18.92C98.54,59,89.56,54.31,76.47,52.84c-6.16-.69-15.83-.3-19.39.78-4.89,1.48-7,4.72-5.33,8,1.42,2.71,1.86,2.81,15.68,2.81,10.89,0,13.09.14,15.39.93,6.93,2.31,11.67,6.24,13.77,11.5,1.52,3.83,1.56,12.34.1,16.07A22.07,22.07,0,0,1,88.34,103c-4.55,3-7.77,4.23-15,5.5-7.42,1.28-19.44,1-26.42-.54-15.09-3.34-26.77-11.45-34-23.79-5-8.5-6.26-12.87-6.6-22.95C5.94,50.43,7.5,44,12.78,35,16.15,29.2,24.94,20.55,30.7,17.3A85.19,85.19,0,0,1,55.47,8.9C60.89,8,76,8.26,81.94,9.34Z" transform="translate(-5.83 -8.34)" style="fill:#fff"/></svg>

                        <span class="text-logo symantic">
                            symantic
                        </span>
                        <span class="text-logo creative">
                            <span id="typed-1"></span>
                        </span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('theme.pages.index') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('theme.pages.about_us') }}">
                                    About
                                </a>
                            </li>
                            <li class="nav-item dropdown mega-menu {{ Request::is('services*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-mainNav-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-mainNav-1">
                                    <ul class="drop-mega-menu">
                                        <li>
                                            <a class="dropdown-header">Services</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.strategic_consulting') }}">Strategic Consulting</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.brand_analyses') }}">Brand Analyses</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.graphic_design') }}">Graphic Design </a>
                                            <a class="dropdown-item" href="{{ route('theme.services.website_design_development') }}">Website Design & Development</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.saas_enterprise_development') }}">SAAS & Enterprise Development</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.e_commerce_development') }}">E-Commerce Website Development</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.seo') }}">Search Engine Optimisation</a>
                                            <a class="dropdown-item" href="{{ route('theme.services.social_media_marketing') }}">Social Media Marketing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-header">Packages</a>
                                            <a href="{{ route('theme.services.sbds') }}" class="dropdown-item big_item">
                                                <strong>Symnatic BDS</strong><em>&trade;</em>
                                                <p>Symantic Creative BDS&trade; provides <strong>small businesses and start-ups</strong> with an integrated full stack solution to branding, marketing and advertising, packaged together to <strong>reduce cost</strong> and expenses.</p>

                                            </a>
                                            <a href="{{ route('theme.services.launch_it') }}" class="dropdown-item big_item">
                                                <strong>Launch-It</strong><em>&trade;</em>
                                                <p>Launch-IT&trade; is the ultimate solution for your next <strong>product or service</strong> launch. Through expert marketing campaigns & experiences, launch-it&trade; provides the <strong>ultimate platform</strong> for you to market your product.</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item {{ Request::is('our-work*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('theme.portfolio.index') }}">
                                    Our Work
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('theme.blog.index') }}">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item{{ Request::is('contact-us') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('theme.pages.contact_us') }}">
                                    Get in Touch
                                </a>
                            </li>

                            <li class="nav-item icons-item-menu modal-search">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#Modal-search"><i class="fa fa-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

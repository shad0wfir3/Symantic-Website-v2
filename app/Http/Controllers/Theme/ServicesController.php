<?php

namespace App\Http\Controllers\Theme;

use App\Service;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /*
     * Services index page
     * @return view()
     */
    public function index(){
        return view('pages.services.index');
    }

    /*
     * Single Service
     */
    public function single($slug){

        $service = Service::published()->where('slug',$slug)->firstorfail();

        $featured_img = [
            'src' => get_cl_img($service->featured_img),
            'alt' => $service->featured_img_alt
        ];

        $page_img = [
            'src' => get_cl_img($service->page_img),
            'alt' => $service->page_img_alt
        ];

        return view('theme.pages.services.single',compact('service','featured_img','page_img'));

    }



    public function strategic_brand_marketing(){
        return view('theme.pages.services.strategic_brand_marketing');
    }

    public function graphic_design(){
        return view('theme.pages.services.graphic_design');
    }

    public function website_design_development(){
        return view('theme.pages.services.website_design_development');
    }

    public function social_media_marketing(){
        return view('theme.pages.services.social_media_marketing');
    }

    public function search_engine_optimisation(){
        return view('theme.pages.services.search_engine_optimisation');
    }

    public function business_development(){
        return view('theme.pages.services.business_development');
    }

    public function saas_enterprise_development(){
            return view('theme.pages.services.saas_enterprise_development');
    }

    public function e_commerce_development(){
            return view('theme.pages.services.e_commerce_development');
    }

    public function sbds(){
        return view('theme.pages.sbds');
    }

    public function launch_it(){
        return view('pages.launch-it');
    }

}

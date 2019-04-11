<?php

namespace App\Http\Controllers\Theme;

use App\Service;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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

    public function sbds(){
        return view('pages.sbds');
    }

    public function launch_it(){
        return view('pages.launch-it');
    }
}

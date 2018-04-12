<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ServiceController extends Controller
{
    public function getPage($slug){

        $service = Service::published()->where('slug',$slug)->firstorfail();

        $featured_img = [
            'src' => get_cl_img($service->featured_img),
            'alt' => $service->featured_img_alt
        ];

        $page_img = [
            'src' => get_cl_img($service->page_img),
            'alt' => $service->page_img_alt
        ];

        return view('pages.service',compact('service','featured_img','page_img'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\Service;
use Illuminate\Http\Request;
use App\InspirationalQuotes;

class PagesController extends Controller
{
    public function index(){
        $services = Service::where('status','published')->get();
        $featured_posts = Post::featured()->with('author','tags')->get();
        return view('pages.home',compact('services','featured_posts'));
    }

    public function about(){
        $quotes = InspirationalQuotes::get()->random(7);
        return view('pages.about',compact('quotes'));
    }

    public function work(){
        $quote = InspirationalQuotes::get()->random(1);
        return view('pages.portfolio.index',compact('quote'));
    }

    public function contact_us(){
        return view('pages.contact-us');
    }


}

<?php

namespace App\Http\Controllers\Theme;

use App\Post;
use App\Service;
use Illuminate\Http\Request;
use App\InspirationalQuotes;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
        $services = Service::where('status','published')->get();
        $featured_posts = Post::featured()->with('author','tags')->get();
        return view('theme.pages.home',compact('services','featured_posts'));
    }

    public function about(){
        $quotes = InspirationalQuotes::get()->random(7);
        return view('theme.pages.about',compact('quotes'));
    }

    public function work(){
        $quote = InspirationalQuotes::get()->random(1);
        return view('theme.pages.portfolio.index',compact('quote'));
    }

    public function contact_us(){
        return view('theme.pages.contact-us');
    }

    public function terms_conditions(){
        return view('theme.pages.terms-conditions');
    }

    public function career_listings(){
        return 'career listing page';
    }


}
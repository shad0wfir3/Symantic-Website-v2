<?php

namespace App\Http\Controllers;

use App\Post;
use App\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = Service::where('status','published')->get();
        $featured_posts = Post::featured()->with('author','tags')->get();
        return view('pages.home',compact('services','featured_posts'));
    }

    //Services Pages End

    public function contact_us(){
        return view('pages.contact-us');
    }


}

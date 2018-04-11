<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = Service::where('status','published')->get();
        return view('pages.home',compact('services'));
    }

    //Services Pages End

    public function contact_us(){
        return view('pages.contact-us');
    }


}

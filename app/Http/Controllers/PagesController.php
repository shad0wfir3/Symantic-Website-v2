<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }


    //Services Pages Here

    public function branding(){
        return view('pages.branding');
    }

    public function design(){
        return view('pages.design');
    }

    public function e_commerce(){
        return view('pages.e-commerce');
    }

    public function development(){
        return view('pages.development');
    }

    public function operations(){
        return view('pages.operations');
    }

    public function strategic(){
        return view('pages.strategic');
    }

    //Services Pages End


}

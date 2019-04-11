<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function uploadImg(Request $request){
        dd($request->all());

        return response()->json(['success'=>'Images Uploaded Successfully.']);

    }
}

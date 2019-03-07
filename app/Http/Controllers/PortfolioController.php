<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $items = [
            'item 1',
            'item 2',
        ];
        return view('pages.portfolio.index',compact('items'));
    }
}

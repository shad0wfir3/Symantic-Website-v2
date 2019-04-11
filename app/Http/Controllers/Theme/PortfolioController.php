<?php

namespace App\Http\Controllers\Theme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index(){
        $items = [
            'item 1',
            'item 2',
        ];
        return view('theme.pages.portfolio.index',compact('items'));
    }
}

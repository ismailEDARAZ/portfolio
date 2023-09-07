<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        if(request()->cat && request()->cat != "all"){
            $portfolio = Portfolio::where('category_id', request()->cat)->latest()->get();
        }else{
            $portfolio = Portfolio::latest()->get();
        }

        return view('portfolio.index', compact('portfolio'));
    }
}
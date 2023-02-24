<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::latest()->take(6)->get();

        return view('index', compact('portfolio'));
    }
}

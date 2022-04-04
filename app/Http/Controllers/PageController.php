<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function product($product)
    {
        return view('pages', compact('product'));
    }

    public function contact()
    {

    }
}

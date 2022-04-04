<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $data = "data";
        return view('thisview')->compact('data');
    }

    public function product($product)
    {
        return view('pages', compact('product'));
    }

    public function contact()
    {

    }
}

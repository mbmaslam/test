<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');

    }

    public function about()
    {
        return view('index.about');
    }

    public function service()
    {
        return view('index.service');
    }

    public function contact()
    {
        return view('index.contact');
    }
}

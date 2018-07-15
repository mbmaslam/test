<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        print('Hello this is WelcomeController');
    }

    public function blade()
    {
       return view('welcome');

    }

    public function bcas()
    {
        return view('bcas');
    }
}

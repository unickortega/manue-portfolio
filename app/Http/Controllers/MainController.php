<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
    	return view('portfolio.index');
    }

    public function gallery()
    {
    	return view('portfolio.gallery');
    }
}

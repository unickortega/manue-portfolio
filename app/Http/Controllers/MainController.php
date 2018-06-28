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

    public function project()
    {
    	return view('portfolio.project');
    }
}

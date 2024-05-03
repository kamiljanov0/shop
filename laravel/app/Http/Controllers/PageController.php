<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public  function main()
    {
     return view('main');
    }

    function about()
    {
        return view('about');
    }

    function service()
    {
        return view('service');

    }
    function project()
    {
        return view('project');

    }
    function contact()
    {
        return view('contact');

    }


}

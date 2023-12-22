<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MicroWebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }
}

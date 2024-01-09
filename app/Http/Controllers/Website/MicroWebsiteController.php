<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MicroWebsiteController extends Controller
{
    public function home()
    {
        $data = [
            "tollFree" => "1800 1320 0211   " /* 1800 1320 0211 */
        ];
        return view('website.pages.home', [
            "data" => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $footers = config('footerLinks');

        $data = [
            'footers'=> $footers
        ];

        return view('home', $data);
    }
}

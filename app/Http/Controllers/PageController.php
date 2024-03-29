<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function services() {
        return view('frontend.services');
    }

    public function about() {
        return view('frontend.about');
    }
}

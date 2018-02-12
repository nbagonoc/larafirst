<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to LaraFirst!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $title = 'Services';
        return view('pages.services')->with('title',$title);
    }
}

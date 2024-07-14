<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     die('here');
    //     return view('home');
    // }

    public function index(){
        return render_view('index');
    }

    public function about(){
        return render_view('about');
    }

    public function contact(){
        return render_view('contact');
    }

    public function project(){
        return render_view('project');
    }

    public function service(){
        return render_view('service');
    }

    public function blog(){
        return render_view('blog');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function blog(){
        return view('blog');
    }
    public function testamonials(){
        return view('testimonial');
    }
    public function project(){
        return view('project');
    }
    public function team(){
        return view('team');
    }
    public function service(){
        return view('service');
    }

    public function metaverse(){
        return view('blog.metaverse');
    }
    public function python_oops(){
        return view('blog.python-oops');
    }
    public function blockchain(){
        return view('blog.blockchain');
    }

    public function chatbot(){
        return view('services.chatbot');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view("User.index");
    }
    public function about(){
        return view("User.about");
    }
    public function contact(){
        return view("User.contact");
    }
    public function product(){
        return view("User.product");
    }
    public function store(){
        return view("User.store");
    }
    public function blog(){
        return view("User.blog");
    }
    public function site(){
        return view("User.site-map");
    }
}

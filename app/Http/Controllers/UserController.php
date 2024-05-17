<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class UserController extends Controller
{
    public function home(){
        $products = product::where("Quality","popular")->get();
        return view("User.index",compact("products"));
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
    public function ProductDetail(int $id)
    {
        $products = product::find($id);
        return view('User.productDetail',compact('products'));
    }
}

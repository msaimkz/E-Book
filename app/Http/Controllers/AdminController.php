<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function admin(){
        return view("Admin.dashboard");
    }
    public function customer(){
        $customers = User::where("role","customer")->get();
        return view("Admin.customer",compact("customers"));
    }
    public function order(){
        // $customers = User::where("role","customer")->get();
        return view("Admin.order");
    }
    public function product(){
        // $customers = User::where("role","customer")->get();
        return view("Admin.product");
    }
    public function Addproduct(){
        // $customers = User::where("role","customer")->get();
        return view("Admin.AddProduct");
    }

}

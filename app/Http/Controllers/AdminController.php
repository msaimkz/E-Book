<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;

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
        return view("Admin.order");
    }
    public function product(){  
        return view("Admin.product.product");
    }
    public function Addproduct(){  
        return view("Admin.AddProduct");
    }
    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->arthur = $request->author;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product->img = $imageName;
        $pdfName = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('pdf'), $pdfName);
        $product->pdf = $pdfName;
        $product->save();
        return redirect('admin/product');
    }
    public function Showproduct(){ 
        $product= product::all();   
        return view("Admin.product.show-product",compact("product"));
    }
    public function edit(int $id)
    {
        $product = product::find($id);
        return view('Admin.product.edit',compact('product'));
    }
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->arthur = $request->author;
        if ($request->hasFile('image'))
         {
            if (file_exists($product->img)) 
            {
                
                unlink($product->img);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->img = $imageName;
        }
        if ($request->hasFile('pdf'))
        {
           if (file_exists($product->pdf)) 
           {
               
               unlink($product->pdf);
           }
           $pdfName = time().'.'.$request->pdf->extension();
           $request->pdf->move(public_path('pdf'), $pdfName);
           $product->pdf = $pdfName;
       }
        $product->update();
        return redirect('admin/product');
    }
    public function destroy(int $id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('admin/product');
    }
}
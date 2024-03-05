<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::get();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|decimal:0,2',
            'image'=>'required|mimes:png,jpg,jpeg,gif'
        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $product=new Product;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Added Successfully');
    }

    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }

    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|decimal:0,2',
            'image'=>'nullable|mimes:png,jpg,jpeg,gif'
        ]);
        $product=Product::where('id',$id)->first();

        if(isset($request->image)){
            $imageName=time().".".$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image=$imageName;
        }
        
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Updated Successfully');

    }

    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Details Deleted Successfully');


    }
}

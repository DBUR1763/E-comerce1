<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function register()
   {
      return view('product.register');
   } 
   public function store(request $request)
   {
      $product=new product();
      $product->name=$request->name;
      $product->unit=$request->unit;
      $product->price=$request->price;
      $product->quantity=$request->quantity;
      $is_sucessesed=$product::save();
      if( $is_sucessesed)
      echo"recored save sucessfully";
      else echo"some thin went wrong try again";
      
    }
}

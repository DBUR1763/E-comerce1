<?php

namespace App\Http\Controllers;
use App\Models\Productt;
use Illuminate\Http\Request;

class ProducttController extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('Productt.register');
  }
    function store(Request $request)
    
    {
      $Productt =new Productt();
      $Productt->id = $request->id;
      $Productt->name = $request->name;
      $Productt->unit = $request->unit;
      $Productt->price = $request->price;
      $Productt->quantity = $request->quantity;
     $is_saved = $Productt->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Productt = Productt::all();
     return view('Productt.list', compact('Productt'));
    } 
    public function edit($id)
 {
 $Productt = Productt::find($id);
 return view('Productt.edit', compact('Productt'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $Productt= Productt::find($request->id);
    $Productt->id = $request->id;
    $Productt->name = $request->name;
    $Productt->unit = $request->unit;
    $Productt->price = $request->price;
    $Productt->quantity = $request->quantity;
    $Productt->save();
    return redirect('Productt/list');
    }
    public function delete($id)
 {
 Productt::where('id', $id)->delete();
 return redirect('Productt/list');
   
}

public function search($id)
    {
     $Productt = Productt::where('id',$id)->first();
     return view('Productt.search', compact('product'));
    } 
  }
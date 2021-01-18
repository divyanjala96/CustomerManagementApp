<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends ParentController
{

//* open product page
public function index()
{
    $response['categaries']=Category::all();
    $response['products']=Product::all();
    return view('product')->with($response);
}

//* product save function
public function proStore(Request $request)
{
    $product = new Product;
    $product->cat_id=$request->category;
    $product->pro_name=$request->pro_name;
    $product->pro_price=$request->pro_price;

    $image=$request->file('file');
    $image_name=time().'.'.$image->extension();
    $image->move(public_path('images'),$image_name);
    $product->image=$image_name;
    $product->save();
    return redirect()->back();
}

//* product delete function
public function deleteProduct($id)
{
    $delete=Product::find($id);
    $delete->delete();
    return redirect()->back();
}

//* product update function start
public function updateProduct($id)
{
    $response['categaries']=Category::all();
    $response['products']=Product::find($id);
    return view('productUpdate')->with($response);

}

public function update(Request $update)
{
    $id=$update->id;
    $name=$update->name;
    $price=$update->price;
    $cat_id=$update->category;

    $update_pro_data=Product::find($id);
    $update_pro_data->pro_name=$name;
    $update_pro_data->pro_price=$price;
    $update_pro_data->cat_id=$cat_id;

    $image=$update->file('file');
    $image_name=time().'.'.$image->extension();
    $image->move(public_path('images'),$image_name);
    $update_pro_data->$image=$image_name;

    $update_pro_data->save();

    return redirect(route('product-all'));

}
//* product update function closed

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use domain\Facades\ProductFacade;
use domain\Facades\CategoryFacade;

class ProductController extends ParentController
{

//* open product page
public function index()
{
    $response['categaries']=CategoryFacade::getAllData();
    $response['products']=ProductFacade::getAllData();
    return view('product')->with($response);
}

//* product save function
public function proStore(Request $request)
{
    ProductFacade::store($request);
    return redirect()->back();
}

//* product delete function
public function deleteProduct($id)
{
    $delete=ProductFacade::getProductData($id);
    $delete->delete();
    return redirect()->back();
}

//* product update function start
public function updateProduct($id)
{   $update=ProductFacade::getProductData($id);
    $response['categaries']=CategoryFacade::getAllData();
    $response['products']=ProductFacade::getProductData($id);
    return view('productUpdate')->with($response);

}
// update second function start
public function update(Request $update)
{
    $id=$update->id;
    $product_data=ProductFacade::getProductData($id);
    ProductFacade::store($product_data);
    
    return redirect(route('product-all'));

}
//* product update function closed

}
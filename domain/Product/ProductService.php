<?php
namespace domain\Product;

use App\Models\Category;
use App\Models\Product;

class ProductService{

    protected $product;

    public function __construct()
    {
        $this->product=new Product();
    }

//get all product data
    public function getAllData()
    {
        return $this->product->get();
    }

//store product data
    public function store($request)
    {

     $this->product->cat_id=$request->category;
     $this->product->pro_name=$request->pro_name;
     $this->product->pro_price=$request->pro_price;

     $image=$request->file('file');
     $image_name=time().'.'.$image->extension();
     $image->move(public_path('images'),$image_name);
     $this->product->image=$image_name;
     $this->product->save();
    }

//find product data
   public function getProductData($id)
   {
      $data=Product::find($id);
      return $data;
   }
}

?>
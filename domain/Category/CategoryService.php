<?php

namespace domain\Category;

use App\Models\Category;



class CategoryService
{
    protected $category;

    public function __construct()
    {
        $this->category = new Category();
    }

//get all category data
    public function getAllData()
    {
        $data=Category::all();
        return $data;
    }
//store category data
    public function store($request)
    {
      $this->category->cat_name=$request->cat_name;
      $this->category->save();
    }
  
//delete category data
    public function getCategoryData($id)
    {
       $data=Category::find($id);
        return $data;
    }
}
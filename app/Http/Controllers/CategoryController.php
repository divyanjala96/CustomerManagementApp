<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends ParentController
{
    public function index() {

        $catData=Category::all();
        return view('category')->with('categories',$catData);
    }

//* Category store part
    public function catStore(Request $request)
    {
        $category = new Category;
        $category->cat_name=$request->cat_name;
        $category->save();
        $catData=Category::all();
        return view('category')->with('categories',$catData);
    }
//* Category delete part
    public function deleteCategory($id)
    {
        $delete=Category::find($id);
        $delete->delete();
        return redirect()->back();
    }

//* Category update function
    public function updateCategory($id)
    {
        $update=Category::find($id);
        return view('categoryUpdate')->with('update_categories_data',$update);
    }

    public function update(Request $updatedata)
    {
        $id=$updatedata->id;
        $name=$updatedata->name;
        $updatecatdata=Category::find($id);
        $updatecatdata->cat_name=$name;
        $updatecatdata->save();

        return redirect(route('category-all'));

    }
//* Category update function closed
}
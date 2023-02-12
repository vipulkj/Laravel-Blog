<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.add-category');
    }

    // public function editCategory(){
    //     return view('admin.edit-category');
    // }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required'
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'slug' => $request->category_slug,
        ]);
        session()->flash('msg','Category Added Successfully');
        return redirect('admin/category');
    }

    public function viewCategory(){
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.category',compact('categories'));
    }

    public function deleteCategory(Request $request,$id){
        Category::find($id)->delete();
        session()->flash('error','Category Deleted Successfully');
        return redirect('admin/category'); 
    }

    public function showCategoryData($id){
        $categories = Category::find($id);      
        return view('admin.edit-category',compact('categories'));
    }

    public function updateCategory(Request $request,$id){
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required'
        ]);

        Category::where('id',$id)->update([
            'category_name' => $request->category_name,
            'slug' => $request->category_slug,
        ]);
        session()->flash('msg','Category Updated Successfully');
        return redirect('admin/category');
    }
    
}

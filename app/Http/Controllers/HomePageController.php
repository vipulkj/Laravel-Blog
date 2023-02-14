<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage(){
        $categories = Category::all();
        $posts = Post::where('status',1)->orderby('id','desc')->get();
        return view('front.index',compact('posts','categories'));
    }

    public function post($id){
        $categories = Category::all();
        $post = Post::where('status',1)->find($id);
        $views = $post->views;
        $views++;
        Post::where('id',$id)->update([
            'views' => $views
        ]);
        return view('front.post',compact('post','categories'));
    }

    public function categorywisepost($slug){
        $category = Category::where('slug',$slug)->first();
        $category_id = $category->id;
        $posts = Post::where('category_id',$category_id)->where('status',1)->orderby('id','desc')->get();
        $categories = Category::all();
        return view('front.all-posts',compact('posts','categories'));
    }
}

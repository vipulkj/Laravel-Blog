<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();
        $posts = Post::where('status', 1)->orderby('id', 'desc')->paginate('3');

        $postTags = Post::where('status', 1)->select('tags')->get();
        $alltags = "";
        foreach ($postTags as $postTag){
            $alltags.= $postTag->tags." ";
        }
    

        $popularPosts = Post::where('status', 1)->orderby('views', 'desc')->take(3)->get();

        return view('front.index', compact('posts', 'categories','popularPosts','alltags'));
    }

    public function post($id)
    {
        $categories = Category::all();
        $post = Post::where('status', 1)->find($id);
        $views = $post->views;
        $views++;
        Post::where('id', $id)->update([
            'views' => $views
        ]);
        $relatedPosts = Post::where('category_id',$post->category_id)->where('status',1)->take(3)->get();



        return view('front.post', compact('post', 'categories','relatedPosts'));
    }

    public function categorywisepost($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category_id = $category->id;
        $posts = Post::where('category_id', $category_id)->where('status', 1)->orderby('id', 'desc')->get();
        $categories = Category::all();
        return view('front.all-posts', compact('posts', 'categories'));
    }


    public function updateLikes($id){
        $post = Post::find($id);
        $likes = $post->likes;
        $likes++;
        Post::where('id', $id)->update([
            'likes' => $likes,
        ]);
        return response()->json([
            'msg' => 'Post Liked',
            'likes' => $likes
        ]);
    }
}

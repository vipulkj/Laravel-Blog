<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\UserContact;
use Illuminate\Auth\Events\Validated;
use Illuminate\Cache\TagSet;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage()
    {

        $categories = Category::all();

        $posts = Post::where('status', 1)->orderby('id', 'desc')->paginate('3');

        $postTags = Post::where('status', 1)->select('tags')->get();

        $alltags = "";
        foreach ($postTags as $postTag) {
            $alltags .= trim($postTag->tags)." ";
        }
        $alltags = trim($alltags);
        
        $popularPosts = Post::where('status', 1)->orderby('views', 'desc')->take(3)->get();

        return view('front.index', compact('posts', 'categories', 'popularPosts', 'alltags'));
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
        $relatedPosts = Post::where('category_id', $post->category_id)->where('status', 1)->take(3)->get();

        return view('front.post', compact('post', 'categories', 'relatedPosts'));
    }

    public function categorywisepost($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category_id = $category->id;
        $posts = Post::where('category_id', $category_id)->where('status', 1)->orderby('id', 'desc')->get();
        $categories = Category::all();
        return view('front.all-posts', compact('posts', 'categories'));
    }

    public function tagwisepost($tag)
    {
        
        $posts = Post::where("tags", "Like", "%$tag%")->where('status', 1)->orderby('id', 'desc')->get();

        // $posts =  Post::where("title", "Like", "%$data%")->paginate(3);

        $categories = Category::all();

        return view('front.all-posts', compact('posts', 'categories'));
    }

    

    public function updateLikes($id)
    {
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

    public function userContactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        UserContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        session()->flash('msg', 'Contact Information submitted');
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $categories = Category::all();

        $postTags = Post::where('status', 1)->select('tags')->get();

        $alltags = "";
        foreach ($postTags as $postTag) {
            $alltags .= $postTag->tags . " ";
        }
        
        $popularPosts = Post::where('status', 1)->orderby('views', 'desc')->take(3)->get();

        if ($request->has('search')) {
            $data = $request->search;
            $posts =  Post::where("title", "Like", "%$data%")->where('status',1)->paginate(3);
            return view('front/index', compact('posts','alltags','popularPosts','categories'));
        }
    }
}

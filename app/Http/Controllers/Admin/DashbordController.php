<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashboard(){
        $postCount = Post::count();
        $categoriesCount = Category::count();
        $commentCount = Comment::count();
        $userCount = User::count();
        return view('admin/index',compact('postCount','categoriesCount','commentCount','userCount'));
    }
}

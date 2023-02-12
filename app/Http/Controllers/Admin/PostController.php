<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin/post/posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        return view('admin.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'tags' => 'required',
            'status' => 'required'
        ]);

        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $request->image->move(public_path('images/post-images'), $file);
        // $path = $request->file('image')->store('public/images/posts');


        Post::create([
            'title' => $request->title,
            'description' => $request->desc,
            'category_id' => $request->category,
            'image' => $file,
            'tags' => $request->tags,
            'status' => $request->status,
            'views' => 0,
            'likes' => 0,
        ]);

        session()->flash('msg', 'Post added successfully');
        return redirect('admin/post/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        // dd($post);
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
            'tags' => 'required',
            'status' => 'required'
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->desc,
            'category_id' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'views' => 0,
            'likes' => 0,
        ];
        $post = Post::find($id);
        $old_file = $post->image;
        
        if($request->file('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            
            if(file_exists(public_path('images/post-images/'.$old_file))){
             unlink(public_path('images/post-images/'.$old_file));
            }

            $request->image->move(public_path('images/post-images'), $file);
            $data['image'] = $file;
        }
        // $path = $request->file('image')->store('public/images/posts');


        Post::where('id', $id)->update($data);

        session()->flash('msg', 'Post Updated successfully');
        return redirect('admin/post/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        session()->flash('msg', 'Post Deleted successfully');
        return redirect('admin/post/all');
    }


    public function changeStatus(Request $request, $id){

        $request->validate([
            'status' => 'required|numeric'
        ]);
        $status = $request->status;
        $result = 0;
        if($status == 1){
            $result = 0;
        }else if($status == 0){
            $result = 1;
        }

        Post::where('id', $id)->update([
            'status' => $result
        ]);
        return response()->json(['msg' => 'Status Updated Successfully']);
    }

    public function postview($id){
        $category = Category::all();
        $post = Post::find($id);
        return view('admin.post.post-view',compact('post','category'));
    }
}

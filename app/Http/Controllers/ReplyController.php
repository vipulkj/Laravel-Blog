<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('admin.comment.view-comment',compact('comment'));
    }

    public function commentReply(Request $request){
        $request->validate([
            'comment_id' => 'required',
            'post_id' => 'required',
            'reply' => 'required'
        ]);

        Reply::create([
            'comment_id' => $request->comment_id,
            'post_id' => $request->post_id,
            'reply' => $request->reply,
        ]);
        session()->flash('msg','comment successfully submitted');
        return redirect()->back();
    }

    public function view(){
        $replys = Reply::all();
        return view('admin.comment.reply',compact('replys'));
    }

    public function destroy($id){
        Reply::find($id)->delete();
        return redirect()->back();
    }


    public function viewReply($id){
        $reply = Reply::find($id);
        return view('admin.comment.view',compact('reply'));
    }
}

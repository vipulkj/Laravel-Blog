<?php

namespace App\Http\Controllers;

use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = UserContact::all();
        return view('admin.comment.usercontact',compact('contacts'));
    }

    public function destroy($id){
        UserContact::where('id',$id)->delete();
        session()->flash('msg', 'Contact Information Deleted Successfully');
        return redirect()->back();
    }
}

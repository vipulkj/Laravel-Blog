<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin/user/user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/add');
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
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'role' => 'required'
        ]);

        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $request->image->move(public_path('images/user-images'), $file);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $file,
            'role' => $request->role
        ]);

        session()->flash('msg', 'User added successfully');
        return redirect('admin/user/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/user/edit', compact('user'));
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
            'username' => 'required',
            'email' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
            'role' => 'required'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role
        ];

        $user = User::find($id);
        $old_file = $user->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time() . '.' . $ext;

            if (file_exists(public_path('images/user-images/' . $old_file))) {
                unlink(public_path('images/user-images/' . $old_file));
            }

            $request->image->move(public_path('images/user-images'), $file);
            $data['image'] = $file;
        }

        User::where('id', $id)->update($data);

        session()->flash('msg', 'User updated successfully');
        return redirect('admin/user/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        session()->flash('msg', 'User deleted successfully');
        return redirect('admin/user/all');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}

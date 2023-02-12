@extends('admin/layout/layout')

@section('title','Edit-User')

@section('container')


<div class="content-header mx-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><a href="#"> Edit User</a></h1>
            </div><!-- /.col -->
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title bg-primary">Edit user</h3>

                <div class="card-tools">
                    <a href="{{ route('user.all')}}" class="text-white"><i class="fa fa-arrow-left mr-1"></i>Back To Users</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <form id="quickForm" method="POST" action=" {{ route('user.update',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="{{$user->username}}">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{$user->email}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div> -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="1" @if($user->role == 1) {{ 'selected'}} @endif>Auther</option>
                                        <option value="0" @if($user->role == 0) {{ 'selected'}} @endif>Admin</option>
                                    </select>
                                    @error('role')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="image">User Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <!-- <input type="text" name="image" class="form-control" id="image" placeholder="Enter I" value="{{old('title')}}"> -->
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label for="">User Image</label>
                                <img src="{{ asset('images/user-images/'.$user->image)}}" alt="" class="img-fluid">
                            </div>
                            

                            
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>





@endsection
@extends('admin/layout/layout')

@section('title','Edit-Post')

@section('container')


<div class="content-header mx-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><a href="#"> Edit Post</a></h1>
            </div><!-- /.col -->
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title bg-primary">Edit Post</h3>

                <div class="card-tools">
                    <a href="{{ route('post.all')}}" class="text-white"><i class="fa fa-arrow-left mr-1"></i>Back To Posts</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <form id="quickForm" method="POST" action=" {{ route('post.update',$post->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{$post->title}}">
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <!-- <input type="text" name="image" class="form-control" id="image" placeholder="Enter I" value="{{old('title')}}"> -->
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="desc">Description </label>
                                    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Description" class="form-control" >{{$post->description}}</textarea>
                                    @error('desc')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="desc">Post Image</label>
                                <img src="{{ asset('images/post-images/'.$post->image) }}" alt="" class="img-fluid ">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" placeholder="Enter tags" value="{{$post->tags}}">
                                    @error('tags')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if($post->category_id == $category->id) {{"selected"}} @endif>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" @if($post->status == 1) {{ 'selected'}} @endif>Active</option>
                                        <option value="0" @if($post->status == 0) {{ 'selected'}} @endif>Inactive</option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>





@endsection
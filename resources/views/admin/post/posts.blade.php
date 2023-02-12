@extends('admin/layout/layout')

@section('title','All Posts')

@section('container')


<div class="content-header mx-4">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><a href="#">Add Posts</a></h1>
      </div><!-- /.col -->
      <!-- <span class="text-primary">{{session('msg')}}</span>
      <span class="text-danger">{{session('msg2')}}</span> -->
      <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">All Posts</h3>
        <div class="card-tools">
          <a href="{{ route('post.add')}}" class="text-white"><i class="fa fa-plus mr-1"></i>Add Post</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        @if(count($posts) == 0 )
        <div class="jumbotron">
          <h1 class="display-4 text-danger">Sorry, No Data Found!</h1>
        </div>
        @else
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Image</th>
              <th>Category</th>
              <th>Likes</th>
              <th>Added On</th>
              <th>Views</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>

            @foreach($posts as $post)
            <tr>

              <td>{{$loop->iteration }}</td>
              <td>{{$post->title}}</td>
              <td><img src="{{asset('images/post-images/'.$post->image)}}" alt="" height="50px" width="50px"></td>
              <td>{{$post->category->category_name}}</td>
              <td>{{$post->likes}}</td>
              <td>{{$post->created_at->format('d M Y')}}</td>
              <td>{{$post->views}}</td>
              <td>
                <input type="checkbox" data-toggle="switchbutton" data-size="sm" class="PostStatus" data-id="{{ $post->id }}" data-value="{{ $post->status }}" @if($post->status == 1){{ 'checked' }} @endif>
              </td>

              <td>
                <a href="{{ route('post.view',['id' => $post->id ])}}" class="btn btn-primary"><i class="fas fa-eye m-1"></i>View</a>

                <a href="{{ route('post.edit',['id' => $post->id ])}}" class="btn btn-info"><i class="fas fa-pencil-alt m-1"></i>Edit</a>

                <a href="{{ route('post.delete',['id' => $post->id ] )}}" class="btn btn-danger" id="delete"><i class="fas fa-trash m-1"></i>Delete</a>
              </td>

            </tr>

            @endforeach


          </tbody>

        </table>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>



@endsection
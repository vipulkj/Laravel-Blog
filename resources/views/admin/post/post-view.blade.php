@extends('admin/layout/layout')

@section('title','Post View')

@section('container')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{ route('post.all')}}" class="text-black"><i class="fa fa-arrow-left mr-1"></i>Back To Posts</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <h1>Post-Image</h1>
                                <img class=" img-fluid" src="{{ asset('images/post-images/'.$post->image)}}" alt="post-image">
                            </div>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Category</b> <a class="float-right">{{$post->category->category_name}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Likes</b> <a class="float-right">{{$post->likes}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Views</b> <a class="float-right">{{$post->views}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <a class="float-right">@if($post->status == 1){{'Active'}} @else {{'Inactive'}} @endif </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-8">
                    <div class="card">
                        <!-- <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">About Post</a></li>
                            </ul>
                        </div> -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- <div class="user-block"> -->
                                                    
                                                    <span class="username">
                                                        <h1>Title - {{$post->title}}</h1>
                                                        <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                                    </span>
                                                    <span class="description">Created Date - {{$post->created_at->format('d M Y')}}</span>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <!-- /.user-block -->
                                        <span class="text-info">Description</span><p>{{$post->description}}</p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                            <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                                </a>
                                            </span>
                                        </p>
                                        <!-- <input class="form-control form-control-sm" type="text" placeholder="Type a comment"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </section>
</div>

@endsection
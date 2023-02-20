@extends('admin/layout/layout')

@section('title','View Comment')

@section('container')




<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Post Comment</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('comments')}}" class="text-black"><i class="fa fa-arrow-left mr-1"></i>Back To Comments</a>
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
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Name</b> <a class="float-right">{{$comment->name}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{$comment->email}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Subject</b> <a class="float-right">{{$comment->subject}}</a>
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
                                            <div class="col-lg-12">
                                                <!-- <div class="user-block"> -->

                                                <span class="username">
                                                    <h1>Post Title - {{$comment->post->title}}</h1>
                                                    <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                                </span>
                                                <!-- </div> -->
                                            </div>

                                        </div>
                                        <!-- /.user-block -->
                                        <span class="text-info">Comment Description</span>
                                        <p>{{$comment->comment}}</p>
                                        <div class="form-group">
                                            <form action="{{ route('comments.reply')}}" method="post">
                                                @csrf
                                                <input name="comment_id" type="hidden" id="comment_id" value="{{ $comment->id }}">
                                                <input name="post_id" type="hidden" id="post_id" value="{{ $comment->post_id }}">
                                                <textarea name="reply" id="reply" cols="" rows="" placeholder="Comment Reply" class=" form-control pl-2"></textarea>
                                                @error('reply')
                                                <span class="text-danger">{{ $message}}</span>
                                                @enderror
                                                <button type="submit" class="btn btn-primary my-3"><i class="fa fa-reply"></i> Reply</button>
                                            </form>
                                        </div>
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
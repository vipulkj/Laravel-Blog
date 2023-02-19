@extends('admin/layout/layout')

@section('title','View Reply')

@section('container')




<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Comment Reply</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('view')}}" class="text-black"><i class="fa fa-arrow-left mr-1"></i>Back All Replys</a>
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
                                    <b>Name</b> <a class="float-right">{{$reply->comment->name}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{$reply->comment->email}}</a>
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

                                                
                                                    <span class="text-info">Reply Description</span>
                                                    <p>{{$reply->reply}}</p>
                                                <!-- </div> -->
                                            </div>

                                        </div>
                                        <!-- /.user-block -->
                                        
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
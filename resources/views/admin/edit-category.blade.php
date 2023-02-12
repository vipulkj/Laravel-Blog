@extends('admin/layout/layout')

@section('title','Edit-Category')

@section('container')

<?php

?>

<div class="content-header mx-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><a href="#">Edit category</a></h1>
            </div><!-- /.col -->
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title bg-primary">Edit Category</h3>

                <div class="card-tools">
                    <a href="{{ route('category')}}" class="text-white"><i class="fa fa-arrow-left mr-1"></i>Back To Category</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <form id="quickForm" method="POST" action="{{ route('update-category',$categories->id)}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="category-name" placeholder="Enter Category" value="{{ $categories->category_name}}">
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category-slug">Category Slug </label>
                                    <input type="text" name="category_slug" class="form-control" id="category-slug" placeholder="Enter Slug" value="{{ $categories->slug}}">
                                    @error('category_slug')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>





@endsection
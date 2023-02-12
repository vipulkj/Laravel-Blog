@extends('admin/layout/layout')

@section('title','Add-Category')

@section('container')


<div class="content-header mx-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><a href="#">Add category</a></h1>
            </div><!-- /.col -->
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title bg-primary">Add New Category</h3>

                <div class="card-tools">
                    <a href="{{ route('category')}}" class="text-white"><i class="fa fa-arrow-left mr-1"></i>Back To Category</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <form id="quickForm" method="POST" action=" {{ route('store-category')}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="category-name" placeholder="Enter Category" value="{{old('category_name')}}">
                                    @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category-slug">Category Slug </label>
                                    <input type="text" name="category_slug" class="form-control" id="category-slug" placeholder="Enter Slug" value="{{old('category_slug')}}">
                                    @error('category_slug')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>





@endsection
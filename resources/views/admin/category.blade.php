@extends('admin/layout/layout')

@section('title','Categories')

@section('container')


<div class="content-header mx-4">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><a href="#">Add category</a></h1>
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
        <h3 class="card-title bg-primary">All Category</h3>
        <div class="card-tools">
          <a href="{{ route('add-category')}}" class="text-white"><i class="fa fa-plus mr-1"></i>Add category</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
      @if(count($categories) == 0 )
        <div class="jumbotron">
          <h1 class="display-4 text-danger">Sorry, No Data Found!</h1>
        </div>
        @else
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Category Slug</th>
              <th>Added On</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody> 
            
          @foreach($categories as $category)
            <tr>
              
              <td>{{$loop->iteration }}</td>
              <td>{{$category->category_name}}</td>
              <td>{{$category->slug}}</td>
              <td>{{$category->created_at->format('d M Y')}}</td>

              <td>
                <a href="{{ route('edit-category',['id' => $category->id ])}}" class="btn btn-info"><i class="fas fa-pencil-alt m-1"></i>Edit</a>

                <a href="{{ route('delete-category',['id' => $category->id ] )}}" class="btn btn-danger" id="delete"><i class="fas fa-trash m-1"></i>Delete</a>
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
@extends('admin/layout/layout')

@section('title','All Tables')

@section('container')

<div class="content-header mx-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                                <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

<div class="row mx-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">New Posts</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
        <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Short Description</th>
              <th>Added On</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>Sports</td>
              <td>Bacon ipsum dolor sit amet salami.</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>John Doe</td>
              <td>Sports</td>
              <td>Bacon ipsum dolor sit amet salami.</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
              
            </tr>
            <tr>
              <td>3</td>
              <td>John Doe</td>
              <td>Sports</td>
              <td>Bacon ipsum dolor sit amet salami.</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
              
            </tr>
            <tr>
              <td>4</td>
              <td>John Doe</td>
              <td>Sports</td>
              <td>Bacon ipsum dolor sit amet salami.</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
              
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row mx-3">
  <div class="col-6">
    <div class="card">
      <div class="card-header bg-green">
        <h3 class="card-title ">Category</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Added On</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sports</td>
              <td>12-jan-2023</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Sports</td>
              <td>12-jan-2023</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sports</td>
              <td>12-jan-2023</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sports</td>
              <td>12-jan-2023</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-6">
    <div class="card">
      <div class="card-header bg-orange">
        <h3 class="card-title ">New Users</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>User Role</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sports</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Sports</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sports</td>
              <td>Admin</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sports</td>
              <td>Admin</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-10">
    <div class="card">
      <div class="card-header bg-yellow">
        <h3 class="card-title ">Recent Comments</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Comment</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Aman</td>
              <td>Hello</td>
              <td>2-feb-2022</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Aman</td>
              <td>Hello</td>
              <td>2-feb-2022</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Aman</td>
              <td>Hello</td>
              <td>2-feb-2022</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Aman</td>
              <td>Hello</td>
              <td>2-feb-2022</td>
            </tr>
           
            
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection
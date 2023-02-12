@extends('admin/layout/layout')

@section('title','Blog Users')

@section('container')


<div class="content-header mx-4">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><a href="#">Add Users</a></h1>
      </div><!-- /.col -->
      <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="row mx-3">
  <div class="col-8">
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">Admin users</h3>

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
              <th>Usre Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Added On</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>2</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>3</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>4</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
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
  <div class="col-8">
    <div class="card">
      <div class="card-header bg-orange">
        <h3 class="card-title text-white">Blog Register users</h3>

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
              <th>Usre Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Added On</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>2</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>3</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>4</td>
              <td>Rajat</td>
              <td>rajat22@gmail.com</td>
              <td>Auther</td>
              <td>11-7-2014</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
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
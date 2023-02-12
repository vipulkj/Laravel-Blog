@extends('admin/layout/layout')

@section('title','Blog Comments')

@section('container')




<div class="row mx-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">All Comments</h3>

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
              <th>Email</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Nitin</td>
              <td>nitin33@gmail.com</td>
              <td>This website is very helpfull </td>
              <td>pending</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>2</td>
              <td>Nitin</td>
              <td>nitin33@gmail.com</td>
              <td>This website is very helpfull </td>
              <td>pending</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>3</td>
              <td>Nitin</td>
              <td>nitin33@gmail.com</td>
              <td>This website is very helpfull </td>
              <td>pending</td>
              <th>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <tr>
              <td>4</td>
              <td>Nitin</td>
              <td>nitin33@gmail.com</td>
              <td>This website is very helpfull </td>
              <td>pending</td>
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
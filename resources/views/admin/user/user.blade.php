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
  <div class="col-12">
    <div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">All Users</h3>
        <div class="card-tools">
          <a href="{{ route('user.add')}}" class="text-white"><i class="fa fa-plus mr-1"></i>Add User</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
      @if(count($users) == 0 )
        <div class="jumbotron">
          <h1 class="display-4 text-danger">Sorry, No Data Found!</h1>
        </div>
        @else
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usre Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Image</th>
              <th>Role</th>
              <th>Added On</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->username}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ Str::limit($user->password, 20) }}</td>
              <td><img src="{{ asset('images/user-images/'.$user->image)}}" alt="" height="50px" width="50px"></td>
              <td> @if($user->role == 1){{ "Author"}} @else {{"Admin"}} @endif</td>
              <td>{{$user->created_at->format('d M Y')}}</td>
              <th>
                <a href="{{ route('user.edit',['id' => $user->id])}}" class="btn btn-info"><i class="fas fa-pencil-alt m-1"></i>Edit</a>
                <a href="{{ route('user.delete',['id' => $user->id])}}" class="btn btn-danger" id="delete"><i class="fas fa-trash m-1"></i>Delete</a>
              </th>
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
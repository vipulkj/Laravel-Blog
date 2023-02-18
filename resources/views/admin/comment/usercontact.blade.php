@extends('admin/layout/layout')

@section('title','Blog Contact')

@section('container')




<div class="row mx-3">

  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary">All Contacts Information</h3>

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
        @if(count($contacts) == 0 )
        <div class="jumbotron">
          <h1 class="display-4 text-danger">Sorry, No Data Found!</h1>
        </div>
        @else
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contacts as $contact)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ $contact->name}}</td>
              <td>{{ $contact->email}}</td>
              <td>{{ Str::limit($contact->message, 20) }}</td>
              <th>
                <a href="" class="btn btn-primary"><i class="fas fa-eye m-1"></i>View</a>
                <a href="{{ route('contact.delete',['id' => $contact->id])}}" class="btn btn-danger" id="delete"><i class="fas fa-trash m-1"></i>Delete</a>
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
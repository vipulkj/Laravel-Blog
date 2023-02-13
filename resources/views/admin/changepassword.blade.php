@extends('admin/layout/layout')

@section('title','Change-Password')

@section('container')

<div class="row pt-5">
    <div class="col-lg-6 offset-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('resetpassword')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="current-pass">Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current-pass" placeholder="Current Password">
                        @error('current_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="new-password">new Password</label>
                        <input type="password" class="form-control" id="new-password" name="password" placeholder="New Password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
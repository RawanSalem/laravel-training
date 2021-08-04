@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
            <h2>{{ $user->name }}'s Profile</h2>
          </div>
          <div class="col-lg-10 col-xl-7 mx-auto">
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('users-list') }}">Users List</a>
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('register-user') }}">Add New User</a>
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('signout') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
@endsection
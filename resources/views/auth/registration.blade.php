@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
            <h3 class="display-4 mb-5">Add new user</h3>
            <form enctype="multipart/form-data" action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> Name: </label>
                    <input type="text" placeholder="Name" id="name" class="form-control rounded-pill shadow-sm px-4" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> Email: </label>
                    <input type="text" placeholder="Email" id="email" class="form-control rounded-pill shadow-sm px-4" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> Phone: </label>
                    <input type="text" placeholder="phone" id="phone" class="form-control rounded-pill shadow-sm px-4" name="phone" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> Password: </label>
                    <input type="password" placeholder="Password" id="password" class="form-control rounded-pill shadow-sm px-4" name="password" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> Avatar </label>
                    <input type="file" name="avatar" id="avatar" class="form-control rounded-pill shadow-sm px-4">
                </div>

                @if($errors->any())
                    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                @endif
                <button type="submit" class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm">
                    Login
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
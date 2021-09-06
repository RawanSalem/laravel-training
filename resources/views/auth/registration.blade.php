@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
          @endif
          @if(Session::has('error'))
            <div class="alert alert-success">
                {{ Session::get('error') }}
                @php
                    Session::forget('error');
                @endphp
            </div>
          @endif
            <h3 class="display-4 mb-5">{{__('text.reg_title')}}</h3>
            <form enctype="multipart/form-data" action="{{ route('register_create') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.name_label')}} : </label>
                    <input type="text" placeholder="Name" id="name" class="form-control rounded-pill shadow-sm px-4" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> {{__('text.Email')}} : </label>
                    <input type="text" placeholder="Email" id="email" class="form-control rounded-pill shadow-sm px-4" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.phone_label')}} : </label>
                    <input type="text" placeholder="phone" id="phone" class="form-control rounded-pill shadow-sm px-4" name="phone" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.Password')}} : </label>
                    <input type="password" placeholder="Password" id="password" class="form-control rounded-pill shadow-sm px-4" name="password" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.role_label')}} : </label></br>
                    <input type="radio" id="Super-Admin" name="role" value="Super-Admin">
                    <label for="Super-Admin">Admin</label><br>
                    <input type="radio" id="Can-Create" name="role" value="Can-Create">
                    <label for="Can-Create">Create Services</label><br>
                    <input type="radio" id="Can-Edit"  name="role" value="Can-Edit">
                    <label for="Can-Edit">Edit Services</label></br>
                    <input type="radio" id="Can-Delete" name="role" value="Can-Delete">
                    <label for="Can-Delete">Delete Services</label>
                </div>   

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.avatar_label')}} : </label>
                    <input type="file" name="avatar" id="avatar" class="form-control rounded-pill shadow-sm px-4">
                </div>

                @if($errors->any())
                    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                @endif
                <button type="submit" class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm">
                {{__('text.reg_btn')}}
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection


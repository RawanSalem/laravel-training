@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
            <h2>{{__('text.welcome')}} {{ $user->name }}</h2>
          </div>
          <div class="col-lg-10 col-xl-7 mx-auto">
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('index') }}">{{__('text.ser_btn')}}</a>
              @role('Super-Admin')
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('users_list') }}">{{__('text.users_btn')}}</a>
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('register_user') }}">{{__('text.reg_title')}}</a>
              @endrole
              <a class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm" href="{{ route('signout') }}" >{{__('text.logout')}}</a>
          </div>
        </div>
      </div>
    </div>
@endsection
@extends('admin.admin-profile-tem')

@section('content')
<div class="card pt-2 mt-5 border mx-auto" style="width: 50rem; border-color: #d5e0d5;">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-7 mx-auto">
        <h2 class="login-text display-4 mb-5">Admin Dashboard</h2>
        <div class="mb-5">
          <a class="log-btn btn btn-outline-success btn-block  mx-3 my-3 rounded-pill shadow-sm" href="{{ route('services.index') }}">{{__('text.ser_btn')}}</a>
          <a class="log-btn btn btn-outline-success btn-block  mx-3 my-3 rounded-pill shadow-sm" href="{{ route('users.index') }}">{{__('text.users_btn')}}</a>
        </div>      
      </div>
    </div>
  </div>
</div>
@endsection
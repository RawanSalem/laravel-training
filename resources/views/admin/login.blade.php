@extends('layout.main')

@section('content')
<div class="card pt-5 border m-auto" style="width: 50rem; border-color: #d5e0d5;">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-7 mx-auto">
        <h3 class="login-text display-4 mb-5">{{ __('text.admin_login')}}</h3>
        <form method="POST" action="{{ route('admin_login_auth') }}">
            @csrf
            <div class="form-group mb-3">
                <label class="mb-2 pl-2 text-left">{{ __('text.Email')}}</label>
                <input type="text" placeholder="Email" id="email" class="form-control shadow-sm px-4" name="email" style="border-color: #d5e0d5;"required>
            </div>
            <div class="form-group mb-3">
                <label class="mb-2 pl-2 text-lift">{{ __('text.Password')}}</label>
                <input type="password" placeholder="Password" id="password" class="form-control shadow-sm px-4" name="password" style="border-color: #d5e0d5;" required>
            </div>
            @if($errors->any())
                {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
            @endif
            <button type="submit" class="log-btn btn btn-success btn-block mb-5 mt-5  rounded-pill shadow-sm">
                {{ __('text.login')}}
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
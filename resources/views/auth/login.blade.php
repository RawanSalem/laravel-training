@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
            <h3 class="display-4 mb-5">{{ __('text.login')}}</h3>
            <form method="POST" action="{{ route('login_auth') }}">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{ __('text.Email')}}</label>
                    <input type="text" placeholder="Email" id="email" class="form-control rounded-pill shadow-sm px-4" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{ __('text.Password')}}</label>
                    <input type="password" placeholder="Password" id="password" class="form-control rounded-pill shadow-sm px-4" name="password" required>
                </div>
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                @endif
                <button type="submit" class="btn btn-primary btn-block mb-2 mt-3  rounded-pill shadow-sm">
                    {{ __('text.login')}}
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
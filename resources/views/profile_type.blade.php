@extends('layout.main')

@section('content')
<div class="card pt-5 pb-5 border m-auto" style="width: 50rem; border-color: #d5e0d5;">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-7 mx-auto">
        <h3 class="login-text display-4 mb-5">{{ __('text.profile_title')}}</h3>
        <a class="log-btn btn btn-outline-success btn-block  mx-3 my-3 rounded-pill shadow-sm" href="{{ route('client_register') }}">{{__('text.client_title')}}</a>
        <a class="log-btn btn btn-outline-success btn-block  mx-3 my-3 rounded-pill shadow-sm" href="{{ route('freelancer_register') }}">{{__('text.freelancer_title')}}</a>
      </div>
    </div>
  </div>
</div>
@endsection
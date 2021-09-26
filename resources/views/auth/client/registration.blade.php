@extends('layout.main')

@section('content')
<div class="card pt-5 border m-auto" style="width: 50rem; border-color: #d5e0d5;">
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
            <h3 class="login-text display-4 mb-5">{{__('text.client_reg_title')}}</h3>
            <form enctype="multipart/form-data" method="POST" action="{{ route('client_register_user') }}">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.company_name_label')}} : </label>
                    <input type="text" placeholder="Company Name" id="company_name" class="form-control  shadow-sm px-4" name="company_name" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> {{__('text.Email')}} : </label>
                    <input type="text" placeholder="Email" id="email" class="form-control  shadow-sm px-4" name="email" required>
                </div>
            
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.phone_label')}} : </label>
                    <input type="text" placeholder="phone" id="phone" class="form-control  shadow-sm px-4" name="phone" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.Password')}} : </label>
                    <input type="password" placeholder="Password" id="password" class="form-control  shadow-sm px-4" name="password" required>
                </div>
    
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                @endif
                <button type="submit" class="log-btn btn btn-success btn-block mb-5 mt-4 rounded-pill  shadow-sm">
                {{__('text.reg_btn')}}
                </button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection


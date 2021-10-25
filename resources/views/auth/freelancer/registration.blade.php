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
            <h3 class="login-text display-4 mb-5">{{__('text.freelancer_reg_title')}}</h3>
            <form enctype="multipart/form-data" action="" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.name_label')}} : </label>
                    <input type="text" placeholder="Name" id="name" class="form-control  shadow-sm px-4" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2"> {{__('text.Email')}} : </label>
                    <input type="text" placeholder="Email" id="email" class="form-control  shadow-sm px-4" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.country_label')}} : </label>
                    @include('layout.Countries')
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.work_tile_label')}} : </label>
                    <input type="text" placeholder="Work Title" id="work_title" class="form-control shadow-sm px-4" name="work_title" required>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.work_type_label')}} : </label>
                    <select placeholder="Work Type" id="service_id" class="py-2 form-control shadow-sm" name="service_id">
                    <option>Select Item</option>
                    @foreach ($services as $service)
                        <option value="{{ $service -> id }}"> 
                            {{ $service ->name }} 
                        </option>
                    @endforeach  
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.edu_label')}} : </label>
                    <input type="text" placeholder="Education" id="education" class="form-control  shadow-sm px-4" name="education" required>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.lang_label')}} : </label>
                    @include('layout.languages')
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.phone_label')}} : </label>
                    <input type="text" placeholder="phone" id="phone" class="form-control  shadow-sm px-4" name="phone" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.Password')}} : </label>
                    <input type="password" placeholder="Password" id="password" class="form-control  shadow-sm px-4" name="password" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.bio')}} : </label>
                    <textarea placeholder="Tell us more about you" id="bio" class="form-control  shadow-sm px-4" name="bio" required></textarea>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-2 pl-2">{{__('text.photo_label')}} : </label>
                    <input type="file" name="photo" id="photo" class="form-control  shadow-sm px-4">
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


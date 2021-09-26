@extends('layout.feelancer-profile-tem')

@section('content')
<div class='profile'>
  <div class="container">

    <div class="freelancer-profile-row row mt-5 mb-2">
      <div class='freelancer-profile-card card' style="border-color: #d5e0d5;" >

        <div class='freelancer-header-row border-bottom py-3 px-2'>
          <div class='block'>
            <img src="/uploads/avatars/{{ $user->profile->photo }}" width="60" height="60" class="rounded-circle">
          </div>
          <div class='block header-info'>
            <span class="freelancer-name">{{ $user->profile-> name }}</span> 
            <div class=' header-info'>
              <img src="{{url('/images/map-pin.svg')}}" alt="" width="15" height="15" srcset="">
              <span class="location-info">{{ $user->profile-> country }}</span>
            </div>
          </div>
          <div class='ml-5'>
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2 px-5 rounded-pill">
                See Public View
            </button>     
            <button class="btn btn-success my-2 my-sm-0 mr-2 px-5 rounded-pill">
                Profile settings
              </button> 
          </div>
        </div>

        <div class="freelancer-card-body border-bottom py-3 px-2">
          <div class='header-info'>
              <h4 class="freelancer-name">{{ $user->profile->work_title }}</h4> 
              <div class=' header-info'>
                <span class="location-info">{{ $user->profile->bio }}</span>
              </div>
          </div>
        </div>

        <div class="freelancer-card-body border-bottom py-3 px-2">
          <div class='header-info'>
              <h4 class="freelancer-name">work history</h4> 
              <div class=' header-info'>
                <span class="location-info">No items</span>
              </div>
          </div>
        </div>

        <div class="freelancer-card-body border-bottom py-3 px-2">
          <div class='header-info'>
              <h4 class="freelancer-name">Portfolio </h4> 
              <div class=' header-info'>
                <span class="location-info">No items</span>
              </div>
          </div>
        </div>

        <div class="freelancer-card-body border-bottom py-3 px-2">
          <div class='header-info'>
              <h4 class="freelancer-name">skills </h4> 
              <div class=' header-info'>
                <span class="location-info">skills tag</span>
              </div>
          </div>
        </div>

      </div>
    </div>
    

    <div class="freelancer-profile-row row mt-5 mb-2">
      <div class='freelancer-profile-card card' style="border-color: #d5e0d5;" >
          <div class='m-3 border-bottom'>
            <span class="freelancer-name">Certifications</span> 
            <button class="plus-icon-1 btn btn-outline-secondary  my-sm-0 rounded-pill ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              </button> 
          </div>
          <div class="profile-card-body ">

          </div>
      </div>
    </div>

    <div class="freelancer-profile-row row mt-5 mb-2">
      <div class='freelancer-profile-card card' style="border-color: #d5e0d5;" >
          <div class='m-3 border-bottom'>
            <span class="freelancer-name">Employment history </span> 
            <button class="plus-icon-2 btn btn-outline-secondary  my-sm-0 rounded-pill ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              </button> 
          </div>
          <div class="profile-card-body ">

          </div>
      </div>
    </div>

    <div class="freelancer-profile-row row mt-5 mb-5">
      <div class='freelancer-profile-card card' style="border-color: #d5e0d5;" >
          <div class='m-3 border-bottom'>
            <span class="freelancer-name">Other Experiences </span> 
            <button class="plus-icon-2 btn btn-outline-secondary  my-sm-0 rounded-pill ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              </button> 
          </div>
          <div class="profile-card-body ">

          </div>
      </div>
    </div>


    

  </div>
</div>  
@endsection
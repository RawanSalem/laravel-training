@extends('layout.profile-tem')

@section('content')
<div class='profile'>
  <div class="container">
    <div class="profile-row row mt-5 mb-3">
      <div class='profile-header'>
        <h2 class='user-name'>{{ $user->profile-> company_name }}</h2>
      </div>
      <div class='client-button'>
        <button class="btn btn-outline-success py-2 px-4 rounded-pill">
            <strong class='h5'>
              Browse Project Catalog
            </strong> 
        </button>
        <button class="btn btn-success py-2 px-4 rounded-pill">
            <strong class='h5'>
              Post a Job
            </strong> 
        </button>      
      </div>
    </div>

    <div class="profile-row row mt-5 mb-2">
      <div class='profile-card card' style="border-color: #d5e0d5;" >
        <div class='profile-header-row border-bottom py-3 px-2'>
          <span class="profile-text">My Drafts</span>
          <a class=''> <a class='profile-links' href="#"> All drafts</a></span>
        </div>
        <div class="profile-card-body ">

        </div>
      </div>
      <div class='profile-card-side card' style="border-color: #d5e0d5;" >
        <h2 class="profile-text border-bottom">My Templates</h2>
        <div class="profile-card-body ">

        </div>
      </div>
    </div>
    
    <div class="profile-row row mt-2 mb-5">
      <div class='profile-card card' style="border-color: #d5e0d5;" >
        <div class='profile-header-row border-bottom py-3 px-2'>
          <span class="profile-text">My Postings</span>
          <a class=''> <a class='profile-links-postings' href="#"> All postings</a></span>
        </div>
        <div class="profile-card-body ">

        </div>
      </div>
    </div>

  </div>
</div>  
@endsection
@extends('main')

@section('content')
<div class="base d-flex align-items-center py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-7 mx-auto">
            @foreach ($users as $user)
                <div class="card profile-header">
                    <div class="col-lg-4">
                        <div class="profile-image">
                            <img
                                src="/uploads/avatars/{{ $user->avatar }}"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-lg-8 pb-4">
                        <h4>{{ $user->name }}</h4>
                        <span>Phone: {{ $user->phone }} </span>
                    </div>
                </div>
            @endforeach
            <br />
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
@endsection



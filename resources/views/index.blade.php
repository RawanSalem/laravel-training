@extends('layout.main')

@section('content')
            <div class="container">
                <div class='row'>
                    <nav class="navbar navbar-expand-sm navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link h5">
                                        Development &amp; IT
                                    </a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link h5">
                                        Design &amp; Creative
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link h5">
                                        Sales &amp; Marketing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link h5">
                                        Writing &amp; Translation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link h5">
                                        Admin &amp; Customer Support
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link h5">
                                        Finance &amp; Accounting
                                    </a>
                                </li>
                            </ul>
                        </div>    
                    </nav>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class=''>
                            <h1 class='title'>
                                Join the world's work marketplace
                            </h1>
                            <p class='sub-title'>
                                Find great talent. Build your business.<br > 
                                Take your career to the next level.
                            </p>
                            <div>
                                <a class="btn btn-success py-3 px-5 rounded-pill" href="{{ route('login_auth') }}">
                                    <strong class='text-white'>
                                        Find Talent
                                    </strong> 
                                </a> 
                                <a class="btn btn-outline-success ml-3 py-3 px-5 rounded-pill" href="{{ route('login_auth') }}">
                                    <strong class=''>
                                        Find work
                                    </strong> 
                                </a> 
                            </div>
                            <div class='mt-5'>
                                <span class='sub-title-2'>
                                    Trusted by
                                </span>
                                <div>
                                    <img class="mx-3" src="https://www.upwork.com/static/assets/Brontes/fab8623/img/microsoft.77d03cc.svg" alt="logo"  width="80">    
                                    <img class="mx-3" src="https://www.upwork.com/static/assets/Brontes/fab8623/img/airbnb.2baea51.svg" alt="logo" width="80">    
                                    <img class="mx-3" src="https://www.upwork.com/static/assets/Brontes/fab8623/img/bissell.dcb03c9.svg" alt="logo" width="40">    
                                    <img class="mx-3" src="https://www.upwork.com/static/assets/Brontes/fab8623/img/godaddy.75298df.svg" alt="logo" width="80">    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <img class="mr-auto" src="https://www.upwork.com/static/assets/Brontes/fab8623/img/globe-2x.f7d44e7.jpg" alt="logo" width="400">    
                    </div>
                </div>
            </div>
    </div>    
@endsection
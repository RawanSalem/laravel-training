<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <style>

        </style>
    </head>
    <body class="antialiased">
            <div class="">
                <nav class="profile-nav navbar navbar-expand-sm">
                    <div class=" ">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img class="" src="https://logos-world.net/wp-content/uploads/2021/04/Upwork-Symbol.png" alt="logo" width="80">    
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active dropdown">
                                <a class="active-nav dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Jobs
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                All Job Posts
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                All Contracts
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Bring Your Own Talent
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Post a Job
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link-profile dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Talent
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Discover
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Your hires
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Company hires
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                BYO talent
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Recently viewed
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                Saved talent
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link-profile dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                FINANCIALS
                                            </strong> <br />
                                            <span>
                                                Transactions
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <span>
                                                MORE REPORTS
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link-profile" href="#">Messages</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item active mt-4">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success my-2 my-sm-0 mr-5 rounded-pill" type="submit">Search</button>
                                </form>
                        </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link-profile dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/uploads/avatars/default.png" width="25" height="25" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ route('user_logout') }}"> {{__('text.logout')}} </a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            @yield('content')

            <div>
                <!-- Footer -->
                <footer class="profile-footer text-center text-white pb-5">

                <!-- Section: Links -->
                <section class="container">
                <!--Grid row-->
                    <div class="row p-5">
                        <!--Grid column-->
                        <div class="profile-footer-links col-lg-3 col-md-6 mb-4 mb-md-0 pl-4">


                                <ul class="list-unstyled mb-0">
                                    <li>
                                    <a href="#!" class="footer-text ">About Us</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="footer-text ">Feadback</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="footer-text ">Community</a>
                                    </li>
                                </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=" profile-footer-links col-lg-3 col-md-6 mb-4 mb-md-0">

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="footer-text ">Trust, Safety & Security</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Help & Support</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Upwork Foundation</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="profile-footer-links col-lg-3 col-md-6 mb-4 mb-md-0">

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="footer-text ">Terms of Service</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Privacy Policy</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Accessibility</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="footer-text ">Desktop App</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Cookie Policy</a>
                                </li>
                                <li>
                                <a href="#!" class="footer-text ">Enterprice Solutions</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <hr class="solid mx-auto">

                <!--Grid row-->
                </section>
                <!-- Section: Links -->
                <!-- Grid container -->
                <!-- Section: Social media -->
                <section class=" p-1">
                    <div class="container">
                        <div class="row align-items-start pb-2">
                            <div class="col col-lg-6">
                                <p class="footer-text text-center"> Follow us</p>
                                <!-- Facebook -->
                                <a class="btn btn-outline-dark rounded-pill" href="#!" role="button"><i class="fa fa-facebook"></i></a>

                                <!-- Linkedin -->
                                <a class="btn btn-outline-dark rounded-pill" href="#!" role="button"><i class="fa fa-linkedin"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-dark rounded-pill " href="#!" role="button"><i class="fa fa-twitter"></i></a>

                                <!-- Youtube -->
                                <a class="btn btn-outline-dark rounded-pill " href="#!" role="button"><i class="fa fa-youtube"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-dark rounded-pill " href="#!" role="button"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="col col-lg-6">
                                <p class="footer-text text-center"> Mobile app</p>
                                <!-- Facebook -->
                                <a class="btn btn-outline-dark rounded-pill" href="#!" role="button"><i class="fa fa-android"></i></a>
        
                                <!-- Linkedin -->
                                <a class="btn btn-outline-dark rounded-pill" href="#!" role="button"><i class="fa fa-apple"></i></a>
                            </div>
                            <!-- Section: Social media -->
                        </div>
                        <hr class="solid">
                    </div>
                </section>
                <!-- Grid container -->

                <!-- Copyright -->
                <section class="">
                    <div class="container">
                       <div class='footer-text text-center'> © 2015 - 2021 Upwork® Global Inc.</div>   
                    </div>
                    </div>
                </section>
                <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </div>        
    </body>
</html>

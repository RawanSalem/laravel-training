<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Profile</title>
        <link rel="stylesheet" href="/css/main.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="">
    <nav class="profile-nav navbar navbar-expand-sm">
        <div class=" ">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img class="" src="https://logos-world.net/wp-content/uploads/2021/04/Upwork-Symbol.png" alt="logo" width="80">    
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link-profile-admin" href="{{ route('users.index') }}">Users</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link-profile-admin" href="{{ route('services.index') }}">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link-profile-admin" href="#">Notifications</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link-profile-admin dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/uploads/avatars/default.png" width="25" height="25" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"> {{__('text.logout')}} </a>
                    </div>

                </li>
            </ul>
        </div>
    </nav>
</div>

@yield('content')
<div>
            <!-- Footer -->
            <footer class="profile-footer text-center text-white pb-5 mt-5">

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
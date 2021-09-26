<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                    <div class="navbar-header ">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img class="mt-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbEAAAB0CAMAAAA8XPwwAAAApVBMVEX///8UqAAAowAApQC747gAogDP6c2V1I8ApwAzrixwxWk6tC3h9N4hrBMerA3j8+L5/fjv9+7t+ev2/PXh9N/8//vX79W14LFdv1Sj2Z6+5LotryGDzXxPukbG6MLG5cSr3aaf15lBtTdqw2Gr2aiP0ol5yHNQuEnb8tdfvFma1pR+ynhEsz5qwmPN68lAtTZOvEGd2pVhwlah1J+M0YWv4qlVt1CoeqYlAAASR0lEQVR4nO1d2XbiMBLFVkzEvm8hC2QjIYT0TGf6/z9tMHirWyVZJO4OnOP71mlZyLpS7ZIrlRL/CuN2I4sb5wefdg+215ftRaXTbvzFAZYAVAMvA1VzfvB2+XG/3F4H75W17/3FAZYAVP0sY547Y5XK9KFSeb5vdV4bJWP/EN9l7Pn++v5a/bXhlWD4LmP1mV9flIz9Q3ybsbG6nem/NrwSDN9grDeoVAa9Sn806P+14ZVg+AZjJX4EJWPnhpKxc0PJ2LmhZOzcUDJ2bigZOzeUjJ0bSsbODSVj54aSsXNDydi5oWTs3FAydm4oGTs3nCVjg+HLuLqtjl9OOTHXa253QxwPRwX3e26Mdcazh02t5Xlaa8+bb17X45Ojrdu8eFttau39EFv3q+erb9HW7zTHe3T3/yyIsQuCSS+n+eDqwoDJ0Db2yXtLqXAeYmit1Px10ZFaj+iPTMRGldEtH4RhDDDoibhUBtXrjfZ3o0zGqJTvra7HA8uLjU0j7d9d/2nsqFe+76vDn50YG8EbdVkLnyCoWkYXoql9A4Jr0zOj7bPna0+A9r33rfDAKiA9X4rddvhQgrrYshtAM2EJ9JcbXwmD3C2szdLM2RMd6WP0Alf19o77pI8jGOvToWo+VDq+YGwc2wHDljTz+wX5hy+HPW53U2F6KCRtyjlbkwfUL7HfC593thLHcEVbqhvWqvOmJbriIbbWJuF4SUd6YGzSCEhnxzA2pMNoc3FAB5fLWNPImCcsh3AEq8DC1/41gwd8chvQFuJ81YV+dVNqSReAp57g/wfPeWP02xfyfAiMvdwEQP4xjFXps/O/yZh/JbR/ksUhhfJxDulDYs/djdCzL03saEX5CG7p/090Dl/7hz5EHckZm3GJcgxjE9rhigtkGNc3GFPPrHX/xmEu9s/e0LU0JWwoSZGNpX70g9BygEueCMXuu9sYtTcR+maMXUs7/wjGqDzQgmKmfQeiVMnAJhU3qB7Gc4cNFj3cItpsRifiVRCLE3GiP4SWt1TG6tfsf3buHReVIE0rjLGLS6m3Yxhr0LUq/CTt+zuMeRo26NhznozQ2s+KPnpwx/MEp2MqrwZBSMAsqll2jG3nRRVKEbYeoO8b2SR2Z6xHX1yS8rTvbzGmlqRp1TtiMsLHs1IHNA93OkZzuZNHPuZXOo7gJTvGIxbVbgKnKEbEPYU4grEl7U8LS5X2Hdjc4BBWxsipw2b7qMkIn88sqCmVNlyRbeXloKesZb8NTdL/GuvjFpXn12GXFczYiE6vuhGEPO37W4x57cwO7bWOJWz3Zqkue6QK+J0N5NHQfZu1HIOrkCrz/vFjDD5p5wUztgTPcS20gQEdyVibrN+sXJvKr6KV8n2llPi/2kscs3GeW2KyQjXzx59AjSU7edAw7NN9ZMngUQdU9BfLGLjPXiCF06CJHMLL9EkZa/wik5GKxbX0Jipova9ni8li+bTSkqOm75MO6O/4zKAwzZT6jS1BjaWOvuSC7xbU/Hl5cTGZretzMVajiTdXKGPoYgoi/tuMzf9DpVe8JiRnya9ddhLFPere1gXHVSXByQeqyFA8bI2M4RH+PpgoyWH9Be9Cq+msn4yx27ms8UiYmmetAStjYbQ7hO/GWPcVOhMjB8cyBlKxVaVvE4tFbuWq+SO670Nhkat4M13QpfAKz86MM4XHTkG+Jh5Onz/qT8eg6QcLrupUNuRtZGwnWtub9+frp/X68vrAcQ5jA1Qkei5SQBsdy1i7Wc9OiFodWl3x13yX8jiTFjKbbBHYpTV43BxMCUCRAbf6Lvo7Wy66tRCG2OcKWWUmycCY1pvLageWqJ2xzi/sSklBlm8z1qGyJVKVLNYh+e77YbKZD2LDgMp09M7Nwog4yBVmAsU2DASbQx1qsLrW7GUyoTCZMSXkI+yMdRfM0VD3Qh8VxlheWhgZG1In/eBEX+Bs+JKVuscAKUtcELoHwDO+xV/Izhb9gRr930gKsJCJujcmc5kEzsQZJMa0YXOYGRssW0LqSGK9cjRjQ5SKFbqZW2EjZME3JjtDExsax5H1W/IO+r/kKdEUjZsSXQTZC39x+DM4aTs1a3nzJTZOY94CY6plEFQGxvqTuuTsqDfDaGC6jt1jTXBlgythNla2Ygn0QWJvuUP/XMv2AfkTag3SZAp42rF0RS0mJ9ZiYOtUkwmMtU2aBRibv4y3V7/rc9k51femxDdtF+TVeXDGesyo+8QR2JfBFRAceS+Y1coqsh4NcE9IQxrSotIvzi/00FWV5ViMQYM2T50Nzlhi2jBUmeTThlBCCOMSgpHnMcalIuayxgNwgPxZTp+gUuL2NNNEdAMtA9DNB2KwTrPbEQJ1kTybQDRIrktIAXpTJdUJjDGjMJMYM0PdGruhDb+wx8CUV/UmDEz2KjIYQxjpTzRLpJ+sgQa7uAW5smzAG7yx2Cd9hz8blHwKUM0qtiv5HjNb20cwJqUgYtCWX2EM9lT7v/BydoEjTEekCMDFzYR4u0Rgqnrlhb5EZn1i3vMgoCEOkrvFmIeZJJaQMcsWO4IxvbAMhTb9ilTERDm8Qyt3Nth0HDTB6A/dvKlg71A5vNs3hIFsUOKBNo2S2birDWU3WdCUTZJMQMbQf8/ClTGtrYscfvALe6zStCWZ1CJ/Nnqw5KMZfzIpMlr31tpJqGey6f6kikwOUcE8t2w1pBHAnKr1xZ48z2IWOzKm2nYZTVt/iTGMjlO4lGrDTogiVTQskZE3lJ+w9R1VZIkuGVKLIS48onEQOUQOgAxq7CUAY5pXJ6VwYyyo56wfaP4lxm7N/qxY3MQAYfQoPAM1UIkiG5AA1n7fdMguTasjwBtrR5NBI2AuYgBVnx/VMdhqSBAujCkvV0LTB77G2GBjjqSbrdTsu4CUivYI3bvJ2KgUVvu5o7ZIstLfqGCN/k759XRe6foewHJEDTDm2143nzHlfeYRUAxjlYVxLPO80PIeQ9Dr0RTSMhU/VmTUmTpoFBK20ptYm4CCXBz+CnmBdl450h4guSPygTFrzCiXsdqly2zRZ/yvMYZOczp3mNeS0afh2jgGCoosjv+TuYusNvC7Ig6gliyeT4g11pxORVHTI5b2uMdsPeQxJpWTCqAPfZExrChJAAVxJkC6XMWBHvrXX4ed0yX0RqFdynlsrkNoI/blq2LkKgdQ9BpZK8AYrwvKIHePObiulaIY6xqsRZVX6ROBul5JthwCYNHBOencSIVmVqMdAP5BvEmp2kxlqBXUpYjtWcqYtn4/ABlTrPpHOMnCQR85lrFWzMhMXj8Nx2OYr7Lr9SgR+Uht+8j8o6r0sJu6v7TwPFrqjnvsjsYyN4e/QhW39TsRGLv//fs3JAWS7J0NlIFcy+OF2gipYeFJEOoMZfyRpeKLtEdITEvF9YN9ysLedoEIvR/vJdBjxrwGAR46Ofz1UtRuMoT8GGYHXbQI5JbypBiYWekeEg8uqE9bXylMeoyug0NQfkQHHJvTXUrkPpIKgizJwoOZ4iYIXPSYstoOUkbzDlPh+dYizfxY/YkQ4Pp/pC+LueR9d06qlDtICWMQTemxEaRxemLLHcIYkK9JKhm/ZN0/O9iKtjiwIQcN0S+d//0dmjfMdf8hHJTJLvP6KYdCnwgYmUyyl3Tn7pMivwkzqfdAU1hhcT2EktO6if5XPGg4CRBJD2DMUh5hYKwHhclBrlx8EwdiBJUNxN3C+khPPpohAQ4qpzUXdDfsFRmpK8nIfWquqh09HapzM0kEEMKWZFTaPXUZ40AYMGYLKxrqPLZgs2HVGMNvSkGeEweef7b50GNoOOl0JnE26f+QedovEPKC2TOlU1RkYN1lrAIoJXCJfYIkVWIk+Hg9xl5+p25zTFcQZraSohAQ9iElFczCF89WSoCQR2bnUvN3Z5py4Zf8PGFsytRYpiQalMfcYZgYU45MtMsjFryp+g1mzc+Rcy+QQbLvSVA4PtEAXQwIK7cYFatQy0gpKEkY0wAi0fQvyCVV0Vn7AubOXEyT4oMKl6iyoYg9xs4Q6BzzD0pXrLqTndqilgU7vuCkIZhcyEryJu1vDd4YsUVppH9L7QtihIGGU/liEbPW8TQVwRh7/xxlAjLd7k7SclKFF56sWeQjT42GoM4vHcKInLnYyTpqPBIZTiSomtFYFLGpwIp08IJgUhMvqBDGeuhH260JcH2t0cgmFIExiXvPaqMdvFNUvW/m/7z/H9Vr5jfRdQgqEgG+NGwZE16wPiw2ggthrHKL0yYeQ4pB5Y6npfsVYkAYjJeh8PMZwhUi+CJYQkz2Ja2BaxGHH85fDJW5KZhUHZgifqKQAovfEoaLYQx8rB0L1lkDe8GS+IYtliThU/AQvsqL2o0aFqHIirlpU1DRtpsrIMIJwRR1bzUXZ/DiqVNREGPoR9s16yMmAYxC3bjSYnSEIyfWMwgVPIzJSohR5WSBNVDSfTXxKCCUgKXjVt8X61gyx2eKsO5D4OEoa1k5HjtVDcN6uwRqedh4IuVclGezVt/wkRZYM6yKP+0YcxOWCiG2DPHUOrsaK8UWO8uUsBa0x/hqk+9lM8yJehAFGVr2iheNLeUpU58mmdPFHcar9NnRvLTbBTTtG8Wi/sBXmmC3xijuLR6sVZm8ZWGMdWHs9PQAgKkKtRIIZkcVhfLXZ1MqeiMbP01WhKVZ/KEnd+lJETjjWVvBGORG0lSKgo7W7PBkNsFRGGNgYuWkypjgUXOc4T67IU3It3Y/DIx5Sq3wUPiOiyd+ZQ1P94xM9auaB+AMe1xM+4xZW+FwfaW5YoKeRHKKYwydHKsv2xdMvOlFZob7l/z+JsW3GF6Ll0V48UJ2DY+an8I1SIKkNZ7HFKZnbFwxwvYR7JTgY501k0bbunQNUlYAFcjYAE6PW+tPmFDf/XjQ/lxsO6NB82r2KpxLk4wrtP7hCV9PLxfb4aDSH08u76XrTXRLmFmTIhOyr70Pw09L9zuNhBysVvp9dhUe2Nm99pt4BQsNMRRlK4bADKM19SXeSaRUEMIXT+nOBetEuNMEe1R+1Ke4G+QKYsPGkU6vvsttZZ1QFRvrZIji20BkvcA9xuWi7X7SwbEXtYkH4c2GuBt8WdnKikxMDIjuhfGMkHypphXo2hbKGPrRXtsiF40aQEZ8ZJ/CsMKdOzVYR/L9OOIVIRh9iqCFpvuejzjnevjRGxAtRUpFwVW31Y0ctd7kpBtqkSNXsC9fa4+Jr6S5JDLo6c0Y5iTzkZSpD9Szhe4xbg1ZD5os3DeIfy3uVljgrYXLHddpp2b/QxzZXKwhEQWzJU2Xq3pJP7jDCmdsAH60tob4nAdvisHBiBqVas15PrS2OIzSlcCGs3Xohx4GbClvm7iLAoUXmFYKZ4xdBmSv9bl12xOmO6bAfw1F0eDafF8F7bNl2/7SfaWGOj3RJbSeXxjP3YYor6miGeOXvVhLPvuNfLGutPEQIdwktX/B7dzlYGLwak3JSGaR6aSWYP3Y12llUM/7okQIXz6dXKzlEY6G/bI99bHO2WYqqJtLEOFugKjcZZa7zYKPvOs0eIRXmxIMQqBK5RXejH/hdztYFyahXfge4/ZiTpXwUIpvJNMUrCxz24ergGJbrv9pUxXKn+eXerMIv/yZiRBC3KWVX7lw8WH5WsluFX+auiieMeZH556eGNe1fLWV0n+sZVnmy5h7y4Yc5Nj90s3C4SzQBXyOyvcDYyWExraB4Z5CgtHk1fB1JKXul2a5Al+zsp9toW1Ndwn15/jxrdxzAZ11eO8yObq6+/fmKed7d/IBqwMG2+cPrWifatfnp/VzbAl6/Pt0Rp63rK1LPdcOzc8V3Oy1/6pdfev+xbgLq3jvTUhb4/KHPp1eYDScPGzm4YjDvdGqbR4mzdyt8MRMRTre8Tr8KqNWh5vJa5v6RX6f/xaj5uJ5VZu3tR+99nR5el+OtKD/st3e3d1tx0O36nmH7xlVes3qXYjti+MZin+PQad51GufMWitou9QGV3iR9GhJnjuoZoSPw04vel29UqJHwR8UsB6N3CJUwBNFDjfMlDixwDHXswFmyVOBPRIlvyRmBInBLi23uFeihI/CyjdcrphqcRPgmYdHY6Nlfhh0HSm9b7cEicBuDaiNBVPHjRb53ohVYkfA6R+c++QK/HTgPJp+8nrEicAqHz7OLFcZQkGWnRWmoqnDzAVjd/NLHEi6MIlQIufHlCJHFTlL9qUOFnAKQvrpxVKnALg1i7r0YQSp4D6vJHB3O0DJCW+gv8Dch8XmpbXSCAAAAAASUVORK5CYII=" alt="logo" width="100">    
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Find Talent
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Post a job and hire a pro
                                            </strong> <br />
                                            <span>
                                                Talent Marketplace
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Browse and buy projects
                                            </strong> <br />
                                            <span>
                                                Project Catalog
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Let us find you the right talent
                                            </strong> <br />
                                            <span>
                                                Talent Scout
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Find Work
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Ways to earn
                                            </strong> <br />
                                            <span>
                                                Learn why Upwork has the right opportunities for you.
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Find work for your skills
                                            </strong> <br />
                                            <span>
                                                Explore the kind of work available in your field.
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Why Upwork
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Success Stories
                                            </strong> <br />
                                            <span>
                                                Discover how teams work strategically and grow together.
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                How to hire
                                            </strong> <br />
                                            <span>
                                                Learn about the different ways to get work done.
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                Reviews
                                            </strong> <br />
                                            <span>
                                                See what it’s like to collaborate on Upwork.
                                            </span>
                                        </div> 
                                    </button> 
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item mr-20">
                                        <div>
                                            <strong>
                                                How to find work
                                            </strong> <br />
                                            <span>
                                                Learn about how to grow your independent career.
                                            </span>
                                        </div> 
                                    </button> 
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Enterprise</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0 mr-5 rounded-pill" type="submit">Search</button>
                            </form>
                            @auth
                            @role('Super-Admin')
                                <li><button class="btn btn-link my-2 my-md-4 mx-2 rounded-pill"><a class="nav-link h5" href="{{ route('admin.logout') }}"> {{__('text.logout')}} </a></li>
                            @else
                                <li><button class="btn btn-link my-2 my-md-4 mx-2 rounded-pill"><a class="nav-link h5" href="{{ route('user_logout') }}"> {{__('text.logout')}} </a></li>
                            @endrole
                            @endauth
                            @guest
                                <li><button class="btn btn-link my-2 my-md-4 mx-2 rounded-pill"><a class="nav-link h5" href="{{ route('login_auth') }}"> Login </a></li>
                                <li><button class="btn btn-link my-2 my-md-4 mx-2 rounded-pill"><a class="nav-link h5" href="{{ route('profile_type') }}"> Sign Up </a></li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
            
            @yield('content')

            <div>
                <!-- Footer -->
                <footer class="text-center text-white mt-5">

                <!-- Section: Links -->
                <section class="container">
                <!--Grid row-->
                    <div class="row p-5">
                        <!--Grid column-->
                        <div class="footer-links col-lg-3 col-md-6 mb-4 mb-md-0 pl-4">
                            <div class="pb-3">
                                <strong>For Clients</strong>
                            </div>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                    <a href="#!" class="text-white">How to Hire</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Talent Marketplace</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Project Catalog</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Talent Scout</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Enterprise</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Payroll Services</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Direct Contracts</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Hire Worldwide</a>
                                    </li>
                                    <li>
                                    <a href="#!" class="text-white">Hire in the USA</a>
                                    </li>
                                </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=" footer-links col-lg-3 col-md-6 mb-4 mb-md-0">
                            <div class="pb-3">
                                <strong>For Talent</strong>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="text-white">How to Find Work</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Direct Contracts</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Find Freelance Jobs Worldwide</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Find Freelance Jobs in the USA</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="footer-links col-lg-3 col-md-6 mb-4 mb-md-0">
                            <div class="pb-3">
                                <strong>Resources</strong>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="text-white">Help & Support</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Success Stories</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Upwork Reviews</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Resources</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Blog</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Community</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="footer-links col-lg-3 col-md-6 mb-4 mb-md-0">
                            <div class="pb-3">
                                <strong>Company</strong>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="#!" class="text-white">About Us</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Leadership</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Investor Relations</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Careers</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Upwork Foundation</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Press</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Contact Us</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">Trust, Safety & Security</a>
                                </li>
                                <li>
                                <a href="#!" class="text-white">UK Modern Slavery Statement</a>
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
                                <p class="h6"> Follow us</p>
                                <!-- Facebook -->
                                <a class="btn btn-outline-light rounded-pill" href="#!" role="button"><i class="fa fa-facebook"></i></a>

                                <!-- Linkedin -->
                                <a class="btn btn-outline-light rounded-pill" href="#!" role="button"><i class="fa fa-linkedin"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light rounded-pill " href="#!" role="button"><i class="fa fa-twitter"></i></a>

                                <!-- Youtube -->
                                <a class="btn btn-outline-light rounded-pill " href="#!" role="button"><i class="fa fa-youtube"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light rounded-pill " href="#!" role="button"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="col col-lg-6">
                                <p class="h6 pr-2"> Mobile app</p>
                                <!-- Facebook -->
                                <a class="btn btn-outline-light rounded-pill" href="#!" role="button"><i class="fa fa-android"></i></a>
        
                                <!-- Linkedin -->
                                <a class="btn btn-outline-light rounded-pill" href="#!" role="button"><i class="fa fa-apple"></i></a>
                            </div>
                            <!-- Section: Social media -->
                            <!-- Section: Social media -->
                        </div>
                        <hr class="solid">
                    </div>
                </section>
                <!-- Grid container -->

                <!-- Copyright -->
                <section class="">
                    <div class="container pb-5">
                       <div class="col-sm-3"> © 2015 - 2021 Upwork® Global Inc.</div>
                       <div class="col-sm-3"> | </div>
                       <div class="footer-links col-sm-3 ml-0">
                       <a href="#!" class="text-white px-2">Terms of Service</a>
                       <a href="#!" class="text-white px-2">Privacy Policy</a>
                       <a href="#!" class="text-white px-2">Accessibility</a>
                        </div>
                    </div>
                </section>
                <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </div>        
    </body>

    <!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
</html>

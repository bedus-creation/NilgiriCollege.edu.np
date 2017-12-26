<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <link href="{{asset('css/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/default.css')}}" rel="stylesheet">
        @yield('head')

        <title>@yield('title') BigBook</title>
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="header-top-inner">
                    <div class="logo">
                        <img src="{{ asset('/img/logo.png') }}"/>
                    </div>
                    <div class="name">
                        <div class="name-head">
                            NI<span class="height">L</span>GIRI &nbsp; CO<span class="height">LL</span>EGE
                        </div>
                        <div class="name-bottom">
                            <div class="name-bottom-left">
                                B.Tech (Food) Technology
                            </div>
                            <div class="name-bottom-right">
                                (Affiliated to TU)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-innner">
                <nav class="navbar navbar-light">
                    <div class="container-fluid nav-inner">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a class="navbar-brand" href="{{URL('')}}"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{URL('')}}">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{URL('extra/aboutus')}}">About Us</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Program<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{URL('program/b-tech-food')}}">Food (B.tech)</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{URL('inform/notice')}}">Notice</a></li>
                                <li><a href="{{URL('inform/news')}}">News</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="{{URL('auth/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="content">
            <div class="content-inner">       
                <div class="content-left">
                    <div class="profile-image">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="profile-name">
                        Admin
                    </div>
                    <div class="options-menu">
                        <ul>
                            <li><a href="{{ URL('admin') }}">
                                    <i class="fa fa-tachometer">&nbsp;&nbsp;&nbsp;Dashboard</i>
                                </a></li>
                            <li><a href="{{ URL('admin/create-post') }}">
                                    <i class="fa fa-file-text">&nbsp;&nbsp;&nbsp;Create Post</i>
                                </a></li>
                            <li><a href="{{ URL('admin/all-post') }}">
                                        <i class="fa fa-database">&nbsp;&nbsp;&nbsp;All Post</i></a></li>
                            <li><a href="{{ URL('admin/edit-post') }}">
                                    <i class="fa fa-edit">&nbsp;&nbsp;&nbsp;Edit Post</i></a></li>
                            <li><a href="{{ URL('admin/all-post') }}">
                                    <i class="fa fa-remove">&nbsp;&nbsp;&nbsp;Delete Post</i></a></li>

                            <li><a href="{{ URL('auth/logout') }}">
                                    <i class="fa fa-power-off">&nbsp;&nbsp;&nbsp;logout</i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="content-right">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <footer>
            <div id="footer-inner">
                <section class="one-third address" id="footer-third">
                    <h3>Important Links</h3>
                    <ul style="list-style: none;">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Program (B.tech)</a></li>
                        <li><a href="#">Notice</a></li>
                    </ul>
                </section>
                <section class="one-third" id="footer-third">
                    <h3 class="center-h">Social</h3>
                    </br>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </section>
                <section class="one-third address" id="footer-third">
                    <h3 class="center-h">Address</h3>
                    <ul style="list-style: none;">
                        <li><i class="fa fa-phone"></i>   &nbsp;&nbsp;&nbsp;025-586092</li>
                        <li><i class="fa fa-location-arrow"></i> &nbsp;&nbsp;&nbsp;Itahari-5 (Opposite to Khadya Godam)</li>
                    </ul>
                </section>

            </div>
        </footer>
        <footer class='second'>
            <p> &copy; 2017 NilgiriCollege  </p>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8" />
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! Html::style('css/style.css') !!}

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('fonts/font-awesome/css/font-awesome.css') !!}
    <!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->

    <script src="js/jquery.js"></script>

<!--    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->

    <script src="js/bootstrap.min.js"></script>




</head>

<body>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-envelope"></i>&nbsp;tolitz34 @ gmail .com</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/tolitz.png" alt="logo" width="250" height="80"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#work">Charts</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <i class="fa fa-chevron-right"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://fildoctor.com">FilDoctor.com</a></li>
                            <li><a href="http://fildoctor.com/public/search">Find a Doctor</a></li>
                            <li><a href="http://fildoctor.com/public/auth/register">Register</a></li>
                            <li><a href="http://fildoctor.com/public/auth/login">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header>

   @yield('content')




<script src="{{ asset('js/scripts/frontend.js') }}" type="text/javascript"></script>

</body>

</html>
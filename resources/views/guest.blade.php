<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8" />
    <title>Freelance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('fonts/font-awesome/css/font-awesome.css') !!}
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->

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
            <a class="navbar-brand" href="index.html"><img src="img/tolitz.png" alt="logo" width="250" height="80"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="">FilDoctor.com</a></li>
                        <li><a href="">Fine a Doctor</a></li>
                        <li><a href="">Register</a></li>
                        <li><a href="">Login</a></li>
                    </ul>
                </li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header>

<div class="carrot">
    <div class="container">
<!--        <div class="bread">-->
<!--            <a href="#" class="active">Choose Product</a>-->
<!--            <a href="#">Choose Color</a>-->
<!--            <a href="#">Choose Address</a>-->
<!--            <a href="#">Checkout</a>-->
<!--        </div>-->

        <div class="col-md-4 top2 pictureid"><img src="img/id.jpg" alt="logo" class="img-thumbnail" width="150" height="150"></div>
            <div class="col-md-6">
                        <div class="font2 top2">

                                            <h4 class="text-left"><a>My name is <strong>Joselito Pasculado</strong> and I'm a Freelance Laravel Developer in Tacloban City, Philippines</a></h4>
                                            <h4 class="text-left"><a>I'm 1 years experience in Web Design and Development. I'm Full-stack developer specializing
                                            in PHP (Laravel 5 Framework), MySQL, Javascript (jQuery and Ajax), HTML5, CSS3, Apache Server, and Bootstrap 3 Framework.</a></h4>
                        </div>
            </div>

    </div>

</div>

<!--<section id="main-slider" class="no-margin">-->
<!--    <div class="carousel slide">-->
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#main-slider" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#main-slider" data-slide-to="1"></li>-->
<!--            <li data-target="#main-slider" data-slide-to="2"></li>-->
<!--        </ol>-->
<!---->
<!--        <div class="carrot">-->
<!---->
<!--            <div class="item active">-->
<!--                <div class="container">-->
<!--                    <div class="row slide-margin">-->
<!--                        <div class="col-sm-6">-->
<!--                            <div class="carousel-content">-->
<!--                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>-->
<!--                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>-->
<!--                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-sm-6 hidden-xs animation animated-item-4">-->
<!--                            <div class="slider-img">-->
<!--<!--                                <img src="images/slider/img1.png" class="img-responsive">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div><!--/.item-->
<!--        </div>-->
<!--     </div>-->
<!-- </section>-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
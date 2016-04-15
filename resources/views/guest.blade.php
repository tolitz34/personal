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

    <script src="js/jquery.js"></script>
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <i class="fa fa-angle-down"></i></a>
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

                                            <h3 class="text-left"><a>My name is <strong>Joselito Pasculado</strong> and I'm a Freelance Laravel Developer in Tacloban City, Philippines</a></h3>

                        </div>
            </div>

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="top2 text-center">
                    <a href="#feature" class="fa fa-angle-down page-scroll"></a>
                </div>
            </div>
        </div>



    </div>

</div>

   <section id="feature">
       <div class="container">
           <div class="text-center wow fadeIndown">
               <h2>Laravel Developer</h2>
               <p class="lead">I'm Full-stack developer specializing
                   in PHP (Laravel 5 Framework), MySQL, Javascript (jQuery and Ajax), HTML5, CSS3, and Bootstrap 3.</p>
           </div>

           <div class="row">
               <div class="features">
                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-plug"></i>
                           <h4>Front-end Development</h4>
                           <h5>Front-end developers use HTML, CSS, and often JavaScript to turn a static website design into a workable website on the web.</h5>
                       </div>
                   </div>

                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-spinner"></i>
                           <h4>Back-end Development</h4>
                           <h5>Back-end developers are less concerned with design and more focused on security.</h5>
                       </div>
                   </div>

                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-dot-circle-o"></i>
                           <h4>Full-stack Development</h4>
                           <h5>Full-stack developers do both front- and back-end development</h5>
                       </div>
                   </div><!--/.col-md-4-->

                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-leaf"></i>
                           <h4>App Development</h4>
                           <h5>This is slightly different from web development, but the skills you learn as a web developer lend themselves to this job as well.</h5>
                       </div>
                   </div><!--/.col-md-4-->

                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-area-chart"></i>
                           <h4>Directory Structure</h4>
                           <h5>Using Laravel 5 different bootstrapping functions can be accessed to your applications such as, route loading, and error handling and etc.</h5>
                       </div>
                   </div><!--/.col-md-4-->

                   <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                       <div class="feature-wrap">
                           <i class="fa fa-thumbs-up"></i>
                           <h4>Technology-specific</h4>
                           <h5>Some developers focus on an actual technology rather than a specific type of work or end product.</h5>
                       </div>
                   </div><!--/.col-md-4-->
               </div>
           </div>
       </div>
   </section>


   <section id="skill">
       <div class="container">
           <div class="row">
               <div class="text-center skills">
                   <h2>Our Skills</h2>
                   <p>I'm 1 years experience in Web Design and Development.</p>
               </div>
               <div class="col-sm-6 wow fadeInDown">
                   <div class="progress-wrap">
                       <h4>Graphic Design</h4>
                       <div class="progress">
                           <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                               <span class="bar-width">75%</span>
                           </div>

                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>HTML</h4>
                       <div class="progress">
                           <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                               <span class="bar-width">85%</span>
                           </div>
                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>CSS</h4>
                       <div class="progress">
                           <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                               <span class="bar-width">80%</span>
                           </div>
                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>jQuery</h4>
                       <div class="progress">
                           <div class="progress-bar color4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                               <span class="bar-width">60%</span>
                           </div>
                       </div>
                   </div>

               </div>

               <div class="col-sm-6 wow fadeInDown">

                   <div class="progress-wrap">
                       <h4>Ajax</h4>
                       <div class="progress">
                           <div class="progress-bar color5" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                               <span class="bar-width">65%</span>
                           </div>
                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>Bootstrap 3</h4>
                       <div class="progress">
                           <div class="progress-bar color6" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                               <span class="bar-width">90%</span>
                           </div>
                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>FullCalendar.js</h4>
                       <div class="progress">
                           <div class="progress-bar color7" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                               <span class="bar-width">75%</span>
                           </div>
                       </div>
                   </div>

                   <div class="progress-wrap">
                       <h4>Mysql</h4>
                       <div class="progress">
                           <div class="progress-bar color8" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>

    <section id="work">
        <div class="container">
            <div class="text-center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">The Recent Work allows you to display ours portfolio posts on any page or post without needing to use one of the portfolio page templates</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                <a href="http://fildoctor.com" data-lightbox="image-1">
                    <div class="featured-img">
                        <img src="img/fildoctor.jpg"/>
                    </div>
                    <div class="image-hover">
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </div>
                    <h3>Doctor Appointment</h3>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                <a href="#" data-lightbox="image-1">
                    <div class="featured-img">
                        <i class="fa fa-upload fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="image-hover">
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </div>
                    <h3>Upload Works</h3>
                </a>
            </div>


        </div>
    </section>

     <footer id="footer" class="midnight">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     &copy; {{ date("Y") }} <a target="_blank" href="http://laravelians.esy.es" title="Tolitz34 Freelance">Freelance Laravel Developer</a>. All Rights Reserved.
                 </div>
                 <div class="col-sm-6">
                     <ul class="pull-right">
                         <li><a href="#">Feedback</a></li>
                         <li><a href="#">FAQ</a></li>
                         <li><a href="#">About Us</a></li>
                         <li><a href="#">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>



</div>




</body>
</html>
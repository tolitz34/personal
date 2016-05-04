<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template</title>

    <!-- Bootstrap core CSS -->

    {!! Html::style('css/bootstrap/bootstrap.min.css') !!}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::style('css/ie10-viewport-bug-workaround.css') !!}

    <!-- Custom styles for this template -->
<!--    {!! Html::style('css/dashboard.css') !!}-->
    {!! Html::style('css/stylesheets/styles.css') !!}

    <!--    font awesome-->
    {!! Html::style('fonts/font-awesome/css/font-awesome.css') !!}
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span>&ensp;Admin User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{!! url('logout') !!}"><span class="fa fa-fw fa-power-off"> Logout</span></a>
                        </li>
                    </ul>
                </li>

                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
<!--            <form class="navbar-form navbar-right">-->
<!--                <input type="text" class="form-control" placeholder="Search...">-->
<!--            </form>-->
        </div>
    </div>
</nav>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <li {!! classActivePath('dashboard') !!}>
                    <a href="{!! url('dashboard') !!}"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a>
                </li>

                <li>
                  <a href="#"><i class="fa fa-fw fa-user"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li {{ (Request::is('*user') ? 'class="active"' : '') }}>
                                <a href="{{ url ('user') }}">All Users</a>
                        </li>
                        <li {{ (Request::is('*edit') ? 'class="active"' : '') }}>
                               <a href="{{ url ('edit' ) }}">Edit User</a>
                        </li>
                        <li {{ (Request::is('*rules') ? 'class="active"' : '') }}>
                                <a href="{{ url('rules') }}">Roles</a>
                        </li>

                    </ul>

                </li>

                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Charts</a></li>
                <li><a href="">Forms</a></li>
                <li><a href="">Tables</a></li>
                <li><a href="">Elements</a></li>
                <li><a href="">Dropdown</a></li>
            </ul>

        </div>

    </div>
</div>

@yield('content')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>-->

<!--{!! Html::script('js/bootstrap.min.js') !!}-->

<script src="{{ asset('js/scripts/frontend.js') }}" type="text/javascript"></script>

<!-- Just to make our placeholder images work. Don't actually copy the next line! -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<!--{!! Html::script('js/vendor/ie10-viewport-bug-workaround.js') !!}-->





</body>
</html>

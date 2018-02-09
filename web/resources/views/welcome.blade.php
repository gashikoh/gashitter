<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('welcomeassets/images/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('welcomeassets/images/favicon.png') }}">
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Habitis Vietnam</title>
    
    <link href="{{ asset('welcomeassets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('welcomeassets/css/coming-sssoon.css') }}" rel="stylesheet" />
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('welcomeassets/images/flags/US.png') }}"/>
                        English(US)
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/DE.png') }}"/> Deutsch</a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/GB.png') }}"/> English(UK)</a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/FR.png') }}"/> Français</a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/RO.png') }}"/> Română</a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/IT.png') }}"/> Italiano</a></li>
                        
                        <li class="divider"></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/ES.png') }}"/> Español <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/BR.png') }}"/> Português <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/JP.png') }}"/> 日本語 <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="{{ asset('welcomeassets/images/flags/TR.png') }}"/> Türkçe <span class="label label-default">soon</span></a></li>
                    
                    </ul>
                </li>
            
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook-square"></i>
                        Like
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus-square"></i>
                        Plus
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pinterest"></i>
                        Pin
                    </a>
                </li>
            </ul>
        
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<div class="main" style="background-image: url('{{ asset('welcomeassets/images/video_bg.jpg') }}')">
    <div id="video_background">
    <!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
    
    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
    
    <div class="container">
        <h1 class="logo cursive">
            Habitis VietNam
        </h1>

        <div class="content">
            <h4 class="motto">Happy shopping</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    We are under construction. Join us now
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                        <a href="{{ action('PageController@home', ['skip-welcome' => true]) }}"><button type="submit" class="btn btn-warning btn-fill">Goto Demo Page</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('welcomeassets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('welcomeassets/js/bootstrap.min.js') }}" type="text/javascript"></script>
</html>

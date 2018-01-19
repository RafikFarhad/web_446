<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sohayok from SUST CSE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{!! asset('/template') !!}/assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
    <!--For Plugins external css-->
    <link rel="stylesheet" href="{!! asset('/template') !!}/assets/css/plugins.css"/>
    <link rel="stylesheet" href="{!! asset('/template') !!}/assets/css/raleway-webfont.css"/>
    <!--Theme custom css -->
    <link rel="stylesheet" href="{!! asset('/template') !!}/assets/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{!! asset('/template') !!}/assets/css/responsive.css"/>
    <script src="{!! url('template/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') !!}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="logo.png" alt="" style="height: 50px"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="{!! route('home') !!}">Dashboard</a></li>
                @else
                    <li><a href="{!! route('login')!!}">Login</a></li>
                    <li><a href="{!! route('register')!!}">Register</a></li>
                @endif
                <li><a href="#our-skills">Running Viva</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Home page style-->
<header id="home" class="home">
    <div class="overlay-img">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="home-content">
                        <h1>সহায়ক</h1>
                        <p>An easy interface for handling Lab Courses</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


<section id="blog" class="sections">

    <div class="heading-content text-center">
        <div class="heading-title">
            <h3>Courses managed by us...</h3>
            <div class="separator"></div>
        </div>
        <div class="heading-separator"></div>
        {{--<div class="heading-details">--}}
        {{--<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim </p>--}}
        {{--</div>--}}
    </div>
    <div id="cd-timeline" class="cd-container">

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-location">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <p>26 October, 2017</p>
                <h2>Structuired Programming Language</h2>
                {{--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum--}}
                {{--dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>--}}
                <a href="#" class="cd-read-more">Details</a>
                <span class="cd-date"><i class="fa fa-flash" aria-hidden="true"></i></span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

    </div> <!-- cd-timeline -->

</section>


<!-- Sections -->
<section id="our-skills" class=" skills skill-bg">
    <div class="overlay-img">
        <div class="container sections text-center">
            <div class="skill-heading">
                <h4>Running vivas</h4>
            </div>
            <!-- Example row of columns -->
            <div class="row">
                <h1>No Viva Currently Running</h1>
                {{--<div class="col-sm-3 text-center">--}}
                    {{--<div class="main-skill">--}}
                        {{--<div class="chart-round">--}}
                            {{--<div class="chart">--}}
                                {{--<i class="fa fa-key" aria-hidden="true"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="skills-text">Marketing</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div> <!-- /container -->
    </div>
</section>


{{--<!-- Sections -->--}}
{{--<section id="twitter" class="sections different-bg">--}}
    {{--<div class="container text-center">--}}

        {{--<!-- Example row of columns -->--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">--}}
                {{--<div class="twitter-content">--}}
                    {{--<h5>LATEST FROM TWITTER</h5>--}}
                    {{--<p>Trying out velositey - a simple website building extension for Photoshop.</p>--}}
                    {{--<a target="_blank" href="#">buff.ly/NC8gog</a>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}

    {{--</div> <!-- /container -->--}}
{{--</section>--}}

{{--<!-- Sections -->--}}
{{--<section id="team" class="sections lightbg">--}}
    {{--<div class="container text-center">--}}
        {{--<div class="heading-content text-center">--}}

            {{--<h3>Our Team Members</h3>--}}

            {{--<div class="separator"></div>--}}

            {{--<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim </p>--}}

        {{--</div>--}}
        {{--<!-- Example row of columns -->--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="main-team">--}}
                    {{--<div class="team-details">--}}

                        {{--<img src="assets/images/team-img.jpg" alt=""/>--}}
                        {{--<div class="team-overlay"></div>--}}

                        {{--<div class="social">--}}
                            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="members-info">--}}
                        {{--<h4>Mitchell Anderson</h4>--}}
                        {{--<h6>Creative Director</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="main-team">--}}
                    {{--<div class="team-details">--}}

                        {{--<img src="assets/images/team-img.jpg" alt=""/>--}}
                        {{--<div class="team-overlay"></div>--}}

                        {{--<div class="social">--}}
                            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="members-info">--}}
                        {{--<h4>Mitchell Anderson</h4>--}}
                        {{--<h6>Creative Director</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="main-team">--}}
                    {{--<div class="team-details">--}}

                        {{--<img src="assets/images/team-img.jpg" alt=""/>--}}
                        {{--<div class="team-overlay"></div>--}}

                        {{--<div class="social">--}}
                            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="members-info">--}}
                        {{--<h4>Mitchell Anderson</h4>--}}
                        {{--<h6>Creative Director</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--</div> <!-- /container -->--}}
{{--</section>--}}

{{--CONTACT US--}}

{{--<section id="contact" class="sections lightbg">--}}
    {{--<div class="container">--}}

        {{--<div class="heading-content text-center">--}}
            {{--<div class="heading-title">--}}
                {{--<h3>Contact</h3>--}}
            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">--}}

                {{--<form>--}}
                    {{--<div class="col-md-6 col-sm-12 col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name*">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-6 col-sm-12 col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email*">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<textarea class="form-control txt-area" rows="5" placeholder="Message . . ."></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="submit-btn">--}}
                        {{--<button type="submit" class="btn btn-default abt-btn">Submit Query</button>--}}
                    {{--</div>--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}


<!--Footer-->
<footer id="footer" class="sections footer different-bg">

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                {{--<div class="footer-first-content">--}}
                    {{--<div class="logo"><img src="assets/images/footer-logo.png" alt="Company Logo"/></div>--}}
                    {{--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel--}}
                        {{--illum dolore.</p>--}}
                    {{--<p>eugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent--}}
                        {{--luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum--}}
                        {{--soluta</p>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                {{--<div class="footer-mid-content">--}}
                    {{--<h4>Recent Posts</h4>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Duis autem vel eum iriure dolor</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Duis autem vel eum iriure dolor</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Duis autem vel eum iriure dolor</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                {{--<div class="footer-mid-content">--}}
                    {{--<h4>Twitter Feeds</h4>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Good work buddy</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Good work buddy</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="post">--}}
                        {{--<div class="post-item">--}}
                            {{--<h6>March 30, 2014</h6>--}}
                            {{--<a href="#">Good work buddy</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                {{--<div class="footer-last-content">--}}
                    {{--<h4>Our Address</h4>--}}
                    {{--<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est--}}
                        {{--etiam processus dynamicus,luptatum zzril delenit augue duis dolore te feugait nulla facilisi.--}}
                        {{--Nam liber tempor cum soluta </p>--}}

                    {{--<div class="contact-info">--}}
                        {{--<p><i class="fa fa-map-marker"></i>Moonshine St. 14/05 Light</p>--}}
                        {{--<p><i class="fa fa-phone"></i>+00 (123) 456 78 90</p>--}}
                        {{--<p><i class="fa fa-envelope"></i>first.last@email.com</p>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}


    {{--</div>--}}

</footer>

<div class="scroll-top">

    <div class="scrollup">
        <i class="fa fa-angle-double-up"></i>
    </div>

</div>

<footer class="copyright-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>All rights reserved to SUST CSE 13</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{!! asset('/template') !!}/assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="{!! asset('/template') !!}/assets/js/vendor/bootstrap.min.js"></script>


<script src="{!! asset('/template') !!}/assets/js/jquery.easypiechart.min.js"></script>
<script src="{!! asset('/template') !!}/assets/js/plugins.js"></script>
<script src="{!! asset('/template') !!}/assets/js/modernizr.js"></script>
<script src="{!! asset('/template') !!}/assets/js/main.js"></script>

</body>
</html>

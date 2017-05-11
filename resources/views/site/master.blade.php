<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <link rel="shortcut icon" href="{{asset('polo')}}/images/favicon.png">
    <link rel="shortcut icon" href="{{asset('polo')}}/images/favicon.png">
    <title>SSM</title>
    <meta name="description" content="Themes &amp; Templates, software, plugins, code and scripts and much more. Save time, buy on dera.io It's a marketplace to buy and sell your work! ">

     <link href="{{asset('polo')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('polo')}}/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="{{asset('polo')}}/vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="{{asset('polo')}}/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('polo')}}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="{{asset('polo')}}/css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="{{asset('polo')}}/css/theme-elements.css" rel="stylesheet">

    <!-- Responsive classes -->
    <link href="{{asset('polo')}}/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->


    <!-- Template color -->
    <link href="{{asset('polo')}}/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

    <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('polo')}}/css/custom.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="{{asset('polo')}}/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="{{asset('polo')}}/vendor/plugins-compressed.js"></script>
    <style type="text/css">

        .body-overlay {
            background: rgba(0, 0, 0, 0.9);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1001;
            display: none;
        }
        #search-overlay-form {
            width: 96%;
            margin: 0 auto;
            padding: 20px 30px;
            color: #FFF;
        }
        #search-overlay-form input {
            background: transparent;
            border: none;
            font-size: 80px;
            line-height: 120px;
            width: 100%;
            color: #fff;
        }
        #search-overlay-form input,
        #search-overlay-form input:hover,
        #search-overlay-form input:focus {
            outline: none;
        }
        #search-overlay-form .fa-times {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 42px;
            cursor: pointer;
        }

        .suggestions {
            width: 94%;
            margin: 0 auto;
            color: #FFF;
        }
        .suggestions ul {
            list-style: none;
        }
        .suggestions ul li {
            font-size: 3em;
            line-height: 1.5em;
        }
        .suggestions ul li a {
            color: #CCC;
        }
        .suggestions ul li a:hover {
            color: #FFF;
            text-decoration: underline !important;
        }
        .pointer {
            cursor: pointer;
        }
    </style>

</head>

<body class="wide">


<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header id="header" class="header">
        <div id="header-wrap">
            <div class="container">

                <!--LOGO-->
                <div id="logo">
                    <a href="{{url('/')}}" class="logo" data-dark-logo="{{asset('polo')}}/images/logo-dark.png">
                        <img src="{{asset('polo')}}/images/logo.png" alt="Polo Logo">
                    </a>
                </div>
                <!--END: LOGO-->

                <!--MOBILE MENU -->
                <div class="nav-main-menu-responsive">
                    <button class="lines-button x">
                        <span class="lines"></span>
                    </button>
                </div>
                <!--END: MOBILE MENU -->

                <!--SHOPPING CART -->

                <!--END: SHOPPING CART -->

                <!--TOP SEARCH -->
                <div id="top-search">
                    <a class="search-trigger pointer"><i class="fa fa-search"></i></a>
                </div>
                <!--END: TOP SEARCH -->

                <!--NAVIGATION-->
                <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                    <div class="container">
                        <nav id="mainMenu" class="main-menu mega-menu">
                            <ul class="main-menu nav nav-pills">
                                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a>
                                </li>
                                <li><a href="{{route('client-area.orders.index')}}">Orders<span class="label label-danger infinit">HOT</span></a></li>




                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else{{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                                <li class="dropdown">

                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px">
                                       <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px;height: 32px;border-radius: 45%;">
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/profile') }}"><i class="fa fa-btn user"></i>Profile</a></li>
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/message')}}"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>Inbox</a>
                                <li><a href="{{route('admin.index')}}">Backend</a></li>
                                @endif


                                {{--




                                                     --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--END: NAVIGATION-->
            </div>
        </div>
    </header>
    <!-- END: HEADER -->


    @yield('content')



    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free account</h3>
                        <p>Free offers</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide Services</h3>
                        <p>We works with big Companies</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: DELIVERY INFO -->

    <!-- FOOTER -->
    <footer class="background-dark text-grey" id="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="footer-logo float-left">
                            <a>
                                <img src="{{asset('polo')}}/images/icon128.png" alt="Polo Logo">
                            </a>
                        </div>
                       <p><b>Earn Money Selling Digital Products You Create</b></p>



                     {{--   <div class="seperator seperator-dark seperator-simple"></div>
                        <div class="row">
                            <div class="col-md-12 text-right text-grey">
                                <!-- <div class="copyrights-menu copyright-links clearfix">
                                    <strong>SERVICES:</strong>
                                    <a href="#">Become Seller</a>/<a href="#">Affiliate</a>/<a href="#">Forum</a>/<a href="#">Help Center</a>/<a href="#">Contact</a>/<a href="#">Market Licenses</a>
                                </div> -->
                            </div>
                            <div class="col-md-2">
                                <div class="widget clearfix widget-categories">
                                    <ul class="list list-arrow-icons">
                                        <li><a href="#">Become Seller</a></li>
                                        <li><a href="#">Become Affiliate</a></li>
                                        <li><a href="#">Seller Terms</a></li>
                                        <li><a href="#">Affiliate Terms</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget clearfix widget-categories">
                                     <ul class="list list-arrow-icons">
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Resource Center</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Market Terms</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget clearfix widget-categories">
                                    <ul class="list list-arrow-icons">
                                        <li><a href="#">Top Authors</a></li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Suggest Item</a></li>
                                        <li><a href="#">Community Forum</a></li>
                                        <li><a href="#">Contact Team</a></li>
                                    </ul>
                                </div>
                            </div>
                            --}}
                           {{-- <div class="col-md-5 col-md-offset-1">
                                <div class="widget clearfix widget-newsletter">
                                    <form id="widget-subscribe-form" action="include/subscribe-form.php" role="form" method="post" class="form-inline">
                                        <h4 class="widget-title">Newsletter</h4>
                                        <small>Stay informed on our latest news!</small>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                            <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
                                            <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary">Subscribe</button>
                                        </span>
                                        </div>
                                    </form>
                                    --}}
                                    <script type="text/javascript">
                                        jQuery("#widget-subscribe-form").validate({
                                            submitHandler: function(form) {
                                                jQuery(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function(text) {
                                                        if (text.response == 'success') {
                                                            $.notify({
                                                                message: "You have successfully subscribed to our mailing list."
                                                            }, {
                                                                type: 'success'
                                                            });
                                                            $(form)[0].reset();

                                                        } else {
                                                            $.notify({
                                                                message: text.message
                                                            }, {
                                                                type: 'warning'
                                                            });
                                                        }
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

    </footer>
                </div>

            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-md-6">
                        &copy; 2016 System Sale Manager. All Rights Reserved.
                    </div>
                    <div class="col-md-6"><div class="social-icons">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: FOOTER -->
    <div class="body-overlay">
        <form id="search-overlay-form" role="search" method="GET" action="http://codepen.io/NelBarnatia/pen/KdKbLV" autocomplete="off">
            <input type="search" placeholder="Type search term &amp; hit enter" name="q" value="" class="text-medium">
            <span class="fa fa-times"></span>
        </form>
        <div class="suggestions">
            <ul>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- END: WRAPPER -->

<!-- GO TOP BUTTON -->
<!-- <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a> -->

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('polo')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript">

    var canvas = $('canvas')[0];
    var context = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var Dots = [];
    var colors = ['#FF9900', '#FFFFFF', '#BCBCBC', '#3299BB'];
    var maximum = canvas.width > 1000 ? 200 : 100;

    function Initialize() {
        GenerateDots();

        Update();
    }

    function Dot() {
        this.active = true;

        this.diameter = Math.random() * 5;

        this.x = Math.round(Math.random() * canvas.width);
        this.y = Math.round(Math.random() * canvas.height);

        this.velocity = {
            x: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.7,
            y: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.7
        };

        this.alpha = 0.1;
        this.hex = colors[Math.round(Math.random() * 3)];
        this.color = HexToRGBA(this.hex, this.alpha);
    }

    Dot.prototype = {
        Update: function() {
            if(this.alpha < 0.8) {
                this.alpha += 0.01;
                this.color = HexToRGBA(this.hex, this.alpha);
            }

            this.x += this.velocity.x;
            this.y += this.velocity.y;

            if(this.x > canvas.width + 5 || this.x < 0 - 5 || this.y > canvas.height + 5 || this.y < 0 - 5) {
                this.active = false;
            }
        },

        Draw: function() {
            context.fillStyle = this.color;
            context.beginPath();
            context.arc(this.x, this.y, this.diameter, 0, Math.PI * 2, false);
            context.fill();
        }
    }

    function Update() {
        GenerateDots();

        Dots.forEach(function(Dot) {
            Dot.Update();
        });

        Dots = Dots.filter(function(Dot) {
            return Dot.active;
        });

        Render();
        requestAnimationFrame(Update);
    }

    function Render() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        Dots.forEach(function(Dot) {
            Dot.Draw();
        });
    }

    function GenerateDots() {
        if(Dots.length < maximum) {
            for(var i = Dots.length; i < maximum; i++) {
                Dots.push(new Dot());
            }
        }

        return false;
    }

    function HexToRGBA(hex, alpha) {
        var red = parseInt((TrimHex(hex)).substring(0, 2), 16);
        var green = parseInt((TrimHex(hex)).substring(2, 4), 16);
        var blue = parseInt((TrimHex(hex)).substring(4, 6), 16);

        return 'rgba(' + red + ', ' + green + ', ' + blue + ', ' + alpha + ')';
    }

    function TrimHex(hex) {
        return (hex.charAt(0) == "#") ? hex.substring(1, 7) : h;
    }

    $(window).resize(function() {
        Dots = [];
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });

    Initialize();

    // $(window).bind('resize', Initialize);
    $(document).on('ready',function(e){
        var $searchOverlay = $('.body-overlay'),
                $searchTrigger = $('.search-trigger'),
                $search = $('#search-overlay-form input[type="search"]');


        $(".basket-trigger").click(function(e){
            e.preventDefault();
            e.stopImmediatePropagation();
            $(this).next('.basket-content').toggleClass('open-basket');
        });

        $('.mobile-toggle').click(function(e){
            e.preventDefault();
            $('#header-nav nav').toggleClass('open-nav');
        });

        $searchTrigger.click(function(e){
            $searchOverlay.fadeIn(500);
            $search.focus();
        });

        $searchOverlay.find('.fa-times').click(function(e){
            $searchOverlay.fadeOut(500);
        });

        $search.keyup(function(e){
            if (e.keyCode == 27) {
                console.log($(this).val());
                $searchOverlay.find('.fa-times').click();
            }
        });

        $('.search-trigger')

        $(window).scroll(function() {
            if ($(window).scrollTop() > 20) {
                $("body").addClass("scrolled");
            }else{
                $("body").removeClass("scrolled");
            }
        });
    });
    var TxtRotate = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 300 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('txt-rotate');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };

</script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('polo')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('polo')}}/js/theme-functions.js"></script>

<!-- Custom js file -->
<script src="{{asset('polo')}}/js/custom.js"></script>


</body>
</html>

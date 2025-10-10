<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY - OHOFN</title>
    <meta name="description" content="">

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing_page/images/logo/logo.avif') }}">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet'
        type='text/css'>

    <!-- CSS Style -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/bootstrap.min.css') }}">

    <!-- font-awesome & simple line icons CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/font-awesome.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/simple-line-icons.css') }}" media="all">

    <!-- owl.carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/owl.transitions.css') }}">

    <!-- animate CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/animate.css') }}" media="all">

    <!-- flexslider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/flexslider.css') }}">

    <!-- jquery-ui.min CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/jquery-ui.css') }}">

    <!-- Mean Menu CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/meanmenu.min.css') }}">

    <!-- nivo-slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/nivo-slider.css') }}">

    <!-- style CSS -->
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/style.css') }}" media="all">
</head>

<body class="cms-index-index cms-home-page">

    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

    <div id="">

        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- Default Welcome Message -->
                                <span class="phone hidden-xs"><i class="fa fa-phone fa-lg"></i> 07033114978,
                                    09166740555</span>
                                <div class="welcome-msg"><span><i class="fa fa-envelope-o fa-lg"></i></span>
                                    info@olivecommunitydevelopmentinitiative.org </div>

                            </div>

                            <!-- top links -->
                            <div class="headerlinkmenu col-lg-6 col-md-6 col-sm-6 hidden-xs text-right">
                                <div class="links">
                                    <div class="hidden-xs">Follow us on</div>
                                    <div class="hidden-xs"><a class="fa fa-facebook" title="Facebook"
                                            href="https://web.facebook.com/OliveCommunity/"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-instagram" title="Instagram"
                                            href="donate.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-twitter" title="Twitter"
                                            href="donate.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-google-plus" title="Google Plus"
                                            href="donate.php.html#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <!-- Header Logo -->
                            <div class="logo"><a title="OCDI Logo" href="{{ url('/') }}"><img alt="LOGO"
                                        src="{{ asset('landing_page/images/logo/logo.avif') }}"></a> </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-sm-8 hidden-xs">
                            <ul class="top-info">
                                <li>
                                    <div class="info-box">
                                        <span class="info-icon">
                                            <i class="fa fa-map-marker fa-lg"></i>
                                        </span>
                                        <div class="info-box-content">
                                            <p class="info-box-title">Primary Health Care Hospital Giri Junction,</p>
                                            <p class="info-box-subtitle">Gwagwalada Abuja, Nigeria</p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box">
                                        <span class="info-icon">
                                            <i class="fa fa-compass fa-lg"></i>
                                        </span>
                                        <div class="info-box-content">
                                            <p class="info-box-title">Mon-Fri(8AM-5PM)</p>
                                            <p class="info-box-subtitle">Sat&Sun Closed</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- Start Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hidden-xs">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="custom-menu" id="home"><a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li class="" id="about"><a href="{{ route('about_us') }}">About
                                            us</a>
                                    </li>


                                    <li id="gallery"><a href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li id="contacts"><a href="{{ route('contact_us') }}">Contact</a>
                                    </li>
                                    <li id="Resources"><a href="{{ route('resources') }}">Resources</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Signup -->
                            <p class="top-Signup"><a href="{{ route('donation') }}" class="dona"
                                    role="button">Donate</a></p>
                            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog"
                                aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <img id="img_logo" src="images/logo.png"
                                                alt="logo">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"> <span class="glyphicon glyphicon-remove"
                                                    aria-hidden="true"></span> </button>
                                        </div>
                                        <div id="div-forms">
                                            <form id="login-form">
                                                <div class="modal-body">
                                                    <div id="div-login-msg"> <span id="text-login-msg">Username or
                                                            email
                                                            address </span> </div>
                                                    <input id="login_username" class="form-control" type="text"
                                                        placeholder="Username" required>
                                                    <input id="login_password" class="form-control" type="password"
                                                        placeholder="Password" required>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox">
                                                            Remember me </label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div>
                                                        <button type="submit" class="btn-login">Login</button>
                                                    </div>
                                                    <div>
                                                        <button onclick="location.href='account_page.html'"
                                                            id="login_register_btn" type="button"
                                                            class="btn btn-link">Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END # MODAL LOGIN -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Menu Area -->

        <!-- Start Mobile Menu -->
        <div class="mobile-menu hidden-sm hidden-md hidden-lg">
            <nav><span class="mobile-menu-title">Menu</span>
                <ul>
                    <li class=""><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class=""><a href="{{ route('about_us') }}">About
                            us</a>
                    </li>

                    </li>
                    <li><a href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class=""><a href="{{ route('contact_us') }}">Contact</a>
                    </li>
                    <li><a href="{{ route('donation') }}" class="dona">Donate</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Mobile Menu -->
        <section class="page-title-banner about-page">
            <div class="container">
                <h2>Donate Now</h2>
                <ul class="breadcrum">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('donation') }}">Donate</a></li>
                </ul> <!-- .breadcrumbs ends -->
            </div> <!-- .container ends -->
        </section> <!-- .page-title-banner ends -->
        <section class="abouttext">
            <div class="auto-container">
                <div class="row clearfix text-center">
                    <h2>HELP US TO IMPROVE LIVES, YOUR DONATION WILL GO A LONG WAY.</h2>
                    <div class="bigtext text-center">
                    </div>
                    <p>OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY (OHOFN) is a Non-governmental, non-religious,
                        non-political and non-profit making organization with commitment to support community
                        development programs by generating relationships to foster human and community development. This
                        is achieved by linking community based organizations to various opportunities and support that
                        exist for rural/community development as the need arises. Community based organizations, Faith
                        based organizations, youth organizations and women groups are in turn supported in designing,
                        implementing and sustaining their own programs.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- START panel-->
                        <div class="panel panel-default">
                            <div class="panel-heading">Fill the form below and click on Donate Now button ( Fields with
                                * are required )</div>
                            <div class="panel-body">
                                <form method="" action="donate.php.html" class="donate" name="don"
                                    id="don">
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Name * : </label>
                                        <div class="col-lg-10 oup">
                                            <input type="text" placeholder="Your Name" name="name"
                                                id="name" class="form-control chec-n">
                                            <span id="error_name" class="text-danger cec-n"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Address : </label>
                                        <div class="col-lg-10 oup">
                                            <textarea type="text" placeholder="Enter your address here" name="address" id="address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Email * : </label>
                                        <div class="col-lg-10 oup">
                                            <input type="text" placeholder="Email address" name="email"
                                                id="email" class="form-control chec-e">
                                            <span id="error_email" class="text-danger cec-e"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Phone No * : </label>
                                        <div class="col-lg-10 oup">
                                            <input type="text" placeholder="Phone Number" name="phone"
                                                id="phone" class="form-control chec-p">
                                            <span id="error_phone" class="text-danger cec-p"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Purpose : </label>
                                        <div class="col-lg-10 oup">
                                            <select name="purpose" id="purpose" class="form-control">
                                                <option value="">Select the project you are donating for</option>
                                                <option value="OLIVE WOMEN SUPPORT PROGRAM (OLIVE-WSP)">OLIVE WOMEN
                                                    SUPPORT PROGRAM (OLIVE-WSP)</option>
                                                <option value="OLIVE GIRL CHILD SUPPORT PROGRAM (OLIVE-GSP)">OLIVE GIRL
                                                    CHILD SUPPORT PROGRAM (OLIVE-GSP)</option>
                                                <option value="MEDICAL OUTREACH TO ANAMBRA STATE">MEDICAL OUTREACH TO
                                                    ANAMBRA STATE</option>
                                                <option
                                                    value="COMMEMORATING THE INTERNATIONAL DAY AGAINST  DRUG ABUSE AND ILLICIT TRAFFICKING">
                                                    COMMEMORATING THE INTERNATIONAL DAY AGAINST DRUG ABUSE AND ILLICIT
                                                    TRAFFICKING</option>
                                                <option value=" INTERNATIONAL MENSTRUAL HYGIENE DAY"> INTERNATIONAL
                                                    MENSTRUAL HYGIENE DAY</option>
                                                <option value=" OLIVE GIRL CHILD SUMMIT AUGUST 2018"> OLIVE GIRL CHILD
                                                    SUMMIT AUGUST 2018</option>
                                                <option value=" OLIVE HOUSEHOLD ECONOMIC STRENGTHENING PROGRAM"> OLIVE
                                                    HOUSEHOLD ECONOMIC STRENGTHENING PROGRAM</option>
                                                <option value="OLIVE GIRL CHILD SUMMIT AUGUST 2018	">OLIVE GIRL CHILD
                                                    SUMMIT AUGUST 2018 </option>
                                                <option value="INTERNATIONAL DAY OF THE GIRL CHILD">INTERNATIONAL DAY
                                                    OF THE GIRL CHILD</option>
                                                <option value="OLIVE WOMEN SUPPORT PROGRAM (OLIVE-WSP)">OLIVE WOMEN
                                                    SUPPORT PROGRAM (OLIVE-WSP)</option>
                                                <option value="MEDICAL OUTREACH AT EYENKORIN MARKET ">MEDICAL OUTREACH
                                                    AT EYENKORIN MARKET </option>
                                                <option value="SCIENCE FAIR COMPETITION">SCIENCE FAIR COMPETITION
                                                </option>
                                                <option
                                                    value="OLIVE SENSITIZATION ON RESILIENCE AND SEXUAL AND REPRODUCTIVE HEALTH RIGHTS">
                                                    OLIVE SENSITIZATION ON RESILIENCE AND SEXUAL AND REPRODUCTIVE HEALTH
                                                    RIGHTS</option>
                                                <option value=" KNOW YOUR SEXUAL AND REPRODUCTIVE HEALTH RIGHTS"> KNOW
                                                    YOUR SEXUAL AND REPRODUCTIVE HEALTH RIGHTS</option>
                                                <option value="2017 Annual Report">2017 Annual Report</option>
                                                <option value="2018 Annual Report">2018 Annual Report</option>
                                                <option value=" Zero Tolerance Against Female Genital Mutilation.">
                                                    Zero Tolerance Against Female Genital Mutilation.</option>
                                                <option value="World Cancer Day Commemoration 2019">World Cancer Day
                                                    Commemoration 2019</option>
                                                <option value="OLIVE GIRL CHILD SUPPORT PROGRAM (OLIVE-GSP)">OLIVE GIRL
                                                    CHILD SUPPORT PROGRAM (OLIVE-GSP)</option>
                                                <option value="OLIVE SENSITIZATION ON CHILD SEXUAL ABUSE">OLIVE
                                                    SENSITIZATION ON CHILD SEXUAL ABUSE</option>
                                                <option value="OLIVE GIRL CHILD SUPPORT PROGRAM (OLIVE-GSP)">OLIVE GIRL
                                                    CHILD SUPPORT PROGRAM (OLIVE-GSP)</option>
                                                <option value="MY BODY IS MY BODY SENSITIZATION">MY BODY IS MY BODY
                                                    SENSITIZATION</option>
                                                <option value="OLIVE DRUG SENSITIZATION">OLIVE DRUG SENSITIZATION
                                                </option>
                                                <option value="FUNDRAISING FOR KIDS THROUGH GLOBALGIVING">FUNDRAISING
                                                    FOR KIDS THROUGH GLOBALGIVING</option>
                                                <option value="16 DAYS OF ACTIVISM">16 DAYS OF ACTIVISM</option>
                                                <option
                                                    value="OLIVE HOUSEHOLD ECONOMIC AND LIVELIHOOD PROGRAMME (OLIVE HELP)">
                                                    OLIVE HOUSEHOLD ECONOMIC AND LIVELIHOOD PROGRAMME (OLIVE HELP)
                                                </option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 text-center">Amount(NGR) * : </label>
                                        <div class="col-lg-10 oup">
                                            <input type="number" placeholder="Amount in naira" name="amount"
                                                id="amount" class="form-control chec-a">
                                            <span id="error_amount" class="text-danger cec-a"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <script src="https://js.paystack.co/v1/inline.js"></script>
                                            <button type="button" onclick="checkValid()"
                                                class="btn btn-lg btn-danger">Donate Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-heading" id="thanks"
                                style="background-color:#dff0d8; display: none;">Thanks for the generous donation.
                                We'll keep you updated.</div>
                        </div>
                        <!-- END panel-->
                    </div>
                </div>
            </div>
        </section>

        <!-- our clients Slider -->
        <div class="our-clients">
            <div class="text-center">
                <h2>OUR PARTNERS</h2>
            </div>
            <div class="slider-items-products">
                <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        <div class="item"><img src="{{asset('landing_page/images/191035af2decb24cab.jpg')}}" alt="USAID"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-service">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="bottom-service-box">
                        <div class="box-outer">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="service-box-center"> <span class="bottom-service-title">Education</span>
                                    <div class="description">
                                        <div class="heading">Community Development!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                <div class="service-box-center"> <span class="bottom-service-title">Environment</span>
                                    <div class="description">
                                        <div class="heading">Volunteering!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                <div class="service-box-center"> <span class="bottom-service-title">Partnership</span>
                                    <div class="description">
                                        <div class="heading">Donors and Volunteers </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                <div class="service-box-center"> <span class="bottom-service-title">Advocacy</span>
                                    <div class="description">
                                        <div class="heading">Community Involvement</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
        <div class="footer-newsletter" id="footlt">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <div class="footer-logo"><a
                                href="https://www.olivecommunitydevelopmentinitiative.org/index.html"><img
                                    src="{{ asset('landing_page/images/logo/logo.avif') }}" alt="ocdi"></a>
                            <p>Agent of postive change</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3 class="">Sign up for newsletter</h3>
                        <span>Get the latest update and activity from us</span>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <form id="newsletter-validate-detail" data-parsley-validate="" novalidate="" method="post"
                            action="https://www.olivecommunitydevelopmentinitiative.org/action.php">
                            <div class="newsletter-inner">
                                <input class="newsletter-email" type="email" data-parsley-type="email"
                                    name='email' placeholder='Enter Your Email' />
                                <button class="button subscribe" type="submit" name="subscribe"
                                    title="Subscribe">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
                    <div class="footer-links">
                        <h3 class="links-title">Our Quick Links<a class="expander visible-xs"
                                href="index.html#TabBlock-1">+</a></h3>
                        <div class="tabBlock" id="TabBlock-1">
                            <ul class="list-links list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="{{ route('contact_us') }}">Contact Us</a>
                                </li>
                                <li><a href="{{ route('gallery') }}">Gallery
                                    </a></li>
                                <li><a href="{{ route('resources') }}">Resources
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
                    <h3 class="links-title">Contact us</h3>
                    <div class="footer-content">
                        <div class="email"> <i class="fa fa-envelope"></i>
                            <p>info@olivecommunitydevelop-
                                mentinitiative.org</p>
                        </div>
                        <div class="phone"> <i class="fa fa-phone"></i>
                            <p>07033114978, 09166740555</p>
                        </div>
                        <div class="address"> <i class="fa fa-map-marker"></i>
                            <p> Primary Health Care Hospital Giri Junction,

                                Gwagwalada Abuja, Nigeria</p>
                        </div>
                    </div>
                    <div class="social">
                        <ul class="inline-mode">
                            <li class="social-network fb"><a title="Connect us on Facebook" target="_blank"
                                    href="https://www.facebook.com/OliveCommunity"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-network tw"><a title="Connect us on Twitter" target="_blank"
                                    href="https://twitter.com/OcdiKwara"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank"
                                    href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank"
                                    href="https://instagram.com/olivecommunitydev"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-coppyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 coppyright"> Built @ 2025 <a href="{{ url('/') }}">
                            OHOFN</a>. All Rights Reserved. </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="payment">
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <a href="donate.php.html#" class="totop"> </a> <!-- End Footer -->


    </div>

    <!-- JS -->
    <!-- JS -->

    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery.min.js') }}"></script>

    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>

    <!-- Mean Menu js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery.meanmenu.min.js') }}"></script>

    <!-- owl.carousel.min js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/owl.carousel.min.js') }}"></script>

    <!-- bxslider js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery.bxslider.js') }}"></script>

    <!--jquery-ui.min js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery-ui.js') }}"></script>

    <!-- countdown js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/countdown.js') }}"></script>

    <!-- wow JS -->
    <script type="text/javascript" src="{{ asset('landing_page/js/wow.min.js') }}"></script>



    <!-- main js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/main.js') }}"></script>

    <!-- nivo slider js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery.nivo.slider.js') }}"></script>

    <!-- flexslider js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/jquery.flexslider.js') }}"></script>

    <!-- parsley js -->
    <script type="text/javascript" src="{{ asset('landing_page/js/parsley.min.js') }}"></script>

    <!-- Hot Deals Timer 1-->
    <script type="text/javascript">
        var dthen1 = new Date("02/07/18 11:59:00 PM");
        start = "02/05/18 03:02:11 PM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
    <!--gallery lightbox-->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
</body>

</html>
<script>
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    function myValid(x, y, z) {
        $(x).change(function() {
            if ($(x).val() != '') {
                $(x).removeClass("has-error");
                $(y).text("");
            } else if ($(x).val() == '') {
                $(x).addClass("has-error");
                $(y).text(z);
            }
        })
    }

    function myValid_email(w, x, y, z) {
        $(w).change(function() {
            if ($(w).val() != '') {
                if (!filter.test($(w).val())) {
                    $(w).addClass("has-error");
                    $(x).text(z);
                } else {
                    $(w).removeClass("has-error");
                    $(x).text("");
                }
            } else if ($(w).val() == '') {
                $(w).addClass("has-error");
                $(x).text(y);
            }
        })
    }
    myValid(".chec-n", ".cec-n", "Please enter your Name");
    myValid_email(".chec-e", ".cec-e", "Please enter your Email", "Enter a valid Email");
    myValid(".chec-p", ".cec-p", "Please enter your Phone Number");
    myValid(".chec-a", ".cec-a", "Please enter the Amount you are donating");

    function checkValid() {
        var error_name = '';
        var error_email = '';
        var error_phone = '';
        var error_amount = '';

        if ($.trim($('#name').val()).length == 0) {
            error_name = 'Please enter your Name';
            $('#error_name').text(error_name);
            $('#name').addClass('has-error');
        } else {
            error_name = '';
            $('#error_name').text(error_name);
            $('#name').removeClass('has-error');
        }

        if ($.trim($('#email').val()).length == 0) {
            error_email = 'Please enter your Email';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        } else {
            if (!filter.test($('#email').val())) {
                error_email = 'Enter a valid Email';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
                error_email = '';
                $('#error_email').text(error_email);
                $('#email').removeClass('has-error');
            }
        }

        if ($.trim($('#phone').val()).length == 0) {
            error_phone = 'Please enter your Phone Number';
            $('#error_phone').text(error_phone);
            $('#phone').addClass('has-error');
        } else {
            error_phone = '';
            $('#error_phone').text(error_phone);
            $('#phone').removeClass('has-error');
        }

        if ($.trim($('#amount').val()).length == 0) {
            error_amount = 'Please enter the Amount you are donating';
            $('#error_amount').text(error_amount);
            $('#amount').addClass('has-error');
        } else {
            error_amount = '';
            $('#error_amount').text(error_amount);
            $('#amount').removeClass('has-error');
        }

        if (error_name != '' || error_email != '' || error_phone != '' || error_amount != '') {
            return false;
        } else {
            payWithPaystack();
        }
    }
</script>
<script>
    function payWithPaystack() {

        var address = $.trim($("#address").val());
        var email = $.trim($("#email").val());
        var purpose = $.trim($("#purpose").val());
        var amount = $.trim($("#amount").val());
        var phone = $.trim($("#phone").val());
        var name = $.trim($("#name").val());
        var handler = PaystackPop.setup({
            key: 'pk_live_3e295b37c3a88b0467110a05afbd21df5ba2bf31',
            email: email,
            amount: amount * 100,
            ref: '' + Math.floor((Math.random() * 1000000000) +
            1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [{
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "phone"
                }]
            },
            callback: function(response) {
                //alert('success. transaction ref is ' + response.reference);
                $.ajax({
                    type: "POST",
                    url: "donate_action.php",
                    data: $("#don").serialize(), // serializes the form's elements.
                    success: function(data) {
                        $("#don")[0].reset();
                        $("#thanks").css("display", "block");
                        setTimeout(function() {
                            $("#thanks").css("display", "none");
                        }, 10000);
                    }

                });
            },
            onClose: function() {

                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>

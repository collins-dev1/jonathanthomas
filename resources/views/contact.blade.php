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
                                            href="contact.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-twitter" title="Twitter"
                                            href="contact.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-google-plus" title="Google Plus"
                                            href="contact.php.html#"></a></div>
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
                                <li id="Resources"><a href="{{ route('blog') }}">Blog</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Signup -->
                        <p class="top-Signup"><a href="{{ route('donation') }}" class="dona"
                                role="button">Donate</a></p>

                        <!-- END # MODAL LOGIN -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

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
                <li>
                    <a href="{{route('blog')}}">Blog</a>
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
            <h2>Contact Us</h2>
            <ul class="breadcrum">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('contact_us') }}">Contact</a></li>
            </ul> <!-- .breadcrumbs ends -->
        </div> <!-- .container ends -->
    </section> <!-- .page-title-banner ends -->
    <section class="contact-options section-block">
        <div class="container">
            <div class="section-title text-center">
                <p class="leadz">
                    Thank you for visiting our website. You can get in touch with us through a call, mail, filling the
                    form below or visiting us at our office. We would gladly attend to you.
                </p>
            </div> <!-- .section-title ends -->

            <h2 class="sr-only">Contact Us</h2>
            <div class="row section-content text-center">
                <div class="col-md-4 address-block">
                    <div class="icon-block">
                        <i class="fa fa-map-marker"></i>
                    </div> <!-- .icon-block ends -->
                    <address>Primary Health Care Hospital Giri Junction, <br> Gwagwalada Abuja, Nigeria</address>
                </div> <!-- .col-md-4 address-block ends -->

                <div class="col-md-4 phone-block">
                    <div class="icon-block">
                        <i class="fa fa-phone"></i>
                    </div> <!-- .icon-block ends -->
                    <a href="tel:2347033114978">+ 2347033114978</a>
                    <a href="tel:2349166740555">+ 2349166740555</a>
                </div> <!-- .col-md-4 address-block ends -->

                <div class="col-md-4 email-block">
                    <div class="icon-block">
                        <i class="fa fa-envelope"></i>
                    </div> <!-- .icon-block ends -->
                    <a
                        href="mailto:info@olivecommunitydevelopmentinitiative.org">info@olivecommunitydevelopmentinitiative.org</a>
                    <a
                        href="mailto:support@olivecommunitydevelopmentinitiative.org">support@olivecommunitydevelopmentinitiative.org</a>
                </div> <!-- .col-md-4 address-block ends -->

            </div> <!-- .row contend-block ends -->
        </div> <!-- .container ends -->
    </section> <!-- .contact-options section-block ends -->

    <section class="form-map section-block">
        <div class="container">
            <h2 class="block-title">Contact Form</h2>
            <div class="row section-content">
                <div class="col-md-12 form-block">

                    <div class="form-message">
                        <p></p>
                    </div>

                    <form class="" id="redone-contact" data-parsley-validate="" novalidate="" method="POST"
                        action="{{route('create_info')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name * </label>
                                    <input type="text" class="form-control" required="required"
                                        data-parsley-maxlength="70" id="name" name="name"
                                        placeholder="Not more than 70 characters">
                                </div> <!-- .form-group ends -->

                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" class="form-control" data-parsley-maxlength="70"
                                        data-parsley-type="email" id="email" name="email"
                                        placeholder="Not more than 70 characters">
                                </div> <!-- .form-group ends -->

                                <div class="form-group">
                                    <label>Phone No * </label>
                                    <input type="text" class="form-control" required="required"
                                        data-parsley-maxlength="50" id="url" name="phone"
                                        placeholder="Not more than 50 characters">
                                </div> <!-- .form-group ends -->
                            </div> <!-- .col-md-6 ends -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Subject * </label>
                                    <input type="text" class="form-control" required="required"
                                        data-parsley-maxlength="100" id="url" name="subject"
                                        placeholder="Not more than 100 characters">
                                </div>
                                <div class="form-group">
                                    <label>Message * </label>
                                    <textarea class="form-control" id="message" required="required" data-parsley-maxlength="200" name="message"
                                        placeholder="Not more than 200 characters..."></textarea>
                                </div>
                            </div> <!-- .col-md-6 ends -->
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-main pull-right"
                                    name="c_submit">Submit</button>
                            </div>
                        </div> <!-- .row ends -->
                    </form> <!-- .redone-contact ends -->
                </div> <!-- .col-md-6 form-block ends -->


            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .form-map section-block ends -->
    <!-- our clients Slider -->
    <div class="our-clients">
        <div class="text-center">
            <h2>OUR PARTNERS</h2>
        </div>
        <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    <div class="item"><img src="{{ asset('landing_page/images/191035af2decb24cab.jpg') }}"
                            alt="USAID"></div>
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
                                <li><a href="{{ route('blog') }}">Blog
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
    <a href="contact.php.html#" class="totop"> </a> <!-- End Footer -->


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
    $('#contacts').addClass('active');
</script>

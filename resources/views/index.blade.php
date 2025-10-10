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
                                            href="index.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-twitter" title="Twitter"
                                            href="index.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-google-plus" title="Google Plus"
                                            href="index.html#"></a></div>
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
                                <li id="Resources"><a href="{{ route('resources') }}">Resources</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Signup -->
                        <p class="top-Signup"><a href="{{ route('donation') }}" class="dona"
                                role="button">Donate</a></p>
                        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true"
                            style="display: none;">
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
                                                <div id="div-login-msg"> <span id="text-login-msg">Username or email
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
    <!-- Main Slider Area -->
    <div class="main-slider-area">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <!-- Main Slider -->
                    <div class="main-slider">
                        <div class="slider">
                            <div id="mainSlider" class="nivoSlider slider-image">
                                <img src="{{ asset('landing_page/images/133185609160dc4b6f46b1e.jpg') }}"
                                    alt="main slider" title="#htmlcaption1" />
                                <img src="{{ asset('landing_page/images/slider/145805b08194a693e3.jpg') }}"
                                    alt="main slider" title="#htmlcaption2" />
                                <img src="{{ asset('landing_page/images/slider/177675b081aec4b94c.jpg') }}"
                                    alt="main slider" title="#htmlcaption3" />
                                <img src="{{ asset('landing_page/images/slider/252525b081ba06dee4.jpg') }}"
                                    alt="main slider" title="#htmlcaption4" />
                                <img src="{{ asset('landing_page/images/slider/102535b081c15d31a2.jpg') }}"
                                    alt="main slider" title="#htmlcaption5" />
                                <img src="{{ asset('landing_page/images/slider/167045b081d4e0c191.jpg') }}"
                                    alt="main slider" title="#htmlcaption6" />
                                <img src="{{ asset('landing_page/images/160224699560c32870b6b9a.jpg') }}"
                                    alt="main slider" title="#htmlcaption7" />
                                <img src="{{ asset('landing_page/images/199335046460c3288b3b541.jpg') }}"
                                    alt="main slider" title="#htmlcaption8" />
                                <img src="{{ asset('landing_page/images/slider/6452313460c329e842afa.jpg') }}"
                                    alt="main slider" title="#htmlcaption9" />
                                <img src="{{ asset('landing_page/images/slider/212272842060c32abfb6078.jpg') }}"
                                    alt="main slider" title="#htmlcaption10" />
                                <img src="{{ asset('landing_page/images/slider/55929121160dda1856a139.jpg') }}"
                                    alt="main slider" title="#htmlcaption11" />
                                <img src="{{ asset('landing_page/images/slider/108234396668c95fa3574a5.jpg') }}"
                                    alt="main slider" title="#htmlcaption12" />
                                <img src="{{ asset('landing_page/images/slider/62679469268c960347e3bb.jpg') }}"
                                    alt="main slider" title="#htmlcaption13" />
                                <img src="{{ asset('landing_page/images/slider/79489682868c961504f101.jpg') }}"
                                    alt="main slider" title="#htmlcaption14" />
                                <img src="{{ asset('landing_page/images/slider/40688294568c9623895611.jpg') }}"
                                    alt="main slider" title="#htmlcaption15" />
                                <img src="{{ asset('landing_page/images/slider/57935143068c9640ed8fdf.jpg') }}"
                                    alt="main slider" title="#htmlcaption16" />
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption2" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption3" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption4" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption5" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption6" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption7" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption8" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption9" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">Menstrual Hygiene sensitisation</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">Health Project</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> At Community Secondary School, Apata Ajele,
                                                Eyenkorin.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption10" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption11" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption12" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY </h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption13" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN</h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption14" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN
                                            </h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY </h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption15" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN </h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY </h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Caption One -->
                            <div id="htmlcaption16" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div>
                                <div class="slide-text">
                                    <div class="middle-text">
                                        <div class="cap-dec">
                                            <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s"
                                                data-wow-delay="0s">OHOFN
                                            </h1>
                                            <h2 class="cap-dec wow zoomInRight" data-wow-duration="1.3s"
                                                data-wow-delay="0s">OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY </h2>
                                            <p class="cap-dec wow zoomInRight" data-wow-duration="1.5s"
                                                data-wow-delay="0s"> Millions of vulnerable families in Nigeria are
                                                facing a plethora of problems. Help us provide them with Health,
                                                Education and Financial Assistance.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Main Slider Area -->



                    <section class="featured section-block" id="featured">
                        <div class="section-title text-center">
                            <h2>OUR Themethic Area </h2>
                            <p class="lead"> </p>
                        </div> <!-- .section-title ends -->

                        <div class="container">
                            <div class="row section-content">
                                <div class="col-md-4 clearfix">
                                    <div class="shado">
                                        <div class="icon-block"><i class="fa fa-plus"></i></div>
                                        <div class="content-block">
                                            <h3>Health</h3>
                                            <p> We promote and advocate for the sexual and reproductive health rights of
                                                women, girls and youths, we conduct medical outreaches for different
                                                communities and groups. We offer malaria, TB, cancer and HIV/AIDS
                                                related services. </p>
                                        </div> <!-- .content-block ends -->
                                    </div>
                                </div> <!-- .col-md-4 ends -->

                                <div class="col-md-4 clearfix">
                                    <div class="shado">
                                        <div class="icon-block"><i class="fa fa-pencil"></i></div>
                                        <div class="content-block">
                                            <h3>Education</h3>
                                            <p>We advocate for girl child education, we work to improve equal, access to
                                                affordable and quality education for girls and youths. We provide
                                                non-formal education for married girls and other adults. </p>
                                        </div> <!-- .content-block ends -->
                                    </div>
                                </div> <!-- .col-md-4 ends -->

                                <div class="col-md-4 clearfix">
                                    <div class="shado">
                                        <div class="icon-block"><i class="fa fa-balance-scale"></i></div>
                                        <div class="content-block">
                                            <h3>GENDER BASED VIOLENCE AND ECONOMIC JUSTICE </h3>
                                            <p>We engage in sensitisation on Gender Based Violence, which includes its
                                                forms, prevention strategies, response to GBV cases and referral.
                                                We have a well-equipped psycho-social unit that has competent staff who
                                                offer counselling and therapy session. </p>
                                        </div> <!-- .content-block ends -->
                                    </div>
                                </div> <!-- .col-md-4 ends -->

                            </div> <!-- .row ends -->
                        </div> <!-- .container ends -->
                    </section> <!-- .featured ends -->

                    <!-- ABOUT US -->
                    <section class="about-us section-block" id="about-us">
                        <div class="section-title text-center">
                            <h2>Who We Are</h2>
                            <p class="lead">
                                OHOFN is a non-governmental, non-religious and non-political organization that provides
                                social services such as counseling, psychosocial support, empowerment, legal aid,
                                welfare support and skill acquisition to women, girls and youths in Nigeria. </p>
                        </div> <!-- .section-title ends -->

                        <div class="container">
                            <div class="row section-content">
                                <div class="col-lg-6">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="index.html#vision" aria-controls="vision" role="tab"
                                                data-toggle="tab">
                                                <i class="fa fa-eye"></i> Vision
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="index.html#mission" aria-controls="mission" role="tab"
                                                data-toggle="tab">
                                                <i class="fa fa-flag"></i> Mission
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="index.html#policy" aria-controls="policy" role="tab"
                                                data-toggle="tab">
                                                <i class="fa fa-align-center"></i> History
                                            </a>
                                        </li>
                                    </ul> <!-- .nav nav-tabs ends -->

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="vision">
                                            <p>We envision a society where women, girls, youths, and other vulnerable
                                                groups enjoy gender equity,are empowered to cope with all life
                                                challenges, and live with dignity.</p>
                                        </div> <!-- .tab-pane ends -->
                                        <div role="tabpanel" class="tab-pane" id="mission">
                                            <p>We promote the rights and empowerment of women, girls, youths, and
                                                vulnerable groups through partnership, gender equity, and capacity
                                                building to enable social justice and help them live in a world free
                                                from poverty and diseases.</p>
                                        </div> <!-- .tab-page ends -->

                                        <div role="tabpanel" class="tab-pane" id="policy">
                                            <p>The organization was started by the CEO and her friends when she was
                                                asked to take up leadership responsibilities in Kwara State Polytechnic
                                                as the director of socials and the only female amongst all the
                                                executives. She realized the hassles young girls just getting into
                                                school face from older boys. She realized the girls lacks skills to
                                                resist sexual pressure, they are non-assertive and lack refusal skills.
                                                Female students also felt she must be someone so special and possess
                                                extra powers to be the only female in a male dominated environment.
                                                Sensitization and awareness program for girls in the school was carried
                                                out to address the issue.</p>
                                        </div> <!-- .tab-page ends -->
                                    </div> <!-- .tab-content ends -->
                                </div> <!-- .col-md-6 ends -->
                                <div class="col-lg-6">
                                    <img class="img-responsive about-img"
                                        src="{{ asset('landing_page/images/products/171125966668585d0105b00.jpg') }}"
                                        alt="about us photo">
                                </div><!-- .col-md-6 ends -->
                            </div>
                        </div> <!-- .container ends -->
                    </section> <!-- .about-us ends -->
                    <!-- LATEST -->
                    <section class="latest section-block" id="latest">
                        <div class="section-title text-center">
                            <h2>Recent Projects</h2>
                            <p class="lead">
                            </p>
                        </div> <!-- .section-title ends -->

                        <div class="container">
                            <div class="row section-content">
                                <div class="col-md-4 clearfix">
                                    <div class="shad">
                                        <div class="im">
                                            <img src="{{ asset('landing_page/images/projects/4208709468bec6ae775a4.jpg') }}"
                                                class="img-responsive" alt="project1">
                                        </div>
                                        <div class="content-block">
                                            <h3>OCDI Participates in Tech4MarketWomen Training of Trainers</h3>
                                            <div class="subtex"></div>
                                            <p>
                                            <p>The Management and Information System (MIS) Officer of Olive Community
                                                Development Initiative (OCDI) recently participated in a Training of
                                                Trainers (ToT) session organized by Tech4MarketWomen and sponsored by
                                                MasterCard.</p>

                                            <p>&nbsp;</p>


                                            <a class="button mybtn"
                                                href="https://www.olivecommunitydevelopmentinitiative.org/project.php?project_menu=95&amp;project=155">Read
                                                More</a>
                                        </div> <!-- .content-block ends -->

                                    </div>
                                </div> <!-- .col-md-4 ends -->
                                <div class="col-md-4 clearfix">
                                    <div class="shad">
                                        <div class="im">
                                            <img src="{{ asset('landing_page/images/projects/189409498268a6f1dd8fdda.jpg') }}"
                                                class="img-responsive" alt="project1">
                                        </div>
                                        <div class="content-block">
                                            <h3>OCDI SUMMER CAMP FOR ADOLESCENTS </h3>
                                            <div class="subtex"></div>
                                            <p>
                                            <p>Olive Community Development Initiative successfully hosted its Adolescent
                                                Summer Camp, creating a safe and engaging space for learning, growth,
                                                and connection. This year&rsquo;s camp reached a total of 164
                                                adolescents &mdash; including 143 girls ...</p>
                                            <a class="button mybtn"
                                                href="https://www.olivecommunitydevelopmentinitiative.org/project.php?project_menu=88&amp;project=154">Read
                                                More</a>
                                        </div> <!-- .content-block ends -->

                                    </div>
                                </div> <!-- .col-md-4 ends -->
                                <div class="col-md-4 clearfix">
                                    <div class="shad">
                                        <div class="im">
                                            <img src="{{ asset('landing_page/images/projects/1525726063688b67e24ae0d.jpg') }}"
                                                class="img-responsive" alt="project1">
                                        </div>
                                        <div class="content-block">
                                            <h3>Empowering Creativity </h3>
                                            <div class="subtex"></div>
                                            <p>
                                            <p>As part of our commitment to youth empowerment and practical skill
                                                development, Olive Community Development Initiative (OCDI), in
                                                collaboration with @Qwiqkraft, hosted a hands-on skills-building session
                                                focused on custom printing on t-shirts, mugs, and ...</p>
                                            <a class="button mybtn"
                                                href="https://www.olivecommunitydevelopmentinitiative.org/project.php?project_menu=97&amp;project=153">Read
                                                More</a>
                                        </div> <!-- .content-block ends -->

                                    </div>
                                </div> <!-- .col-md-4 ends -->

                            </div> <!-- .row ends -->
                        </div> <!-- .container ends -->
                    </section> <!-- .latest ends -->
                    <!-- Testimonials Box -->
                    <section class="testimonials">
                        <div class="section-titl text-center">
                            <h2>Testimonials</h2>
                        </div> <!-- .section-title ends -->
                        <div class="slider-items-products">
                            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                                <div class="slider-items slider-width-col4 ">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- End Testimonials Box --><!-- our clients Slider -->
                    <div class="our-clients">
                        <div class="text-center">
                            <h2>OUR PARTNERS</h2>
                        </div>
                        <div class="slider-items-products">
                            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col6">
                                    <div class="item"><img
                                            src="{{ asset('landing_page/images/191035af2decb24cab.jpg') }}"
                                            alt="USAID">
                                    </div>
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
                                            <div class="service-box-center"> <span
                                                    class="bottom-service-title">Education</span>
                                                <div class="description">
                                                    <div class="heading">Community Development!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                            <div class="service-box-center"> <span
                                                    class="bottom-service-title">Environment</span>
                                                <div class="description">
                                                    <div class="heading">Volunteering!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                            <div class="service-box-center"> <span
                                                    class="bottom-service-title">Partnership</span>
                                                <div class="description">
                                                    <div class="heading">Donors and Volunteers </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column">
                                            <div class="service-box-center"> <span
                                                    class="bottom-service-title">Advocacy</span>
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
                                                    src="{{asset('landing_page/images/logo/logo.avif')}}" alt="ocdi"></a>
                                            <p>Agent of postive change</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <h3 class="">Sign up for newsletter</h3>
                                        <span>Get the latest update and activity from us</span>
                                    </div>
                                    <div class="col-md-5 col-sm-6">
                                        <form id="newsletter-validate-detail" data-parsley-validate="" novalidate=""
                                            method="post"
                                            action="https://www.olivecommunitydevelopmentinitiative.org/action.php">
                                            <div class="newsletter-inner">
                                                <input class="newsletter-email" type="email"
                                                    data-parsley-type="email" name='email'
                                                    placeholder='Enter Your Email' />
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
                                                <li><a
                                                        href="{{url('/')}}">Home</a></li>
                                                <li><a
                                                        href="{{route('about_us')}}">About Us</a></li>
                                                <li><a
                                                        href="{{route('contact_us')}}">Contact Us</a>
                                                </li>
                                                <li><a
                                                        href="{{route('gallery')}}">Gallery
                                                    </a></li>
                                                    <li><a
                                                        href="{{route('resources')}}">Resources
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
                                            <li class="social-network fb"><a title="Connect us on Facebook"
                                                    target="_blank" href="https://www.facebook.com/OliveCommunity"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li class="social-network tw"><a title="Connect us on Twitter"
                                                    target="_blank" href="https://twitter.com/OcdiKwara"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="social-network linkedin"><a title="Connect us on Linkedin"
                                                    target="_blank" href="https://www.linkedin.com/"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li class="social-network instagram"><a title="Connect us on Instagram"
                                                    target="_blank" href="https://instagram.com/olivecommunitydev"><i
                                                        class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-coppyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 coppyright"> Built @ 2025 <a
                                            href="{{ url('/') }}"> OHOFN</a>. All Rights Reserved. </div>
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
                    <a href="index.html#" class="totop"> </a> <!-- End Footer -->


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
    $('#home').addClass('active');
</script>

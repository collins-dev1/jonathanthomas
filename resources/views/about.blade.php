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
                                            href="about.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-twitter" title="Twitter"
                                            href="about.php.html#"></a></div>
                                    <div class="hidden-xs"><a class="fa fa-google-plus" title="Google Plus"
                                            href="about.php.html#"></a></div>
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

    <section class="page-title-banner about-page">
        <div class="container">
            <h2>About Us</h2>
            <ul class="breadcrum">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('about_us')}}">About</a></li>
            </ul> <!-- .breadcrumbs ends -->
        </div> <!-- .container ends -->
    </section> <!-- .page-title-banner ends -->

    <section class="abouttext">
        <div class="auto-container">
            <div class="row clearfix">
                <h2>OKOLO HENRY OBINNA FOUNDATION FOR THE NEEDY</h2>
                <div class="bigtext text-center">
                    OHOFN is a non-governmental, non-religious and non-political organization that provides social
                    services such as counseling, psychosocial support, empowerment, legal aid, welfare support and skill
                    acquisition to women, girls and youths in Nigeria. </div>
                <p>
                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">OHOFN is a non-governmental, non-religious
                            and non-political organization that provides social services such as counseling,
                            psychosocial support, empowerment, legal aid, welfare support and skill acquisition to
                            women, girls and youths in Nigeria. This is achieved by linking community based
                            organizations to various opportunities and support that exist for rural/community
                            development as the need arises. Community based organizations, Faith based organizations,
                            youth organizations and women groups are in turn supported in designing, implementing and
                            sustaining their own programs.</span></span></p>

                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">OHOFN was established in 2006 and registered
                            with the Abuja State Ministry of Social Welfare as Agent of Change Development Initiatives
                            with operations only in Kwara state but it later had a nationwide coverage and registered
                            with the corporate Affairs commission as OHOFN in 2011. Our focus areas are;</span></span>
                </p>

                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">&nbsp;I.&nbsp; &nbsp; Community Health
                            Initiatives,</span></span></p>

                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">2.&nbsp; &nbsp; Reducing poverty through
                            livelihood programs,</span></span></p>

                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">3.&nbsp; &nbsp; Improving quality of
                            Education and life building skills and </span></span></p>

                <p style="text-align:justify"><span style="font-size:14px"><span
                            style="font-family:Arial,Helvetica,sans-serif">4.&nbsp; &nbsp; Environmental Awareness and
                            management. </span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">In the health
                            sector we have provided Hiv testing services, TB and other medical services with linkages to
                            health centers for referrals and follow up in different parts of kwara and Anambra State.
                            Women from different parts of Edu, Patigi, Offa and Oyun LGAs has been referred for anti
                            natal services and at the same time mobilized for MTCT services. People in target
                            communities in Ifelodun LGA in Kwara State has been reached with Interpersonal communication
                            messages on malaria prevention and treatment while Communities in Moro and Isin LGAs in
                            Kwara state has been reached with Local drama to aid behavioural change on malaria
                            prevention and treatment. </span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Trainings on
                            Leadership, Resource mobilization, creating a development plan, amongst others were provided
                            for School Based Management Committee in Oke-Ero, Ekiti and Ifelodun LGA which equipped them
                            with the skills to hold government accountable, commit to child protection, school
                            development and quality Education. Enrolment rate in government schools and created an
                            environment conducive for all children regardless of their special needs, Ethnic group and
                            status in the community.</span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">21<sup>st</sup>
                            century skills&rsquo; training was provided for National Volunteers in hard to reach
                            secondary schools who use the skills in making teaching and learning easier thereby
                            increasing enrolment in science classes. Volunteers use extracurricular activities in making
                            teaching and learning interesting and also created inclusive Neighbourhood spaces for all
                            children in target communities in Oke-Ero, Ifelodun, Moro and Asa LGAs.</span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Life skills such
                            as Self Esteem, Goal setting, Refusal skills and Adolescent reproductive health provided for
                            girls in secondary schools increased their self-confidence and broke barriers by talking
                            freely about reproductive health in our monthly girls Open day program in the office.
                            Vulnerable women from different groups benefitted from our micro credit support which was
                            used in boosting their business and yielded more income and profit. </span></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>&nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong></span></span><span
                        style="font-size:20px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>ABOUT THE
                                CEO</strong></span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Oluwatoni Adeleke
                            is the CEO and founder of OCDI. Oluwatoni is a Passionate, committed and skilled social
                            worker with extensive experience in designing, implementing, reporting, monitoring and
                            evaluation of community based poverty reduction programs. </span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Oluwatoni worked
                            with Kwara State Community and social Development Agency (KWCSDA) a World Bank assisted
                            project as a field level operations officer where she sensitized and mobilized communities
                            on social safety nets, social infrastructure and facilitated Participatory Rural Appraisal
                            (PRA) for several communities and group&rsquo;s needs for 7 years before resigning to full
                            time with OCDI in 2017.</span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">She worked with
                            International Women Communication center (IWCC) as a filed level officer where she
                            supervised trained and mentored caregivers in the HIV/AIDs Home based care program. She also
                            worked with New Partnership for African Development (NEPAD) youth as the project secretary
                            where she coordinated HIV/AIDS programs in target schools in Kwara State.</span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">The CEO holds an
                            Msc degree In Social Work, two postgraduate diplomas in Rural Development and Environmental
                            Management then a higher National Diploma in Building Technology.</span></span></p>

                <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Oluwatoni is the
                            Vice President, Africa Region International Federation of Social Workers (IFSW), the acting
                            Secretary, Nigeria Association of Social Workers (NASoW) and a member of the board of
                            Trustee, Civil Society for Cancer Eradication in Nigeria (CISCANEN).</span></span></p>
                </p>
            </div>
        </div>

    </section>

    <!-- ABOUT US -->
    <section class="about-us section-block" id="about-us">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="about.php.html#vision" aria-controls="vision" role="tab" data-toggle="tab">
                                <i class="fa fa-eye"></i> Vision
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="about.php.html#mission" aria-controls="mission" role="tab"
                                data-toggle="tab">
                                <i class="fa fa-flag"></i> Mission
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="about.php.html#policy" aria-controls="policy" role="tab" data-toggle="tab">
                                <i class="fa fa-align-center"></i> History
                            </a>
                        </li>
                    </ul> <!-- .nav nav-tabs ends -->

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="vision">
                            <p>We envision a society where women, girls, youths, and other vulnerable groups enjoy
                                gender equity,are empowered to cope with all life challenges, and live with dignity.</p>
                        </div> <!-- .tab-pane ends -->
                        <div role="tabpanel" class="tab-pane" id="mission">
                            <p>We promote the rights and empowerment of women, girls, youths, and vulnerable groups
                                through partnership, gender equity, and capacity building to enable social justice and
                                help them live in a world free from poverty and diseases.</p>
                        </div> <!-- .tab-page ends -->

                        <div role="tabpanel" class="tab-pane" id="policy">
                            <p>The organization was started by the CEO and her friends when she was asked to take up
                                leadership responsibilities in Kwara State Polytechnic as the director of socials and
                                the only female amongst all the executives. She realized the hassles young girls just
                                getting into school face from older boys. She realized the girls lacks skills to resist
                                sexual pressure, they are non-assertive and lack refusal skills. Female students also
                                felt she must be someone so special and possess extra powers to be the only female in a
                                male dominated environment. Sensitization and awareness program for girls in the school
                                was carried out to address the issue.</p>
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

    <section class="team-members section-block">
        <div class="section-title">
            <h2>Meet the Team</h2>
            <p class="lead">
                We have a highly committed and efficient work force which makes our project execution fast and
                successful. </p>
        </div> <!-- .section-title ends -->

        <div class="container">
            <div class="row section-content">
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/13758203935b16c4648b8c0.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Oluwatoni Adeleke is the CEO and founder of OCDI. Oluwatoni is a Passionate, committed
                                and skilled social worker with extensive experience in designing, implementing,
                                reporting, monitoring and evaluation of community based poverty reduction programs. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>ADELEKE OLUWATONI</h4>
                            <h5>CEO</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/7537272235fc1144e92e33.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                A highly skilled Finance personality with 10 years of diverse expertise experience of
                                accounting and finance work, with a Higher National Diploma in Banking and Finance, Post
                                Graduate Diploma in Social Sciences. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>OGUNSOLA ELIZABETH</h4>
                            <h5>FINANCE MANAGER</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/99826660668d82439519b6.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Akanbi Blessing Olajumoke is a counsellor and a program manager with passion of
                                providing individuals with the resources they need to reach a personal goals. With
                                professional certification in communication skills management and human resources </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>AKANBI BLESSING</h4>
                            <h5>PROGRAM MANAGER/COUNSELLOR</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/35288328468d82733d35b7.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Winnie Abolarin is a results-driven Communications Officer with years of experience in
                                developing and implementing effective communication strategies to promote organizational
                                objectives. Proven track record of creating engaging content. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Winnie Abolarin </h4>
                            <h5>COMMUNICATIONS OFFICER</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/71740612968d825b01fb58.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Jolomi David O. is the Monitoring and Evaluation Manager of Olive Community Development
                                Initiative. A graduate of Computer Engineering with about four years experience in
                                system installation and diagnostics, website and data management. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>JOLOMI DAVID O.</h4>
                            <h5>MONITORING AND EVALUATION MANAGER</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/20958682368d8286ab6f18.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Highly motivated and experienced Program Officer with a strong background in program
                                management, coordination, and implementation. Proven track record of successfully
                                managing programs and building strong relationships with stakeholders. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Okunloye Ifeoluwa Effiong</h4>
                            <h5>PROGRAMS OFFICER</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/119899917668d8280066ebe.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Results-driven MIS Officer with years of experience in designing, implementing, and
                                maintaining management information systems, driving business growth through data-driven
                                insights and solutions. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Adelara Adedoyin</h4>
                            <h5>MIS officer</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/100371385768d824a2cab4d.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Dr Adeleye Abosede Ifeoluwa is an adolescent health specialist. With over ten years
                                working experience having worked on adolescent and reproductive health issues of family
                                planning, abortion, teenage pregnancy, sexuality education among others. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Dr. Adeleye Abosede</h4>
                            <h5>Adolescent Health Specialist </h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/212817249068d825ee3833d.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                A passionate and committed social worker with Masters and degrees in Social Work. Proven
                                experience advocating for youth and womens empowerment, with leadership in grassroots
                                mobilization and social campaigns. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Kehinde Zackariyah</h4>
                            <h5>Paralegal</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/199075390568d82896ca1f0.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Benjamin is a dynamic diplomat and media personality with background in History and
                                International Relations. Passionate about using His knowledge to support social
                                movements and advocate for positive change. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Gbadeyan Benjamin</h4>
                            <h5>Communications Assistant</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/122054962168d824039d9bd.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Patrick Oluwafemi Akerele is a seasoned researcher, educationist, and counselling
                                professional with expertise in research, data analysis, and monitoring and evaluation
                                (M&E). </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Akerele Femi Patrick</h4>
                            <h5>Monitoring and Evaluation Expert</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/104432054368d825166eebc.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Yusuf Anifowoshe is a Finance and Administration professional with 20+ years’ experience
                                managing donor-funded health and development programmes in Nigeria. Skilled in financial
                                accountability, compliance, and reporting for large projects. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Yusuf Anifowoshe</h4>
                            <h5>Finance Expert</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/13538091668d82838e45a9.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Ajiboye Goodness is a finance officer with proven expertise in financial reporting,
                                budget management, donor reporting, and community development. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Ajiboye Goodness</h4>
                            <h5>Finance Officer</h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
                <div class="col-md-3 col-sm-6">
                    <div class="image-block">
                        <img class="img-responsive" src="{{asset('landing_page/images/team/169355719968d826c58d1d4.png')}}"
                            alt="team member one">
                    </div>
                    <div class="content-block">
                        <div class="hover-content">
                            <p>
                                Adamu Keziah is a Psychologist and Mental Health Specialist skilled in counseling,
                                psychosocial support, and care for vulnerable groups, including trauma and gender-based
                                violence survivors. </p>
                            <!-- this b tag only for styling perpose -->
                            <b></b>
                        </div> <!-- .hover-content ends -->
                        <div class="member-info">
                            <h4>Adamu Keizah</h4>
                            <h5>Psychologist </h5>
                        </div> <!-- .member-info ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-3 col-sm-6 ends -->
            </div> <!-- .row section-content ends -->
        </div><!-- .container ends -->
    </section>
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
    <a href="about.php.html#" class="totop"> </a> <!-- End Footer -->


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
    $('#about').addClass('active');
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>BAF Golf Link</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('assets/images/air_force_golf_favico.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('assets/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.css" rel=')}}"stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/odometer.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/elpath.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color.css')}}" id="jssDefault" rel="stylesheet">
    <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/header.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/banner.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/service.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/about.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/course.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/funfact.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/chooseus.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/event.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/cta.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/faq.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/module-css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>

<!-- page wrapper -->

<body>
    <div class="boxed_wrapper ltr">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="fal fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="f" class="letters-loading">
                                f
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->

        <div class="chat-icon"><button type="button" class="chat-toggler"><i class="icon-26"></i></button></div>

        <!--chat popup-->
        <div id="chat-popup" class="chat-popup">
            <div class="popup-inner">
                <div class="close-chat"><i class="icon-24"></i></div>
                <div class="chat-form">
                    <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Text"></textarea>
                        </div>
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn btn-one">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img src="{{asset('assets/images/logo-3.png')}}"
                                alt=""></a></figure>
                    <div class="close-search"><span class="fas fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="icon-4"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner">
                    <ul class="info-list">
                        <li><i class="icon-1"></i>Mon-Fri 8:00 am-6:00 pm</li>
                        <li><i class="icon-2"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><a href="tel:2395432170108"><i class="icon-5"></i> (239)-543-217-0108</a></li>
                    </ul>
                    <div class="header-info">
                        <div class="search-toggler pr_30 mr_30"><i class="icon-4"></i></div>
                        <div class="login-box p_relative pr_30 mr_30"><a href="login.html">Login</a></div>
                        <ul class="social-links">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container p_relative pr_70">
                    <div class="outer-box">
                        <div class="left-column">
                            <figure class="logo-box mr_50"><a href="index.html"><img
                                        src="{{asset('assets/images/air_force_golf_link_demo_logo1.png')}}" alt=""></a>
                            </figure>
                            <div class="menu-area">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="#">Home</a>
                                            </li>
                                            <li class="dropdown"><a href="#">Membership</a>
                                                <ul>
                                                    <li class=""><a href="">Apply for Membership</a>

                                                    </li>
                                                    <li class=""><a href="#">Cancel Membership</a></li>
                                                    <li><a href="#">Active Member</a></li>
                                                    <li><a href="#">Silent Member</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Fees &amp; Charges</a>
                                                <ul>
                                                    <li><a href="#">Membership Fee</a></li>
                                                    <li><a href="#">Other Charges</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="committee.html">Committee</a></li>
                                            <li class=""><a href="">Gallery</a></li>
                                            <li class="dropdown"><a href="#">Services</a>
                                                <ul>
                                                    <li><a href=""> Tournaments</a></li>
                                                    <li><a href="">FAQ</a></li>
                                                    <li><a href="">Notices </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">About</a></li>
                                            <li><a href="">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container p_relative pr_70">
                    <div class="outer-box">
                        <div class="left-column">
                            <figure class="logo-box mr_50"><a href="index.html"><img
                                        src="{{asset('assets/images/air_force_golf_link_demo_logo1.png')}}" alt=""></a>
                            </figure>
                            <div class="menu-area">
                                <nav class="main-menu clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </nav>
                            </div>
                        </div>
                        <!--<div class="menu-right-content">
                            <div class="support-box mr_30"><a href="tel:2395432170108"><i class="icon-5"></i> (239)-543-217-0108</a></div>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Book A Visit</a></div>
                        </div>-->
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/images/logo-3.png')}}" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- banner-section -->
        <section class="banner-section p_relative">
            <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-3.png') }}');"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{ asset('assets/images/banner/slide1.jpg') }}');"></div>
                    <!--<div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Leave your mark</span>
                            <h2>unparalleled premium golf experience</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis <br />ridiculus tellus.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Learn More</a></div>
                        </div>
                    </div>-->
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{ asset('assets/images/banner/slide2.jpg') }}');"></div>
                    <!--<div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Leave your mark</span>
                            <h2>unparalleled premium golf experience</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis <br />ridiculus tellus.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Learn More</a></div>
                        </div>
                    </div>-->
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{ asset('assets/images/banner/slide3.jpg') }}');"></div>
                    <!--<div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Leave your mark</span>
                            <h2>unparalleled premium golf experience</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis <br />ridiculus tellus.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Learn More</a></div>
                        </div>
                    </div>-->
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{ asset('assets/images/banner/slide4.jpg') }}');"></div>
                    <!--<div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Leave your mark</span>
                            <h2>unparalleled premium golf experience</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis <br />ridiculus tellus.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Learn More</a></div>
                        </div>
                    </div>-->
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{ asset('assets/images/banner/slide5.jpg') }}');"></div>
                    <!--<div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Leave your mark</span>
                            <h2>unparalleled premium golf experience</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis <br />ridiculus tellus.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Learn More</a></div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- service-section -->
        <section class="service-section centred pt_95 pb_100">
            <div class="auto-container">
                <div class="sec-title centred mb_55">
                    <span class="sub-title">our Facilities</span>
                    <h2>Enjoy top-tier golfing at the <br />best club around</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-1.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Air Cdre Md Mostafa Mahmood Siddiq, GUP, afwc, acsc,
                                        psc, GD (P)</p>
                                    <p><small class="fw-bold">President</small></p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-2.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Air Cdre A K M Abdur Rajjaque, GUP, psc, GD (P).</p>
                                    <p><small class="fw-bold">Chairman<br>HR &amp; Welfare
                                            Committee</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-3.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Air Cdre G M Shamim Reza, psc, GD (P).</p>
                                    <p><small class="fw-bold">Chairman<br>Handicap Committee</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-4.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Gp Capt Abdullah-Al-Masud, GUP, afwc, psc, GD (P).</p>
                                    <p><small class="fw-bold">Chairman<br>Tournament Committee</small>.</p>
                                    <div class="link"><a href="#"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-1.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Gp Capt Md Monzur-E-Alam, afwc, psc, Engg</p>
                                    <p><small class="fw-bold">Chairman<br>Equip &amp; Dev
                                            Committee</small></p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-2.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Gp Capt Md Abu Zafar, psc, Log.</p>
                                    <p><small class="fw-bold">Chairman<br>Golfing Committee</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-3.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Air Cdre Mohammad Sultan Mahmud Malik, psc, Engg.</p>
                                    <p><small class="fw-bold">Chairman<br>Audit &amp; Fin
                                            Committee</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-4.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Gp Capt G M Ali Hayder, afwc, psc, ADWC.</p>
                                    <p><small class="fw-bold">Chairman<br>Entertainment
                                            Committee</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/pp1.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <p>Wg Cdr Mohammad Abu Sadek, psc, Log</p>
                                    <p><small class="fw-bold">Chief Executive Officer</small></p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/pp1.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <p>Wg Cdr Mohammad Abu Sadek, psc, Log</p>
                                    <p><small class="fw-bold">Golf Captain</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-3.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Wg Cdr Mohammad Golam Rasul Chowdhury, psc, GD (P)</p>
                                    <p><small class="fw-bold">Member Secretary</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/service/service-4.jpg')}}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <p>Mousumi Monzur</p>
                                    <p><small class="fw-bold">Lady Golf Captain</small>.</p>
                                    <div class="link"><a href="index.html"><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->

        <!-- about-section -->
        <section class="about-section pb_140">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column p-0">

                        <div class="content_block_one">
                            <div class="content-box mr_70 pt_15">
                                <div class="sec-title mb_30">
                                    <span class="sub-title">About Golfer</span>
                                    <h2>Immerse yourself in a luxury golf outing</h2>
                                </div>
                                <div class="text-box mb_30">
                                    <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in.
                                        Quisque porttitor tortor blandit nunc sed ac id. Mattis in nunc libero viverra.
                                        Consectetur leo nibh ac at amet.</p>
                                </div>
                                <ul class="list-style-one clearfix mb_40">
                                    <li><i class="fas fa-check-circle"></i>Free Guide Book</li>
                                    <li><i class="fas fa-check-circle"></i>Group Membership Level</li>
                                    <li><i class="fas fa-check-circle"></i>24/7 Full Support</li>
                                </ul>
                                <div class="btn-box"><a href="about.html" class="theme-btn btn-one">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-md-12 col-sm-12 image-column bg-success d-flex flex-column align-items-center justify-content-center">

                        <div class="image_block_one">
                            <div class="image-box ml_20 pl_140 pt_15">
                                <div class="image-shape">
                                    <div class="shape-1 z_1"></div>
                                    <div class="shape-2"
                                        style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');"></div>
                                </div>
                                <figure class="image image-1 image-hov-two"><img
                                        src="{{asset('assets/images/resource/about-1.jpg')}}" alt=""></figure>
                                <figure class="image image-2 p_absolute l_0 b_70 z_2"><img
                                        src="{{asset('assets/images/resource/about-2.jpg')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- course-section -->
        <section class="course-section pt_140 pb_150 bg-color-1">
            <div class="bg-layer" style="background-image: url('{{ asset('assets/images/background/course-bg.jpg') }}');"></div>
            <div class="auto-container">
                <div class="sec-title centred mb_55">
                    <span class="sub-title">OUR COURSES</span>
                    <h2>Let Us Make Your Golf Trip <br />Fantasies Come True</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 course-block">
                        <div class="course-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="course-details.html"><img
                                                src="{{asset('assets/images/resource/course-1.jpg')}}" alt=""></a></figure>
                                    <figure class="overlay-image"><a href="course-details.html"><img
                                                src="{{asset('assets/images/resource/course-1.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-8"></i></div>
                                    <h3><a href="course-details.html">Courses & Instructors</a></h3>
                                    <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit
                                        officia consequt.</p>
                                    <div class="btn-box"><a href="course-details.html" class="theme-btn btn-two">More
                                            Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 course-block">
                        <div class="course-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="course-details-2.html"><img
                                                src="{{asset('assets/images/resource/course-2.jpg')}}" alt=""></a></figure>
                                    <figure class="overlay-image"><a href="course-details-2.html"><img
                                                src="{{asset('assets/images/resource/course-2.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-9"></i></div>
                                    <h3><a href="course-details-2.html">Golf Accommodation</a></h3>
                                    <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit
                                        officia consequt.</p>
                                    <div class="btn-box"><a href="course-details-2.html"
                                            class="theme-btn btn-two">More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 course-block">
                        <div class="course-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="course-details-3.html"><img
                                                src="{{asset('assets/images/resource/course-3.jpg')}}" alt=""></a></figure>
                                    <figure class="overlay-image"><a href="course-details-3.html"><img
                                                src="{{asset('assets/images/resource/course-3.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-10"></i></div>
                                    <h3><a href="course-details-3.html">Fitness Center</a></h3>
                                    <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit
                                        officia consequt.</p>
                                    <div class="btn-box"><a href="course-details-3.html"
                                            class="theme-btn btn-two">More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn pt_40 centred">
                    <a href="courses.html" class="theme-btn btn-one">View more courses</a>
                </div>
            </div>
        </section>
        <!-- course-section end -->


        <!-- funfact-section -->
        <section class="funfact-section pt_80 pb_50 bg-color-2">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-11"></i></div>
                            <div class="count-outer">
                                <span class="odometer" data-count="20">00</span><span class="symble">+</span>
                            </div>
                            <h4>Tatal Golf Holes</h4>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-12"></i></div>
                            <div class="count-outer">
                                <span class="odometer" data-count="80">00</span><span class="symble">+</span>
                            </div>
                            <h4>Total Pro Members</h4>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-13"></i></div>
                            <div class="count-outer">
                                <span class="odometer" data-count="120">00</span><span class="symble">+</span>
                            </div>
                            <h4>Total Golf Areas</h4>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-14"></i></div>
                            <div class="count-outer">
                                <span class="odometer" data-count="85">00</span><span class="symble">+</span>
                            </div>
                            <h4>5 Star Rating</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section pt_150 pb_140">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box mr_30">
                            <div class="image-shape">
                                <div class="shape-1 z_1"></div>
                                <div class="shape-2" style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');"></div>
                            </div>
                            <figure class="image"><img src="{{asset('assets/images/resource/chooseus-1.png')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box ml_30 mr_60">
                                <div class="sec-title mb_30">
                                    <span class="sub-title">Why choose us</span>
                                    <h2>Behind the Curtain with Renowned Golfers</h2>
                                </div>
                                <div class="text-box mb_30">
                                    <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in.
                                        Quisque porttitor tortor blandit nunc.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-15"></i></div>
                                        <h2>100% Success Rate</h2>
                                        <p>Amet minim mollit no duis deserut lamo sit enim.</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-16"></i></div>
                                        <h2>The Exclusive Offers</h2>
                                        <p>Amet minim mollit no duis deserut lamo sit enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- event-section -->
        <section class="event-section pb_150">
            <div class="auto-container">
                <div class="sec-title centred mb_55">
                    <span class="sub-title">upcoming events</span>
                    <h2>Get Ready for These Upcoming <br />Golf Events</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="event-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="event-details.html"><img
                                            src="{{asset('assets/images/resource/event-1.jpg')}}" alt=""></a></figure>
                                <span class="location"><i class="icon-3"></i>6391 Elgin St. Celina, Delaware</span>
                            </div>
                            <div class="lower-content">
                                <span class="post-date"><i class="icon-17"></i>22 August, 2024</span>
                                <h3><a href="event-details.html">The Sponsorship Meetup is Returning</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor.</p>
                                <div class="btn-box"><a href="event-details.html" class="theme-btn btn-two">View
                                        Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="event-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="event-details.html"><img
                                            src="{{asset('assets/images/resource/event-2.jpg')}}" alt=""></a></figure>
                                <span class="location"><i class="icon-3"></i>6391 Elgin St. Celina, Delaware</span>
                            </div>
                            <div class="lower-content">
                                <span class="post-date"><i class="icon-17"></i>21 August, 2024</span>
                                <h3><a href="event-details.html">Starter Golf Clinic and Casual Contest</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor.</p>
                                <div class="btn-box"><a href="event-details.html" class="theme-btn btn-two">View
                                        Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="event-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="event-details.html"><img
                                            src="{{asset('assets/images/resource/event-3.jpg')}}" alt=""></a></figure>
                                <span class="location"><i class="icon-3"></i>6391 Elgin St. Celina, Delaware</span>
                            </div>
                            <div class="lower-content">
                                <span class="post-date"><i class="icon-17"></i>20 August, 2024</span>
                                <h3><a href="event-details.html">Interactive Golf Play for Beginners & Experts</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor.</p>
                                <div class="btn-box"><a href="event-details.html" class="theme-btn btn-two">View
                                        Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event-section end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-2 pt_140 pb_150">
            <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-2.png') }}');"></div>
            <figure class="image-layer p_absolute r_200 b_0" data-parallax='{"x": 100}'><img
                    src="{{asset('assets/images/resource/cta-1.png')}}" alt=""></figure>
            <div class="auto-container">
                <div class="content-box">
                    <div class="sec-title light mb_40">
                        <span class="sub-title">our Facilities</span>
                        <h2>Take Your Game To The Next Level.</h2>
                    </div>
                    <div class="btn-box">
                        <a href="signup.html" class="theme-btn btn-one">become a member</a>
                        <a href="contact.html" class="theme-btn btn-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- shop-section -->
        <section class="shop-section bg-color-1 pt_140 pb_110">
            <div class="auto-container">
                <div class="sec-title mb_55 centred">
                    <span class="sub-title">Best Drivers</span>
                    <h2>Complete Golf Store with All the <br />Gear You Require</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/shop/shop-1.png')}}" alt="">
                                    </figure>
                                    <ul class="option-list clearfix">
                                        <li><button type="button"><i class="icon-18"></i></button></li>
                                        <li><button type="button"><i class="icon-19"></i></button></li>
                                    </ul>
                                    <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to
                                            cart</button></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-details.html">Golf Cart Bag</a></h3>
                                    <span class="price">$20:70</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/shop/shop-2.png')}}" alt="">
                                    </figure>
                                    <ul class="option-list clearfix">
                                        <li><button type="button"><i class="icon-18"></i></button></li>
                                        <li><button type="button"><i class="icon-19"></i></button></li>
                                    </ul>
                                    <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to
                                            cart</button></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-details.html">Men’s Running Shoe</a></h3>
                                    <span class="price">$19:20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/shop/shop-3.png')}}" alt="">
                                    </figure>
                                    <ul class="option-list clearfix">
                                        <li><button type="button"><i class="icon-18"></i></button></li>
                                        <li><button type="button"><i class="icon-19"></i></button></li>
                                    </ul>
                                    <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to
                                            cart</button></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-details.html">Fusion Golf Glove</a></h3>
                                    <span class="price">$30:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/images/shop/shop-4.png')}}" alt="">
                                    </figure>
                                    <ul class="option-list clearfix">
                                        <li><button type="button"><i class="icon-18"></i></button></li>
                                        <li><button type="button"><i class="icon-19"></i></button></li>
                                    </ul>
                                    <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to
                                            cart</button></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-details.html">Drive Golf Balls (White)</a></h3>
                                    <span class="price">$21:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-section end -->


        <!-- faq-section -->
        <section class="faq-section pt_140 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box mr_30">
                                <div class="sec-title mb_60">
                                    <span class="sub-title">Faq’s</span>
                                    <h2>Frequently Asked Questions</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in.
                                        Quisque porttitor tortor blandit nunc.</p>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h3>How To Purchase The Tickets For Groups?</h3>
                                            <div class="icon-box"><i class="icon-20"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet
                                                    mattis commodo Nunc tempor amet massa diam mauris Risus sodales
                                                    interdum.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <h3>What Equipment Do I Need For Golfing?</h3>
                                            <div class="icon-box"><i class="icon-20"></i></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet
                                                    mattis commodo Nunc tempor amet massa diam mauris Risus sodales
                                                    interdum.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h3>Does Practicing Golf At Home Actually Work?</h3>
                                            <div class="icon-box"><i class="icon-20"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet
                                                    mattis commodo Nunc tempor amet massa diam mauris Risus sodales
                                                    interdum.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box ml_30 pl_110">
                                <figure class="image image-hov-two"><img src="{{asset('assets/images/resource/faq-1.jpg')}}"
                                        alt=""></figure>
                                <div class="award-box">
                                    <div class="icon-box"><img src="{{asset('assets/images/icons/award-1.png')}}" alt="">
                                    </div>
                                    <h4>The Exclusive Offers</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->


        <!-- main-footer -->
        <footer class="main-footer pt_150">
            <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-4.png') }}');"></div>
            <div class="auto-container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 logo-column">
                            <figure class="footer-logo"><a href="index.html"><img
                                        src="{{asset('assets/images/air_force_golf_link_demo_logo1.png')}}" alt=""></a>
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 subscribe-column">
                            <div class="subscribe-content">
                                <h3>Subscribe Now</h3>
                                <div class="form-inner">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your email" required>
                                            <button type="submit" class="theme-btn btn-one">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-section pt_95 pb_95">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget mr_40">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Lorem ipsum dolor sit amet consectetur diam ultricies leo etiam nibh tristique.
                                    </p>
                                    <p>odio feugiat vitae libero vestibu viverra elementum luctus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget ml_30">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="index.html">Historic Timeline</a></li>
                                        <li><a href="index.html">Career</a></li>
                                        <li><a href="index.html">Membership</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="schedule-widget footer-widget ml_55">
                                <div class="widget-title">
                                    <h3>Time Schedule</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="schedule-list clearfix">
                                        <li><i class="fa-regular fa-clock"></i> &nbsp;
                                            Monday: 6AM - 6PM</li>
                                        <li><i class="fa-regular fa-clock"></i> &nbsp;
                                            Tue - Fri: 6AM - 7PM</li>
                                        <li><i class="fa-regular fa-clock"></i> &nbsp;
                                            Sat - Sun: 6AM - 4PM</li>
                                        <li><i class="fa-regular fa-clock"></i> &nbsp;
                                            Holidays: 9AM - 1PM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Get In Touch</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>
                                            <div class="icon-box"><i class="icon-3"></i></div>
                                            Add: New Hyde Park, NY 11040
                                        </li>
                                        <li>
                                            <div class="icon-box"><i class="icon-2"></i></div>
                                            Email: <a href="mailto:example@info.com">example@info.com</a>
                                        </li>
                                        <li>
                                            <div class="icon-box"><i class="icon-5"></i></div>
                                            Phone: <a href="tel:3336660000">333 666 0000</a>
                                        </li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i
                                                    class="fa-brands fa-facebook-f text-golden pr-3"></i></a></li>
                                        <li><a href="#"><i
                                                    class="fa-brands fa-twitter text-golden pr-3"></i></a></li>
                                        <li><a href="#"><i
                                                    class="fa-brands fa-instagram text-golden pr-3"></i></a></li>
                                        <li><a href="#"><i
                                                    class="fa-brands fa-linkedin-in text-golden pr-3"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="copyright">
                    <p>Copyright 2024 by <a href="index.html">GolFer</a> All Right Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/js/appear.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/parallax-scroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolltop.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/odometer.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

</html>

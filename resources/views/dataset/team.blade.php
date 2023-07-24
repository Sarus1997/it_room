<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <!-- ======== Page title ============ -->
    <title>Information Technology</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- animate animation css file -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">

</head>

<style>
    body {
        background-color: #F9F9F9;
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 50px;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    .img2 {
        --s: 10px;
        /* control the size */
        padding: var(--s);
        border: calc(2*var(--s)) solid #0000;
        outline: 1px solid #000;
        outline-offset: calc(-1*var(--s));
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: 50%;
        border: 4px solid #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .animate-charcter2 {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 50px;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }
</style>

<body class="body-wrapper">
    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="P" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <!-- <span data-text-preloader="S" class="letters-loading">
                    S
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="R" class="letters-loading">S
                        R
                    </span> -->
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome content start from here -->

    <!-- header end -->
    <header class="header header-1">
        <div class="top-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="header-cta">
                            <ul>
                                <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                                <li><a href="mailto:consulter@example.com"><i class="icon-email"></i>consulter@example.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="header-right-socail d-flex justify-content-end align-items-center">
                            <h6 class="font-la color-white fw-600">Follow On:</h6>

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="https://www.pce-th.com/images/pce.png" alt="logo" while="35px" height="35px"><span style="color: #FCB040; font-size: 20px;"> Pce-th</span>
                                    </a>
                                </div>
                            </div>

                            <!-- <div class="header-menu d-none d-xl-block">
                                <div class="main-menu">
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">home 1</a></li>
                                                <li><a href="index-2.html">home 2</a></li>
                                                <li><a href="index-3.html">home 3</a></li>
                                                <li><a href="index-4.html">home 4</a></li>
                                                <li><a href="index-5.html">home 5</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html">Our Services</a>

                                            <ul>
                                                <li><a href="services.html">Our Services 1</a></li>
                                                <li><a href="services-2.html">Our Services 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Pages</a>

                                            <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="table.html">Pricing Table</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="services-details.html">Services Details</a></li>
                                                <li><a href="our-project-details.html">Our Project Details</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="our-project.html">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog</a>

                                            <ul>
                                                <li><a href="blog.html">Blog 1</a></li>
                                                <li><a href="blog-standard.html">Blog 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                            <div class="header-right d-flex align-items-center">
                                <div class="header-search">
                                    <a class="search-toggle" data-selector=".header-search">
                                        <span class="fas fa-search"></span>
                                    </a>

                                    <form class="search-box" action="#" method="get">
                                        <div class="form-group d-flex align-items-center">
                                            <input type="search" name="s" value="" class="search-input" id="search" placeholder="Search">
                                            <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>

                                <div class="horizontal-bar d-none d-md-block"></div>

                                <a href="tel:+1235568824" class="header-contact d-none d-md-flex align-items-center">
                                    <div class="icon color-primary">
                                        <i class="icon-call"></i>
                                        <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">+123 556 8824</h5>
                                    </div>
                                </a>

                                <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                    <div class="mobile-nav-wrap">
                                        <div id="hamburger">
                                            <i class="fal fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu - responsive menu  -->
    <div class="mobile-nav">
        <button type="button" class="close-nav">
            <i class="fal fa-times-circle"></i>
        </button>

        <nav class="sidebar-nav">
            <div class="navigation">
                <div class="consulter-mobile-nav">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                            <ul>
                                <li><a href="index.html">home 1</a></li>
                                <li><a href="index-2.html">home 2</a></li>
                                <li><a href="index-3.html">home 3</a></li>
                                <li><a href="index-4.html">home 4</a></li>
                                <li><a href="index-5.html">home 5</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="services.html">Our Services</a>

                            <ul>
                                <li><a href="services.html">Our Services 1</a></li>
                                <li><a href="services-2.html">Our Services 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>Pages</a>

                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="table.html">Pricing Table</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                                <li><a href="our-project-details.html">Our Project Details</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="our-project.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>

                            <ul>
                                <li><a href="blog.html">Blog 1</a></li>
                                <li><a href="blog-standard.html">Blog 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom mt-20">
                    <div class="sidebar-nav__bottom-contact-infos mb-20">
                        <h6 class="color-black mb-5">Contact Info</h6>

                        <ul>
                            <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                            <li><a href="mailto:consulter@example.com"><i class="icon-email"></i>consulter@example.com</a></li>
                            <li>
                                <a class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">+123 556 8824</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-nav__bottom-social">
                        <h6 class="color-black mb-5">Follow On:</h6>

                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
    <!-- header end -->

    <div class="header-gutter"></div><!-- header end -->

    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">IT Team</div>
                        <div class="page-title">
                            <h1>IT Team <span><br>Member</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/project" style="color: blue;">Dashboad & IT Job Tracking</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="https://pce-th.imgix.net/bg_new_home_e85146a685/bg_new_home_e85146a685.jpg" class="img-fluid" alt="" style="width: 945px; height: 450px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="animate-charcter"> แผนกไอที</h3>
                </div>
            </div><br><br>
        </div>
        <div class="container">
            <div class="row mb-minus-30">
                <div class="text-center">
                    <div class="media">
                        <img class="img2" src="assets/user/2Kname.png" class="img-fluid" alt="" width="300" height="300" onclick="showFullSize(this)" type="button">
                    </div>
                    <div class="text d-flex align-items-center justify-content-center">
                        <div class="left">
                            <h5 class="title color-dark">นายกิตติพล ประสิทธิ์ศุภผล</h5>
                            <span class="position color-dark font-la fw-500">
                                <p>รองกรรมการผู้จัดการสายงานกลยุทธิ์และพัฒนาองค์กร</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
            <div class="container">
                <div class="row mb-minus-30">
                    <div class="text-center">
                        <div class="media">
                            <img class="img2" src="assets/user/001.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                        </div>
                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-dark">นายชิตพล ไวทยานนท์</h5>
                                <span class="position color-dark font-la fw-500">
                                    <p>ผู้จัดการฝ่ายเทคโนโลยีสารสนเทศ</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md">

                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/002.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h5 class="title color-dark">นายวิราชัณย์ เพชรประดิษฐกุล</h5>
                                            <span class="position color-dark font-la fw-500">
                                                <p>หัวหน้าแผนก IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/003.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h5 class="title color-dark">นายณรงค์ศักดิ์ แซ่กั๋ง</h5>
                                            <span class="position color-dark font-la fw-500">
                                                <p>หัวหน้าแผนกพัฒนาแอปพลิเคชัน</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">

                    </div>
                </div>
            </div>
        </section>

        <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md">

                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/004.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h6 class="title color-dark">ว่าที่ ร้อยตรี เอกวิศิษฎ์ สุขเมือง</h6>
                                            <span class="position color-dark font-la fw-500">
                                                <p>พนักงาน IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">

                    </div>
                    <div class="col-md">

                    </div>
                </div>
            </div>
        </section>

        <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/005.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h7 class="title color-dark"><b>นายนันทวัฒน์ พงษ์สัจจา</b></h7>
                                            <span class="position color-dark font-la fw-500">
                                                <p>พนักงาน IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/006.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h7 class="title color-dark"><b>นายอำพล ขนุนนิล</b></h7>
                                            <span class="position color-dark font-la fw-500">
                                                <p>พนักงาน IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/008.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h7 class="title color-dark"><b>นางสาววรรณรท ว่องวรดา</b></h7>
                                            <span class="position color-dark font-la fw-500">
                                                <p>พนักงาน IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="container">
                            <div class="row mb-minus-30">
                                <div class="text-center">
                                    <div class="media">
                                        <img class="img2" src="assets/user/009.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                    </div>
                                    <div class="text d-flex align-items-center justify-content-center">
                                        <div class="left">
                                            <h7 class="title color-dark"><b>นายธิติพนธ์ ราชบุรี</b></h7>
                                            <span class="position color-dark font-la fw-500">
                                                <p>พนักงาน IT Infrastructure</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr><br>
        <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
            <div class="container">
                <div class="row mb-minus-30">
                    <div class="text-center">
                        <div class="media">
                            <img class="img2" src="assets/user/2Kname.png" class="img-fluid" alt="" width="300" height="300" onclick="showFullSize(this)" type="button">
                        </div>
                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-dark">นายกิตติพล ประสิทธิ์ศุภผล</h5>
                                <span class="position color-dark font-la fw-500">
                                    <p>รองกรรมการผู้จัดการสายงานกลยุทธิ์และพัฒนาองค์กร</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row mb-minus-30">
                        <div class="text-center">
                            <div class="media">
                                <img class="img2" src="assets/user/001.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                            </div>
                            <div class="text d-flex align-items-center justify-content-center">
                                <div class="left">
                                    <h5 class="title color-dark">นายชิตพล ไวทยานนท์</h5>
                                    <span class="position color-dark font-la fw-500">
                                        <p>ผู้จัดการฝ่ายเทคโนโลยีสารสนเทศ</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-md">

                        </div>
                        <div class="col-md">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/002.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h5 class="title color-dark">นายวิราชัณย์ เพชรประดิษฐกุล</h5>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>หัวหน้าแผนก IT Infrastructure</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/003.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h5 class="title color-dark">นายณรงค์ศักดิ์ แซ่กั๋ง</h5>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>หัวหน้าแผนกพัฒนาแอปพลิเคชัน</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">

                        </div>
                    </div>
                </div>
            </section>

            <!-- ไอทีซับ -->
            <hr><br>
            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="col-md">
                    <div class="container">
                        <div class="row mb-minus-30">
                            <div class="text-center">
                                <div class="media">
                                    <img class="img2" src="assets/user/002.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                                </div>
                                <div class="text d-flex align-items-center justify-content-center">
                                    <div class="left">
                                        <h5 class="title color-dark">นายวิราชัณย์ เพชรประดิษฐกุล</h5>
                                        <span class="position color-dark font-la fw-500">
                                            <p>หัวหน้าแผนก IT Infrastructure</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row mb-minus-30">
                        <div class="text-center">
                            <div class="media">
                                <img class="img2" src="assets/user/004.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                            </div>
                            <div class="text d-flex align-items-center justify-content-center">
                                <div class="left">
                                    <h6 class="title color-dark">ว่าที่ ร้อยตรี เอกวิศิษฎ์ สุขเมือง</h6>
                                    <span class="position color-dark font-la fw-500">
                                        <p>พนักงาน IT Infrastructure</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-md">

                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/005.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h7 class="title color-dark"><b>นายนันทวัฒน์ พงษ์สัจจา</b></h7>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>พนักงาน IT Infrastructure</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/006.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h7 class="title color-dark"><b>นายอำพล ขนุนนิล</b></h7>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>พนักงาน IT Infrastructure</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">

                        </div>

                    </div>
                </div>
                </div>
            </section>

            <!-- เดฟ -->
            <hr><br>
            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row mb-minus-30">
                        <div class="text-center">
                            <div class="media">
                                <img class="img2" src="assets/user/003.jpg" class="img-fluid" alt="" width="250" height="250" onclick="showFullSize(this)" type="button">
                            </div>
                            <div class="text d-flex align-items-center justify-content-center">
                                <div class="left">
                                    <h5 class="title color-dark">นายณรงค์ศักดิ์ แซ่กั๋ง</h5>
                                    <span class="position color-dark font-la fw-500">
                                        <p>หัวหน้าแผนกพัฒนาแอปพลิเคชัน</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-md">

                        </div>

                        <div class="col-md-4">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/008.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h7 class="title color-dark"><b>นางสาววรรณรท ว่องวรดา</b></h7>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>พนักงาน IT Infrastructure</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row mb-minus-30">
                                    <div class="text-center">
                                        <div class="media">
                                            <img class="img2" src="assets/user/009.jpg" class="img-fluid" alt="" width="200" height="200" onclick="showFullSize(this)" type="button">
                                        </div>
                                        <div class="text d-flex align-items-center justify-content-center">
                                            <div class="left">
                                                <h7 class="title color-dark"><b>นายธิติพนธ์ ราชบุรี</b></h7>
                                                <span class="position color-dark font-la fw-500">
                                                    <p>พนักงาน IT Infrastructure</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">

                        </div>
                    </div>
                </div>
            </section>

            <!-- IT   Infrastructure -->
            <hr>
            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="animate-charcter2"> IT Infrastructure</h3>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container" style="text-align: center;">
                    <div class="row">
                        <div class="col-md">
                            <h4 style="text-align: left;">ผู้รับผิดชอบโครงการ</h4>
                            <h6 style="text-align: left;">นายชิตพล ไวทยานนท์</h6>
                            <h6 style="text-align: left;">นายวิราชัณย์ เพชรประดิษฐกุล</h6>
                            <h6 style="text-align: left;">ว่าที่ ร้อยตรี เอกวิศิษฎ์ สุขเมือง</h6>
                            <h6 style="text-align: left;">นายนันทวัฒน์ พงษ์สัจจา</h6>
                            <h6 style="text-align: left;">นายอำพล ขนุนนิล</h6>
                            <h6 style="text-align: left;">นางสาวศศลักษณ์ มะลิทิพย์</h6>
                        </div>
                        <div class="col-md-7">
                            <h4 style="text-align: center;">รายชื่อโครงการ</h4>
                            <h5 style="text-align: left;"><b>Project</b></h5>
                            <h6 style="text-align: left;">CCTV PCE</h6>
                            <h6 style="text-align: left;">CCTV PKM Bangpakong</h6>
                            <h6 style="text-align: left;">CCTV NBD Bangpakong</h6>
                            <h6 style="text-align: left;">CCTV PKM Surat-Thani (ท่าเรือ)</h6>
                            <h6 style="text-align: left;">Conference Meeting (MS Teams)</h6>
                            <h6 style="text-align: left;">Network Infrastructure PCE (Expansion)</h6>
                            <h6 style="text-align: left;">Network Infrastructure PK Surat-Thani</h6>
                            <h6 style="text-align: left;">Network Infrastructure PK Bangpakong</h6>
                            <h6 style="text-align: left;">Network Infrastructure NBD</h6>
                            <h6 style="text-align: left;">Access Control (PCE)</h6>
                            <h6 style="text-align: left;">Access Control (NBD)</h6>
                            <h6 style="text-align: left;">Access Control (PKM)</h6>
                            <h6 style="text-align: left;">Radar Hardware PKM (Surat-Thani)</h6>
                            <h6 style="text-align: left;">Radar Hardware PKM (Bangpakong)</h6>
                            <h6 style="text-align: left;">Radar Hardware PKM (NBD)</h6>
                            <h6 style="text-align: left;">GPS เรือ</h6>
                        </div>
                        <div class="col-md">
                            <br>
                            <h5 style="text-align: left;"><b>Status</b></h5>
                            <h6 style="color:#379237; text-align: left;">Done</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#379237; text-align: left;">Done</h6>
                            <h6 style="color:#379237; text-align: left;">Done</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                        </div>
                    </div>
                </div>
            </section>

            <!-- IT   Infrastructure -->
            <hr>
            <section class="team pb-xs-40 pt-xs-40 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-60 pb-75 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="animate-charcter2">Developer</h3>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container" style="text-align: center;">
                    <div class="row">
                        <div class="col-md">
                            <h4 style="text-align: left;">ผู้รับผิดชอบโครงการ</h4>
                            <h6 style="text-align: left;">นายชิตพล ไวทยานนท์</h6>
                            <h6 style="text-align: left;">นายณรงค์ศักดิ์ แซ่กั๋ง</h6>
                            <h6 style="text-align: left;">นายธิติพนธ์ ราชบุรี</h6>
                            <h6 style="text-align: left;">นางสาววรรณรท ว่องวรดา</h6>
                        </div>
                        <div class="col-md-7">
                            <h4 style="text-align: center;">รายชื่อโครงการ</h4>
                            <h5 style="text-align: left;"><b>Project</b></h5>
                            <h6 style="text-align: left;">PACO Application</h6>
                            <h6 style="text-align: left;">Queuing Management System NBD</h6>
                            <h6 style="text-align: left;">E-Commerce Rintip Phase 2</h6>
                            <h6 style="text-align: left;">Radar Management NBD</h6>
                            <h6 style="text-align: left;">Radar Management PKM (Surat , Bangpakong)</h6>
                            <h6 style="text-align: left;">Radar Management Phuket</h6>
                            <h6 style="text-align: left;">Transport Management System (TMS) Back Office</h6>
                            <h6 style="text-align: left;">Transport Management System (TMS) Application for Driver</h6>
                            <h6 style="text-align: left;">Application for Driver</h6>
                            <h6 style="text-align: left;">Weight Application NBD</h6>
                            <h6 style="text-align: left;">Weight Application Bangpakong</h6>
                            <h6 style="text-align: left;">Weight Application Phuket</h6>
                            <h6 style="text-align: left;">Quotation online for Sale (Department)</h6>
                            <h6 style="text-align: left;">Transport Management System (TMS) Back Office Phase 2</h6>
                            <h6 style="text-align: left;">Transport Management System (TMS) Application for Driver Phase 2</h6>
                            <h6 style="text-align: left;">Dashboard for all BU</h6>
                        </div>
                        <div class="col-md">
                            <br>
                            <h5 style="text-align: left;"><b>Status</b></h5>
                            <h6 style="color:#379237; text-align: left;">Done</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#379237; text-align: left;">Done</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#f66417; text-align: left;">Working on it</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                            <h6 style="color:#A084DC; text-align: left;">Coming</h6>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- cta start -->
        <!-- <section class="cta-banner overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-banner__content d-flex flex-column flex-lg-row justify-content-between align-items-center pl-xs-20  pr-xs-20 pl-sm-30  pr-sm-30 pl-lg-50 pr-lg-50 pr-85 pl-85 overflow-hidden">
                        <div class="cta-banner__content-text">
                            <h3 class="title text-capitalize color-white">Small Business Grow Fast With Our Consulting Services</h3>
                        </div>
                        <div class="cta-banner__content-btn">
                            <a href="contact.html" class="theme-btn btn-white">Let’s Work Together <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
        <!-- cta start -->

        <!-- footer start -->
        <footer class="footer-1 overflow-hidden">
            <div class="footer-top mb-xs-5 mb-sm-10 mb-md-15 mb-lg-20 mb-25 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-footer-wid site_info_box">
                                <a href="index.html" class="d-block mb-20">
                                    <img src="assets/img/logo/footer-logo.png" alt="">
                                </a>

                                <div class="description font-la color-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="single-footer-wid newsletter_widget">
                                <h6 class="title d-flex align-items-center color-white mb-30"><img src="assets/img/icon/notification.svg" alt=""> keep up to date - get updates with latest topics.</h6>

                                <div class="newsletter_box">
                                    <form action="mail.php" method="POST">
                                        <input type="email" name="email" placeholder="Enter your email address" required>
                                        <button class="theme-btn" type="submit">Subscribe Now <i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="single-footer-wid contact_widget">
                            <h4 class="wid-title mb-30 color-white">Working Time</h4>

                            <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                                <div class="wid-contact pb-30 mb-25">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-clock"></i>
                                            </div>

                                            <div class="contact-info font-la color-white">
                                                <p>Mon - Sat / 08am : 12pm</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class="far fa-clock"></i>
                                            </div>

                                            <div class="contact-info font-la color-white">
                                                <p>Mon - Sat / 08am : 12pm</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class="far fa-clock"></i>
                                            </div>

                                            <div class="contact-info font-la color-white">
                                                <p>Sunday Close</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->

                    <div class="col-md-6 col-xl-2">
                        <div class="single-footer-wid pl-xl-10 pl-50">
                            <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                            <ul>
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="services.html">Our Services</a></li>
                                <li><a href="services-2.html">Investor Presentation</a></li>
                                <li><a href="table.html">Investor Career</a></li>
                                <li><a href="team.html">Meet Our Team</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-2 - single-footer-wid -->

                    <div class="col-md-6 col-xl-4">
                        <div class="single-footer-wid recent_post_widget pl-xl-10 pl-65 pr-50 pr-xl-30">
                            <h4 class="wid-title mb-30 color-white">Resent Post</h4>

                            <div class="recent-post-list">
                                <a href="blog-details.html" class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="assets/img/footer/resent-post-1.jpg" alt="">
                                    </div>

                                    <div class="post-data">
                                        <h5 class="color-white mb-10 fw-600">Why Purpose-Driven Employers Succeed</h5>
                                        <span class="color-white d-flex ailign-items-center"><i class="far fa-clock"></i>January 11, 2018</span>
                                    </div>
                                </a>

                                <a href="blog-details.html" class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="assets/img/footer/resent-post-1.jpg" alt="">
                                    </div>

                                    <div class="post-data">
                                        <h5 class="color-white mb-10 fw-600">Saving Time Achieving Success in Business</h5>
                                        <span class="color-white d-flex ailign-items-center"><i class="far fa-clock"></i>november 12, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-4 - single-footer-wid -->

                    <div class="col-md-6 col-xl-3">
                        <div class="single-footer-wid">
                            <h4 class="wid-title mb-30 color-white">Office Location</h4>

                            <div id="map"></div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>

            <div class="footer-bottom overflow-hidden">
                <div class="container">
                    <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div class="coppyright text-center text-md-start">
                            &copy; 2022 <a href="index.html">Consulter</a> | All Rights Reserved by <a href="https://themeforest.net/user/rrdevs">RRDevs</a>
                        </div>

                        <div class="footer-bottom-list last_no_bullet">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!--  ALl JS Plugins
    ====================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/scrollUp.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.sticky-kit.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/active.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNzB36AcEMpFG1kWuNC5dfLvdX83OUr5M&callback=initMap"></script>
        <link rel="stylesheet" href="styles.css">
        <!-- sweetaert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</body>

</html>

<script>
    function showFullSize(image) {
        // Get the image source URL
        var imageUrl = image.src;

        // Use SweetAlert2 to display the full-size image
        Swal.fire({
            imageUrl: imageUrl,
            imageAlt: 'Full-size Image',
            showCloseButton: true,
            showConfirmButton: false
        });
    }
</script>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- bootsyrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<style>
    body {
        background-color: #fff;
    }

    .glow-on-hover {
        width: 220px;
        height: 50px;
        border: none;
        outline: none;
        color: #fff;
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
    }

    .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(10px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
    }

    .glow-on-hover:active {
        color: #000
    }

    .glow-on-hover:active:after {
        background: transparent;
    }

    .glow-on-hover:hover:before {
        opacity: 1;
    }

    .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #111;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    @keyframes glowing {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #00ffae 100%);
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
        font-size: 35px;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    .header {
        background-color: #0F1F37;
        height: 50px;
        top: -10px;
    }

    /* Style for the clock icon */
    .fal.fa-clock {
        color: blue;
        /* Replace 'blue' with your desired color */
    }

    /* Style for the email icon */
    .icon-email {
        color: red;
        /* Replace 'red' with your desired color */
    }
</style>

<body class="antialiased" class="body-wrapper">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

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
        <!-- <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #0F1F37;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="https://www.pce-th.com/">
                    <img src="https://www.pce-th.com/images/pce.png" alt="pce" height="25" width="35" style="margin-right: 10px;">
                    <span style="color: #FCB040; font-size: 20px;"> Pce-th</span>
                </a>
            </div>
        </nav> -->

        <header class="header header-1">
            <div class="top-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="header-cta">
                                <ul>
                                    <li><a><i class="fal fa-clock"></i>
                                            <font color="#fff">จันทร์ – เสาร์: 8.00 – 17.00</font>
                                        </a></li>
                                    <li><a href="contact@pce-th.com"><i class="icon-email"></i>
                                            <font color="#fff">contact@pce-th.com</font>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="col-4">
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
                    </div> -->
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
                                            <img src="https://www.pce-th.com/images/pce.png" alt="logo" while="35px" height="35px">
                                            <span style="color: #FCB040; font-size: 20px;"> Pce-th</span>
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
                                        <!-- <a class="search-toggle" data-selector=".header-search">
                                            <span class="fas fa-search"></span>
                                        </a>

                                        <form class="search-box" action="#" method="get">
                                            <div class="form-group d-flex align-items-center">
                                                <input type="search" name="s" value="" class="search-input" id="search" placeholder="Search">
                                                <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form> -->
                                    </div>

                                    <div class="horizontal-bar d-none d-md-block"></div>

                                    <a href="tel:+1235568824" class="header-contact d-none d-md-flex align-items-center">
                                        <div class="icon color-primary">
                                            <i class="icon-call"></i>
                                            <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                        </div>
                                        <div class="text">
                                            <span class="font-la mb-5 d-block fw-500">ติดต่อฝ่ายสนับสนุน</span>
                                            <h5 class="fw-500">077947300</h5>
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
                        <!-- <ul>
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
                        </ul> -->
                    </div>

                    <div class="sidebar-nav__bottom mt-20">
                        <div class="sidebar-nav__bottom-contact-infos mb-20">
                            <h6 class="color-black mb-5">Contact Info</h6>

                            <ul>
                                <li><a><i class="fal fa-clock"></i>
                                        <font color="#000">จันทร์ – เสาร์: 8.00 – 17.00</font>
                                    </a></li>
                                <li><a href="contact@pce-th.com"><i class="icon-email"></i>contact@pce-th.com</a></li>
                                <li>
                                    <a class="header-contact d-flex align-items-center">
                                        <div class="icon">
                                            <i class="icon-call"></i>
                                            <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                        </div>
                                        <div class="text">
                                            <span class="font-la mb-5 d-block fw-500">ติดต่อฝ่ายสนับสนุน</span>
                                            <h5 class="fw-500">077947300</h5>
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

        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="animate-charcter"> Information Technology</h3>
                </div>
            </div>
        </div>
        <div class="container-ms" style="position: relative;">
            <img src="{{ asset('storage/it_room2.jpg') }}" alt="แผนกไอที" height="1920px" width="100%">
            <a href="/team">
                <button class="glow-on-hover" type="button" style="position: absolute; top: -2500%; left: 80%; transform: translate(-150%, -50%);  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">Organize Chart</button>
            </a>
            <a href="/project">
                <button class="glow-on-hover" type="button" style="position: absolute; top: -2000%; left: 80%; transform: translate(-150%, -50%); box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">Project on Hand</button>
            </a>
        </div>


    </div>

    <!-- <footer class="bg-light text-center text-lg-start">

        <div class="text-center p-3" style="background-color: #111;">
            <span style="color: #FCB040; font-size: 20px;"> © 2020 Copyright : </span>
            <a href="https://www.pce-th.com/">
                <span style="color: #508FD8; font-size: 20px;"> pce-th.com</span>
            </a>
        </div>

    </footer> -->

    <!-- footer start -->
    <footer class="footer-1 overflow-hidden">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md">
                    <div class="single-footer-wid contact_widget">
                        <h4 class="wid-title mb-30 color-white">เวลาทำการ</h4>

                        <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                            <div class="wid-contact pb-30 mb-25">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>จันทร์ - เสาร์ / 09.00 : 17.00</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>หยุดวันอาทิตย์</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->

                <!-- /.col-lg-2 - single-footer-wid -->

                <div class="col-md">
                    <div class="single-footer-wid contact_widget">
                        <h4 class="wid-title mb-30 color-white">ติดต่อเรา</h4>

                        <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                            <div class="wid-contact pb-30 mb-25">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>บริษัท เพชรศรีวิชัย เอ็นเตอร์ไพรส์ จำกัด (มหาชน)</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>99/12-19 หมู่ 4 ถ.กาญจนวิถี ต.บางกุ้ง อ.เมือง จ.สุราษฎร์ธานี 84000</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>โทร : 077947300</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>อีเมล : contact@pce-th.com</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>แฟกซ์ : 077600247</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col-lg-4 - single-footer-wid -->

                <div class="col-md">
                    <div class="single-footer-wid">
                        <h4 class="wid-title mb-30 color-white">ที่อยู่บริษัท</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15756.333542746186!2d99.37733574778679!3d9.146941690049939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1690336389272!5m2!1sth!2sth" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
            </div>
        </div>

        <div class="footer-bottom overflow-hidden">
            <div class="container">
                <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="container" style=" text-align: center;">
                        <a href="index.html">
                            <img src="https://www.pce-th.com/images/pce.png" alt="logo" while="45px" height="45px">
                        </a>

                        <p style="color: #fff;"><br>ฝ่ายพัฒนาเทคโนโลยี บริษัท เพชรศรีวิชัย เอ็นเตอร์ไพรส์ จำกัด (มหาชน)</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

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

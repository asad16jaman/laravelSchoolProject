<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>@yield('title') - Pro Se Help LLC </title>
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/') }}/img/logo/favicon1.png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/odometer.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/style.css">
</head>


<body>

    <!--Preloader Overlay Starts Here-->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- Preloader Overlay Ends Here -->


    <!-- start searchbar here -->
    <div class="orginalsearch overflow-hidden">
        <div class="closer">
            <i class="fa-regular fa-circle-xmark"></i>
        </div>
        <form action="#" class="orginalsearch__area">
            <input type="text" name="s" placeholder="Sarch Here...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <!-- end searchbar here -->

    <!-- header start here -->
    <div class="header">
        <div class="header__top d-xl-block d-none bg-white">
            <div class="container">
                <div class="header__topcontent header__topcontent--topcontentPage2">
                    <ul>
                        <li>
                            <div class="icon">
                            <img src="{{ asset('assets/frontend/') }}/img/home-1/topicon/icon1.png" alt="icon">
                            </div>
                            <div class="text">
                                <p>2810 N Church St #53470, Wilmington  DE 19802, USA</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/') }}/img/home-1/topicon/icon2.png" alt="icon">
                            </div>
                            <div class="text">
                                <p>Monday-Friday :  9:00 AM - 6:00 PM EST</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/') }}/img/home-1/topicon/icon3.png" alt="icon">
                            </div>
                            <div class="text">
                                <p>Need Free Consultation? <span></span></p>
                                <a href="{{url('contact')}}">Make an Appointment <i
                                        class="fa-solid fa-up-right-from-square"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container-xl container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <div class="left">
                            <div class="header__logo">
                            <a href="{{url('/')}}"><img src="{{ asset('assets/frontend/') }}/img/logo/logo.png" alt="logo" style="height: 65px;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-10">
                        <div class="right">
                            <div class="bar d-xl-none d-block">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="header__nav target">
                                <!-- mobile loog -->
                                <div class="mobilelogo d-xl-none d-block">
                                    <a href="{{url('/')}}"><img style="height: 64px;" src="{{ asset('assets/frontend/') }}/img/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="mainactive activescroll">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about-us')}}">About Us</a></li> 
                                        <li><a href="{{url('services')}}">Services</a> </li>
                                        <li><a href="{{url('team')}}">Team</a>  </li>
                                        <li><a href="{{url('testimonial')}}">Testimonial</a>  </li> 
                                        <li><a href="{{url('blog')}}">Blog</a>  </li>  
                                        <li><a href="{{url('book-shop')}}">Book</a>  </li>  
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end here -->

    @yield('content')

    <!-- start footer here -->
    <footer class="footer overflow-hidden">
        <div class="footer__topcontent">
            <div class="container">
                <div class="footer__topcontentinner">
                    <div class="allcontent">
                        <div class="item one wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon">
                            <img src="{{ asset('assets/frontend/') }}/img/home-1/footer/icon1.png" alt="iconimg">
                            </div>
                            <div class="text">
                                <p>Phone Number</p>
                                <h6><a href="tel:+18667776731" style="color: #fff">1 (866) 777-6731</a></h6>
                            </div>
                        </div>
                        <div class="item two wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/') }}/img/home-1/footer/icon2.png" alt="iconimg">
                            </div>
                            <div class="text">
                                <p>Email Address</p>
                                <h6>  info@prosehelpllc.com
                                </h6>
                            </div>
                        </div>
                        <div class="item three wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/') }}/img/home-1/footer/icon3.png" alt="iconimg">
                            </div>
                            <div class="text">
                                <p>Office Location</p>
                                <h6 style="text-transform: capitalize;">2810 N Church St #53470, Wilmington DE 19802, USA</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__maincontent">
            <div class="container">
                <div class="row g-5">
                    <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="footer__inner">
                            <div class="footer__aboutcompnay">
                                <div class="fheading">
                                    <h6>Pro Se Help, LLC - Your Partner in Legal Support
                                    </h6>
                                </div>
                                <div class="content">
                                    <p> Pro Se Help, LLC is not a law firm and does not provide legal advice. We offer support services to individuals representing themselves in legal matters. Always consult with a licensed attorney for legal advice. </p>
                                    <div class="allicon">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li> 
                                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="footer__inner">
                            <div class="footer__working">
                                <div class="fheading">
                                    <h6>Working Days</h6>
                                </div>
                                <div class="content">
                                    <ul>
                                       
                                        <li>
                                            <div class="text">
                                                <p>Mon - Fri</p>
                                                <span>09:00 AM - 6:00 PM</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="text">
                                                <p>Saturday</p>
                                                <span>Closed</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="text">
                                                <p>Sunday</p>
                                                <span>Closed</span>
                                            </div>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="footer__inner">
                            <div class="footer__ppost">
                                <div class="fheading">
                                    <h6>Popular Post</h6>
                                </div>
                                <ul>
                                    <li>
                                        <div class="leftimg">
                                            <a href="blog-single.html"><img src="{{ asset('assets/frontend/') }}/img/home-1/footer/img1.jpg"
                                                    alt="footerimg"></a>
                                        </div>
                                        <div class="righttext">
                                            <h6><a href="5-common-mistakes-to-avoid-in-pro-se-litigation.html">5 Common Mistakes to Avoid in Pro Se Litigation</a></h6>
                                            <span><i class="fa-regular fa-calendar-days"></i> 01 Aug, 2024</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="leftimg">
                                            <a href="blog-single.html"><img src="{{ asset('assets/frontend/') }}/img/home-1/footer/img2.jpg"
                                                    alt="footerimg"></a>
                                        </div>
                                        <div class="righttext">
                                            <h6><a href="blog-single.html">Understanding the Appeals Process: A Step-by-Step Guide</a>
                                            </h6>
                                            <span><i class="fa-regular fa-calendar-days"></i> 01 Aug, 2024</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="footer__inner">
                            <div class="footer__usefullink">
                                <div class="fheading">
                                    <h6>Usefull Links</h6>
                                </div>
                                <ul>
                                    <li><a href="{{url('about-us')}}"><i class="fa-solid fa-arrow-right"></i>About Us</a></li>
                                    <li><a href="{{url('services')}}"><i class="fa-solid fa-arrow-right"></i>Services</a></li>
                                    <li><a href="{{url('faq')}}"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
                                    <li><a href="{{url('resources')}}"><i class="fa-solid fa-arrow-right"></i>Resources</a></li>
                                    <li><a href="{{url('contact')}}"><i class="fa-solid fa-arrow-right"></i>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright__text">
                            <p style="text-align: left;">©Copyright 2024. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right" style="text-align: right;">
                        <a href="{{url('privacy-policy')}}" style="color: #fff;">Privacy Policy</a>   &nbsp;&nbsp; &nbsp;   <a href="{{url('terms-of-services')}}" style="color: #fff;">Terms of Services</a> &nbsp;&nbsp; &nbsp;   <a href="{{url('disclaimer')}}" style="color: #fff;">Disclaimer </a> &nbsp;&nbsp; &nbsp;   <a href="{{url('process')}}" style="color: #fff;">Process  </a> &nbsp;&nbsp; &nbsp;   <a href="{{url('partnerships')}}" style="color: #fff;">Partnerships   </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer here -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop">
        <i class="fa-solid fa-arrow-up-long"></i>
        <span class="pluse_1"></span>
        <span class="pluse_2"></span>
    </a>
    <!-- scrollToTop ending here -->


    <!-- vendor js -->
    <script src="{{ asset('assets/frontend/') }}/js/jquery.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/viewport.jquery.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/odometer.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/lightcase.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/viewport.jquery.js"></script>

    <!-- custome js here -->
    <script src="{{ asset('assets/frontend/') }}/js/custom.js"></script>

    <!-- animation js -->
    <script src="{{ asset('assets/frontend/') }}/js/animation/gsap.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/gsap-scroll-to-plugin.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/splitText.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/scrollSmoother.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/scrollTrigger.min.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/heading-animation.js"></script>
    <script src="{{ asset('assets/frontend/') }}/js/animation/paragraph-animation.js"></script>




</body>
 
</html>
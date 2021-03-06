<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- botstrap -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/botstrap/css/bootstrap.css">
    
    <!-- Style Less-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/less" href="assets/less/style.less" />
    
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/fb17ff927b.js" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/botstrap/js/bootstrap.min.js"></script>
    <!-- slick -->
    <script src="https://cdn.jsdelivr.net/npm/less@3.13"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <title>MEDYPLUS</title>
</head>
<body>
    <!-- header -->
    <header>
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="header__top__left">
                            <div class="header__top__left__item">
                                <div class="header__top__left__item__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="header__top__left__item__infor">
                                    <p>Find us</p>
                                    <p>325 admiral unit, North cost, USA</p>
                                </div>
                            </div>
                            <div class="header__top__left__item">
                                <div class="header__top__left__item__icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="header__top__left__item__infor">
                                    <p>Email Us</p>
                                    <p>admin@medyplus.com</p>
                                </div>
                            </div>
                            <div class="header__top__left__item">
                                <div class="header__top__left__item__icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="header__top__left__item__infor">
                                    <p>Call Us Now</p>
                                    <p>002 - 0100 843 1112</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="header__top__right">
                            <div class="header__top__right__item">
                                <img src="assets/images/flag.jpg"  alt="english">
                                <select id="language">
                                    <option value="eng" selected>English</option>
                                    <option value="vn">Vietnamese</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->
        <!-- header mid -->
        <div class="header__mid">
            <div class="container header__mid__container">
                <div class="header__mid__container__logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>
                <div class="header__mid__container__search">
                    <div class="header__mid__container__search__cate">
                        <select name="category">
                            <option value="1">All Category</option>
                            <option value="2">Smart phone</option>
                            <option value="3">Apple watch</option>
                        </select>
                    </div>
                    <div class="header__mid__container__search__line"></div>
                    <input type="text" placeholder="   Search for Product...">

                    <div class="header__mid__container__search__button">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="header__mid__container__cart">
                    <a href="" class="header__mid__container__cart-setting"><i class="fas fa-cog"></i></a>
                    <a href="" class="header__mid__container__cart-cart"><i class="fas fa-weight-hanging"></i><span>2</span></a>
                </div>
            </div>
        </div>
        <!-- end header mid -->
        <!-- header navbar -->
        <div class="header__navbar">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="header__navbar__left">
                            <div class="header__navbar__left__button">
                                <a class="header__navbar__left__button-icon"><img src="assets/images/cate.png" alt=""></a>
                                <a href="#">Categories</a>
                            </div>

                            <ul class="header__navbar__left-categories">
                                <li>
                                    <a href="#">Baby & Child Care</a>
                                </li>
                                <li>
                                    <a href="#">Supplements</a>
                                </li>
                                <li>
                                    <a href="#">Vitamins</a>
                                </li>
                                <li>
                                    <a href="#">Antioxidants</a>
                                </li>
                                <li>
                                    <a href="#">Sexual Health</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header__navbar__right">
                            <div class="header__navbar__right__button">
                                <a class="header__navbar__right__button-icon">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <ul class="header__navbar__right-menu">
                                <li><a href="">HOME</a></li>
                                <li><a href="">ABOUT</a></li>
                                <li><a href="">SERVICES</a></li>
                                <li><a href="">BLOG</a></li>
                                <li><a href="">PAGE</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header navbar -->
        <!-- header slider -->
        <div id="carouselExampleControls" class="carousel slide header__slider" data-ride="carousel">
            <div class="carousel-inner header__slider__box">
                <div class="carousel-item active header__slider__box__item">
                    <img src="assets/images/slide.png" class="d-block" alt="...">
                    <div class="header__slider__box__item__infor">
                        <div class="header__slider__box__item__infor__text">
                            <p>Find Any <span>Medicine</span></p>
                            <p>You Need!</p>
                            <p>Free Standard Shipping Everyday</p>
                        </div>
                        <a href="#">Shop Now</a>
                        <div class="header__slider__box__item__infor-button"></div>
                    </div>
                </div>
                
                <div class="carousel-item header__slider__box__item">
                    <img src="assets/images/slide.png" class="d-block" alt="...">
                    <div class="header__slider__box__item__infor">
                        <div class="header__slider__box__item__infor__text">
                            <p>Find Any <span>Medicine</span></p>
                            <p>You Need!</p>
                            <p>Free Standard Shipping Everyday</p>
                        </div>
                        <a href="">Shop Now</a>
                        <div class="header__slider__box__item__infor-button"></div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="header__slider-prev">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                </div>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <div class="header__slider-next">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </div>
            </a>
        </div>
        <!-- end header slider -->
    </header>
    <!-- end header -->
    <!-- content -->
    <div class="content">
        <!-- fact -->
        <div class="content__fact">
            <div class="container">
                    <div class="content__fact__box row">
                        <div class="content__fact__box__item col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/ship.jpg" alt="ship">
                            </div>
                            <div class="content__fact__box__item__text">
                                <p>Free Shipping</p>
                                <p>Free shipping for all US order</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="content__fact__box__item__icon support">
                                <img src="assets/images/support.jpg" alt="support">
                            </div>
                            <div class="content__fact__box__item__text">
                                <p>Support 24/7</p>
                                <p>We support 24 hours a day</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="content__fact__box__item__icon day">
                                <img src="assets/images/return.jpg" alt="30days">
                            </div>
                            <div class="content__fact__box__item__text">
                                <p>30 Days Return</p>
                                <p>You have 30 days to return</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/payment.jpg" alt="payment">
                            </div>
                            <div class="content__fact__box__item__text">
                                <p>Secure Payment</p>
                                <p>100% Secure & Safe</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end fact -->
        <!-- banner -->
        <div class="content__banner">
            <div class="container">
                <div class="content__banner__box">
                    <div class="content__banner__box__left">
                        <img src="assets/images/banner3.jpg" alt="">
                        <div class="content__banner__box__left__time">
                            <div class="content__banner__box__left__time-item">
                                <span>230</span>
                                <p>DAYS</p>
                            </div>
                            <div class="content__banner__box__left__time-item">
                                <span>24</span>
                                <p>HRS</p>
                            </div>
                            <div class="content__banner__box__left__time-item">
                                <span>40</span>
                                <p>MINS</p>
                            </div>
                            <div class="content__banner__box__left__time-item">
                                <span>60</span>
                                <p>SEC</p>
                            </div>
                        </div>
                        <div class="content__banner__box__left__infor">
                            <div class="content__banner__box__left__infor__text">
                                <b>BEAUTY & COSMETICS</b>
                                <p>Sale up to <span>40%</span> off</p>
                            </div>
                        </div>
                    </div>
                    <div class="content__banner__box__right">
                        <div class="content__banner__box__right-top">
                            <img src="assets/images/project_07.jpg" alt="">
                            <div class="content__banner__box__right-top__infor">
                                <div class="content__banner__box__right-top__infor__text">
                                    <span>30%</span>
                                    <p>DISCOUNT</p>
                                    <p>For Dietary Supplement</p>
                                </div>
                            </div>
                        </div>
                        <div class="content__banner__box__right-bot">
                            <img src="assets/images/project_10.jpg" alt="">
                            <div class="content__banner__box__right-bot__infor">
                                <div class="content__banner__box__right-bot__infor__text">
                                    <p>ACCESSORIES</p>
                                    <p>Sale up to <span>20%</span> off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner -->
        <!-- top selling product -->
        <div class="container">
            <div class="content__sell">
                <div class="content__sell__top">
                        <div class="content__sell__top__title">
                            <p>TOP SELLING</p>
                        </div>
                        <div class="content__sell__top__shadow">
                            <p>PRODUCTS</p>
                        </div>

                        <div class="content__sell__top__button">
                            <span id="prev" ><i class="fas fa-chevron-left"></i></span>
                            <span id="next" ><i class="fas fa-chevron-right"></i></span>
                        </div>
                </div>

                <div class="content__sell__slider product-slider">
                    <div class="content__sell__slider__box">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/1.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Nature's Bounty Biotin</a></p>
                                    <p><a href="#">10000 MCG</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/2.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Best Colon Detox Formula</a></p>
                                    <p><a href="#">Advanced Colon</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/3.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Natural Factors Vitamin C</a></p>
                                    <p><a href="#">Blueberry Rasp</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/4.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Jarrow Formulas</a></p>
                                    <p><a href="#">Methylcobalamin</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/5.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Nature's Bounty Biotin</a></p>
                                    <p><a href="#">10000 MCG...</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/6.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Best Colon Detox Formula</a></p>
                                    <p><a href="#">Advanced Colon...</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/7.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Natural Factors Vitamin C</a></p>
                                    <p><a href="#">Blueberry Rasp...</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href="#"><img src="assets/images/8.jpg" alt=""></a>
                                    </div>
                                    <p><a href="#">Jarrow Formulas</a></p>
                                    <p><a href="#">Methylcobalamin</a></p>
                                    <p><a href="#">$30.00</a></p>
                                </div>
                            </div>
                    </div>

                    <div class="content__sell__slider__box">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/1.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Nature's Bounty Biotin</a></p>
                                <p><a href="#">10000 MCG</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/2.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Best Colon Detox Formula</a></p>
                                <p><a href="#">Advanced Colon</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/3.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Natural Factors Vitamin C</a></p>
                                <p><a href="#">Blueberry Rasp</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/4.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Jarrow Formulas</a></p>
                                <p><a href="#">Methylcobalamin</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/5.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Nature's Bounty Biotin</a></p>
                                <p><a href="#">10000 MCG...</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/6.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Best Colon Detox Formula</a></p>
                                <p><a href="#">Advanced Colon...</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/7.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Natural Factors Vitamin C</a></p>
                                <p><a href="#">Blueberry Rasp...</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href="#"><img src="assets/images/8.jpg" alt=""></a>
                                </div>
                                <p><a href="#">Jarrow Formulas</a></p>
                                <p><a href="#">Methylcobalamin</a></p>
                                <p><a href="#">$30.00</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top selling product -->
        <!-- latest news -->
        <div class="content__news">
            <div class="container">
                <div class="content__news__title">
                    <p>LATEST NEWS</p>
                </div>

                <div class="content__news__shadow">
                    <p>HOT NEWS</p>
                </div>

                <div class="content__news__box">
                    <div class="content__news__box__item">
                        <a href="#"><img src="assets/images/new1.jpg" alt=""></a>
                        <p><a href="#">Probiotics may help battle antibiotic resistance Probiotics may help</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                    <div class="content__news__box__item">
                        <a href="#"><img src="assets/images/new2.jpg" alt=""></a>
                        <p><a href="#">Study overturns what we know about kidney stones</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                    <div class="content__news__box__item">
                        <a href="#"><img src="assets/images/new3.jpg" alt=""></a>
                        <p><a href="#">Hair loss: Scientists test wearable re- growth device</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest new -->
        <!-- newsletter -->
        <div class="content__newsletter">
            <div class="container">
                <div class="content__newsletter__title">
                    <p>Keep Updated & Get Unlimited Discount</p>
                </div>
                <div class="content__newsletter__singup">
                    <p>Sign up for our newsletter to receive updates and exclusive offers</p>
                </div>
                <div class="content__newsletter__search">
                    <input type="email" placeholder="Enter your email address here">
                    <button type="button">SIGN UP</button>
                </div>
            </div>
        </div>
        <!-- end newsletter -->
        <!-- brands -->
        <div class="content__brand">
            <div class="container">
                <div class="content__brand__row">
                    <div class="content__brand__row__icon1">
                        <img src="assets/images/brand1.jpg" alt="">
                    </div>
                    <div class="content__brand__row__icon2">
                        <img src="assets/images/brand2.jpg" alt="">
                    </div>
                    <div class="content__brand__row__icon3">
                        <img src="assets/images/brand3.jpg" alt="">
                    </div>
                    <div class="content__brand__row__icon4">
                        <img src="assets/images/brand4.jpg" alt="">
                    </div>
                    <div class="content__brand__row__icon5">
                        <img src="assets/images/brand5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- end brands -->
    </div>
    <!-- end content -->
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row footer__infor">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer__infor__contact">
                    <p>CONTACT US</p>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <a href="">Lorem Ipsum has been the indus-try's standard</a></li>
                        <li><i class="far fa-envelope"></i> <a href="">contact@medic.com</a></li>
                        <li><i class="fas fa-mobile-alt"></i> <a href="">+84 (1) 234 567 891</a></li>

                    </ul>
                    <div class="footer__infor__contact__icon">
                        <a href=""><i class="fab fa-facebook-f"></i> </a>
                        <a href=""><i class="fab fa-twitter"></i> </a>
                        <a href=""><i class="fab fa-google-plus-g"></i> </a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer__infor__company">
                    <p>COMPANY</p>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Team Member</a></li>
                        <li><a href="">Carrer</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Affilate</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer__infor__cate">
                    <p>CATEGORIES</p>
                    <ul>
                        <li><a href="">Home medicine</a></li>
                        <li><a href="">Baby & Child</a></li>
                        <li><a href="">Diet & Nutrition</a></li>
                        <li><a href="">Beauty</a></li>
                        <li><a href="">Fitness & Vitamins</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer__infor__link">
                    <p>QUICK LINKS</p>
                    <ul>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Store Location</a></li>
                        <li><a href="">Orders Tracking</a></li>
                        <li><a href="">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 footer__copyright__author">
                        <p>@2018 Design by <a href="#">Creative Wp</a> All Rights Reserved</p>
                    </div>
                    <div class="col-lg-6 col-sm-12 footer__copyright__icon">
                        <img src="assets/images/bank.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>
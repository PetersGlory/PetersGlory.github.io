<?php
include './inc/header.php';
?>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include './inc/topBar.php';?>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-three">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/painting/Johnscreek/IMG-20230602-WA0066.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Welcome to The Paint Masters LLC.</p>
                                        <h2 class="main-slider-three__title">creating <br> masterpieces with <br> brushstrokes of <br>
                                            <span>excellence.</span></h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="./about" class="main-slider-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/painting/exteriorpainting/EDVrwlBiXD0CfuMWZy6PMlc8bq5cZN_euzFQhD9IrUs=_plaintext_638212935359397389.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Your premier destination for professional painting services</p>
                                        <h2 class="main-slider-three__title">Vibrant, Timeless, <br> & Stunning: Experience <br> our Painting <br>
                                            <span>Mastery.</span></h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="./about" class="main-slider-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/images/painting/Suwanee/IMG-20230602-WA0072.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Welcome to The Paint Masters LLC.</p>
                                        <h2 class="main-slider-three__title">Revitalize. <br> Renew. <br>
                                            <span>Refresh.</span></h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="./about" class="main-slider-three__btn thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Three Start-->
        <section class="feature-three">
            <div class="feature-three-bg"
                style="background-image: url(assets/images/backgrounds/feature-three-bg.jpg);"></div>
            <div class="container">
                <div class="feature-three__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="feature-three__top-inner">
                                <ul class="list-unstyled feature-three__top-icon-list">
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <span class="icon-mind"></span>
                                            </div>
                                            <h3 class="feature-three__top-title"><a href="./about">Smart Work</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <span class="icon-wallpaper-2"></span>
                                            </div>
                                            <h3 class="feature-three__top-title"><a href="./about">Unique Design</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <span class="icon-programmer"></span>
                                            </div>
                                            <h3 class="feature-three__top-title"><a href="#">Skilled Team</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <span class="icon-best-price"></span>
                                            </div>
                                            <h3 class="feature-three__top-title"><a href="./contact">Best Pricing</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <span class="icon-like"></span>
                                            </div>
                                            <h3 class="feature-three__top-title"><a href="./about">Quality
                                                    Material</a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-three__bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="feature-three__bottom-inner">
                                    <div class="feature-three__bottom-left">
                                        <p class="feature-three__bottom-text text-white">Our services does not end here. Find out
                                            how we can help your <span>Home & Office.</span></p>
                                    </div>
                                    <a href="./services" class="feature-three__btn thm-btn">More Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Three End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"></div>
            <div class="why-choose-one-shape-2 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
            </div>
            <div class="why-choose-one-shape-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="assets/images/painting/ANTHENS/why.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Why choose us</span>
                                <h2 class="section-title__title">We focus on exceeding expectations.</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <ul class="list-unstyled why-choose-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Quality Craftsmanship</h4>
                                        <p>We take pride in delivering high-quality workmanship that exceeds your 
                                            expectations. Our team of experienced painters pays meticulous attention 
                                            to detail, ensuring smooth finishes, precise lines, and long-lasting 
                                            results.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Extensive Expertise</h4>
                                        <p>
                                            With over a decade of experience in the industry, our painters have 
                                            encountered a wide range of projects, from residential to commercial, 
                                            interior to exterior. No matter the size or complexity of the job, we have 
                                            the knowledge and skills to handle it with professionalism and efficiency.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="./about" class="thm-btn why-choose-one__btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="brand-one__title">
                                <h2>Trusted by More then 8800 Most Popular Brands</h2>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="brand-one__main-content">
                                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                           "0": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "375": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "575": {
                               "spaceBetween": 30,
                               "slidesPerView": 3
                           },
                           "767": {
                               "spaceBetween": 50,
                               "slidesPerView": 4
                           },
                           "991": {
                               "spaceBetween": 50,
                               "slidesPerView": 5
                           },
                           "1199": {
                               "spaceBetween": 100,
                               "slidesPerView": 5
                           }
                       }}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Services One Start-->
        <section class="services-one services-three">
            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);"></div>
            </div>
            <div class="services-three-bg-box">
                <div class="services-three-bg"
                    style="background-image: url(assets/images/backgrounds/services-three-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Services</span>
                    <h2 class="section-title__title">Services We’re Offering</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/cummings/IMG-20230602-WA0036.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-3"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Interior Painting</a></h3>
                                <p class="services-one__text">
                                    Transform your living spaces with a fresh coat of paint that reflects your style and personality.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/john/IMG-20230602-WA0003.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-4"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Exterior Painting</a></h3>
                                <p class="services-one__text">
                                    Enhance your home's curb appeal and protect it from the elements with our professional exterior painting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/ANTHENS/why.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-paint"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Commercial Painting</a></h3>
                                <p class="services-one__text">
                                    Create an inviting and professional environment for your business with our commercial painting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/Atlanta/IMG-20230602-WA0081.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-3"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Pressure washing</a></h3>
                                <p class="services-one__text">
                                When regular cleaning methods fall short, pressure washing comes to the rescue.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/Suwanee/IMG-20230602-WA0072.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-4"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Flooring installation</a></h3>
                                <p class="services-one__text">
                                    When it comes to transforming the look and feel of a room, few things have as much impact as a new flooring installation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__img">
                                <img src="assets/images/painting/Johnscreek/IMG-20230602-WA0063.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-paint"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./services">Cabinet Painting</a></h3>
                                <p class="services-one__text">
                                    Giving your cabinets a fresh coat of paint can completely transform the space, giving it a new and updated appearance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="main-menu-three__btn-box col-3 text-center">
                    <a href="./services" class="main-menu-three__btn thm-btn">View More</a>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--More Services Two Start-->
        <section class="more-services-two">
            <div class="more-services-two-shape float-bob-x">
                <img src="assets/images/shapes/more-services-two-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--More Services Two Single-->
                        <div class="more-services-two__single">
                            <div class="more-services-two__img-box">
                                <div class="more-services-two__img">
                                    <img src="assets/images/resources/more-services-two-img-1.jpg" alt="">
                                </div>
                                <div class="more-services-two__icon">
                                    <span class="icon-house"></span>
                                </div>
                            </div>
                            <div class="more-services-two__content">
                                <p class="more-services-two__sub-title">Services We’re Offering</p>
                                <h3 class="more-services-two__title">Residential Painting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--More Services Two Single-->
                        <div class="more-services-two__single more-services-two__single-two">
                            <div class="more-services-two__img-box">
                                <div class="more-services-two__img">
                                    <img src="assets/images/resources/more-services-two-img-2.jpg" alt="">
                                </div>
                                <div class="more-services-two__icon">
                                    <span class="icon-apartment"></span>
                                </div>
                            </div>
                            <div class="more-services-two__content">
                                <p class="more-services-two__sub-title">Services We’re Offering</p>
                                <h3 class="more-services-two__title">Commercial Painting</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--More Services Two End-->

        <!--Project Three Start-->
        <section class="project-three">
            <div class="project-three__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-three__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Successful Project</span>
                                    <h2 class="section-title__title">Keep Your Eye on Our <br> Latest Projects</h2>
                                    <div class="section-title__line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-three__top-right">
                                <p class="project-three__top-text">Lorem ipsum dolor sit amet elit, sed do eiusmod
                                    tempor to incidut labore et dolore magna for aliqua. Cum sociis natoque penatibus et
                                    magnis dis partu rient to montes. Aene an massa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-three__bottom">
                <div class="project-three__container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img-box">
                                    <div class="project-three__img">
                                        <img src="assets/images/project/project-3-1.jpg" alt="">
                                        <div class="project-three__arrow">
                                            <a href="./projects"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="project-three__content">
                                            <h3 class="project-three__title"><a href="./projects">Exterior
                                                    Design</a></h3>
                                            <p class="project-three__sub-title">Room Wallsheet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img-box">
                                    <div class="project-three__img">
                                        <img src="assets/images/project/project-3-2.jpg" alt="">
                                        <div class="project-three__arrow">
                                            <a href="./projects"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="project-three__content">
                                            <h3 class="project-three__title"><a href="./projects">Room
                                                    Wallsheet</a></h3>
                                            <p class="project-three__sub-title">Wall Protection</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img-box">
                                    <div class="project-three__img">
                                        <img src="assets/images/project/project-3-3.jpg" alt="">
                                        <div class="project-three__arrow">
                                            <a href="./projects"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="project-three__content">
                                            <h3 class="project-three__title"><a href="./projects">Wall
                                                    Paintings</a></h3>
                                            <p class="project-three__sub-title">Room Wallsheet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <!--Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__img-box">
                                    <div class="project-three__img">
                                        <img src="assets/images/project/project-3-4.jpg" alt="">
                                        <div class="project-three__arrow">
                                            <a href="./projects"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="project-three__content">
                                            <h3 class="project-three__title"><a href="./projects">Room
                                                    Interior</a></h3>
                                            <p class="project-three__sub-title">Room Wallsheet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Three End-->

        <!--Counter One Start-->
        <section class="couonter-one">
            <div class="counter-one-bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);">
            </div>
            <div class="container">
                <ul class="list-unstyled couonter-one__list clearfix">
                    <li class="couonter-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <span class="icon-handshake"></span>
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <h3 class="odometer" data-count="591">00</h3>
                                </div>
                                <p class="couonter-one__text">Project Completed</p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <span class="icon-good-review"></span>
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <h3 class="odometer" data-count="446">00</h3>
                                </div>
                                <p class="couonter-one__text">Satisfied Customers</p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <span class="icon-award"></span>
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <h3 class="odometer" data-count="200">00</h3>
                                </div>
                                <p class="couonter-one__text">Awards Winnings</p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow fadeInLeft" data-wow-delay="400ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <span class="icon-paint-palette"></span>
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <h3 class="odometer" data-count="729">00</h3>
                                </div>
                                <p class="couonter-one__text">Wall & Paintings Design</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-two-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">testimonials</span>
                    <h2 class="section-title__title">What They Say?</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-two__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        The paint masters did an amazing work. All the crews were professional, gentle, 
                                        polite. Painting 27' great room and hallway with a lot of details looked not 
                                        easy, but they finished it with quality in a tight deadline. Reasonably priced 
                                        and high quality work
                                    </p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Eric lee</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        They have done commercial work for a number of my clients and they are always 
                                        happy they used them. They have an excellent training program for their 
                                        workers and it shows. I will continue to recommend them.
                                    </p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Alexia N</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        Okay so after days and days of looking for painters to do our interior painting, 
                                        I had lost hope and decided to do the whole house myself. UNTIL I met a friend 
                                        who told me about this company and it worked out just perfectly. The paint 
                                        masters was super nice and accommodating with our busy timings and tight 
                                        schedule.
                                    </p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Janet Smith</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        The Paint masters is a top notch company that provides quality work done in a 
                                        professional manner. They are recognized as industry leaders because of their 
                                        breadth of knowledge and many different skill sets. I have been a vendor of 
                                        the Paint masters for some time now. They demand the best from their vendors 
                                        and employees so they can provide YOU, their customer, with the results 
                                        you require
                                    </p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Victoria S</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        I have worked with The Paint Masters for couple of times and they have 
                                        always gone above and beyond each time I used them. The last time was when 
                                        we needed to paint our last home. They brought in all the right equipment, 
                                        set up and quickly did a quality job, cleaned up after themselves and asked 
                                        me if I was happy with each phase of the job as they took me through each 
                                        room. I highly recommend The Paint Masters.
                                    </p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">A. Comfort</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <!-- <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Lorem ipsum dolor sit amet elit, sed do eiusmod
                                        tempor to incidut labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--Testimonial One Single-->
                                <!-- <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Lorem ipsum dolor sit amet elit, sed do eiusmod
                                        tempor to incidut labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">John Smith</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--Testimonial One Single-->
                                <!-- <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Lorem ipsum dolor sit amet elit, sed do eiusmod
                                        tempor to incidut labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--Testimonial One Single-->
                                <!-- <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Lorem ipsum dolor sit amet elit, sed do eiusmod
                                        tempor to incidut labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                            <p class="testimonial-one__client-title">Our Customer</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Blog Three Start-->
        <!-- <section class="blog-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="blog-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">News & Updates</span>
                                <h2 class="section-title__title">Latest News & Articles</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="blog-three__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to
                                incidut labore et dolore magna for aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="blog-three__right">
                            <div class="blgo-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1200": {
                                        "items": 2.25545
                                    }
                                }
                            }'>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Learn the Right Way to
                                                Use Wall Sheet</a></h3>
                                    </div>
                                </div>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Leverage agile
                                                frameworks to provide</a></h3>
                                    </div>
                                </div>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Bring to the table
                                                win-win survival strategis</a></h3>
                                    </div>
                                </div>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Learn the Right Way to
                                                Use Wall Sheet</a></h3>
                                    </div>
                                </div>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Leverage agile
                                                frameworks to provide</a></h3>
                                    </div>
                                </div>
                                
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                        <a href="blog-details.html">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__content">
                                        <div class="blog-one__date">
                                            <p>20 Feb, 2022</p>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin
                                                </a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-one__title"><a href="blog-details.html">Bring to the table
                                                win-win survival strategis</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Blog Three End-->

        <!--Contact One Start-->
        <section class="contact-one mb-5">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact us</span>
                    <h2 class="section-title__title">Feel Free to Write</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__left">
                            <form action="https://ambed-html.vercel.app/main-html/assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__form-input-box text-message-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="thm-btn contact-one__btn">Send a
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__right">
                            <div class="contact-one__right-shape-1"
                                style="background-image: url(assets/images/shapes/contact-one-right-shape-1.png);">
                            </div>
                            <ul class="list-unstyled contact-one__info">
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>Call anytime</p>
                                        <h5><a href="tel:980009630">+ 98 (000) - 9630</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>Send email</p>
                                        <h5><a href="mailto:ambed@company.com">ambed@company.com</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>Visit Office</p>
                                        <h5>380 St Kilda Golden Road Melbourne, Australia</h5>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Google Map Start-->
        <!-- <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>

        </section> -->
        <!--Google Map End-->

        <?php include './inc/footer-bottom.php';?>


    </div><!-- /.page-wrapper -->

<?php
include './inc/footer.php';
?>
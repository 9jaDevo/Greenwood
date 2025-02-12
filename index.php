<?php
// Start the session to access session variables
session_start();

// Include database connection
include('config.php');

// Get the total number of submissions from the database
$totalParticipantsQuery = "SELECT COUNT(*) AS total FROM submissions";
$result = $conn->query($totalParticipantsQuery);
$totalParticipants = $result->fetch_assoc()['total'];
$displayCount = 3000 + $totalParticipants; // Static 3000 + DB count
?>
<!doctype html>
<html lang="en">
<?php
include('header.php');
?>

<body>

    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader start -->
    <div class="preloader">
        <div class="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <div class="body_wrap-two">

        <!-- header start -->
        <header id="xb-header-area" class="header-area heade-style-two">
            <div class="xb-header stricky">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header-logo">
                            <a href="#"><img src="assets/img/logo/Logo.svg" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">

                            <div class="xb-header-wrap">
                                <div class="xb-header-menu">
                                    <div class="xb-header-menu-scroll">
                                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                        <div class="xb-logo-mobile xb-hide-xl">
                                            <a href="#" rel="home"><img src="assets/img/logo/Logo.svg" alt=""></a>
                                        </div>
                                        <div class="xb-header-mobile-search xb-hide-xl">
                                            <form role="search" action="#">
                                                <input type="text" placeholder="Search..." name="s"
                                                    class="search-field">
                                            </form>
                                        </div>
                                        <nav class="xb-header-nav">
                                            <ul class="xb-menu-primary clearfix">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="index.html"><span>Home</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="index.html"><span>ICO
                                                                    Investment</span></a></li>
                                                        <li class="menu-item"><a href="home-2.html"><span>Crypto
                                                                    Exchange</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="scrollspy-btn" href="#features"><span>Features</span></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="scrollspy-btn"
                                                        href="#integration"><span>Integration</span></a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#!"><span>Blog</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html"><span>Blog</span></a></li>
                                                        <li><a href="blog-single.html"><span>Blog Details</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="contact.html"><span>Contact</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="xb-header-menu-backdrop"></div>
                            </div>
                        </div>
                        <div class="header-btn ul_li">
                            <a class="login-btn" href="#!"><i class="fas fa-user"></i> Login</a>
                            <div class="header-bar-mobile side-menu d-lg-none">
                                <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- main area start  -->
        <main>
            <!-- hero section start  -->
            <section class="hero hero-two pos-rel pt-120 mb-160">
                <div class="hero-img" data-background="assets/img/bg/hero-bg2.png"></div>
                <div class="hero-shape-two">
                    <div class="shape--1">
                        <img class="topToBottom" src="assets/img/shape/hero-sp_07.svg" alt="">
                    </div>
                    <div class="shape--2">
                        <img class="leftToRight" src="assets/img/shape/hero-sp_08.svg" alt="">
                    </div>
                </div>
                <div class="xb-hero-shape">
                    <div class="shape shape--1">
                        <img class="rotateme2" src="assets/img/shape/h_shape1.png" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img class="rotateme" src="assets/img/shape/h_shape2.png" alt="">
                    </div>
                    <div class="shape shape--3">
                        <img src="assets/img/shape/h_shape3.png" alt="">
                    </div>
                    <div class="shape shape--4"></div>
                </div>
                <div class="container pos-rel">
                    <div class="hero__content-wrap hero-style-two text-center">
                        <div class="section-title hero--sec-titlt-two wow fadeInUp" data-wow-duration=".7s">
                            <h1 class="title">Greenwood AI Empowering<br> the <span>Future</span> of Crypto</h1>
                        </div>
                        <p class="xb-item--content wow fadeInUp" data-wow-duration=".7s" data-wow-delay="150ms">Join the
                            Greenwood AI revolution and be part of the next big thing in cryptocurrency. Claim your free
                            airdrop today and take the first step toward smarter, greener blockchain technology.</p>
                        <div class="hero__btn btns pt-60 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms">
                            <a class="them-btn" href="#form">
                                <span class="btn_label" data-text="Get Started">Get Started</span>
                                <span class="btn_icon">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                            <a href="contact.html" class="them-btn btn-transparent">
                                <span class="btn_label" data-text="Explore More">Explore More</span>
                                <span class="btn_icon">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="hero-dashbord wow fadeInUp" data-wow-duration=".7s" data-wow-delay="350ms">
                            <img src="assets/img/hero/Dashbord.png" alt="">
                            <div class="dashbord-shape">
                                <div class="shape shape--1">
                                    <img class="topToBottom" src="assets/img/shape/hero-sp_09.svg" alt="">
                                </div>
                                <div class="shape shape--2">
                                    <img class="topToBottom2" src="assets/img/shape/hero-sp_10.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-overlay-shape">
                    <div class="shape shape--1">
                        <img src="assets/img/hero/shape-color1.png" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="assets/img/hero/shape-color2.png" alt="">
                    </div>
                </div>
            </section>
            <!-- hero section end  -->

            <!-- partners section start  -->
            <section class="partners z-1 pos-rel partners-two pt-200">
                <div class="patners-title text-center">
                    <span><img src="assets/img/partner/partner_07.png" alt=""> our top partners <img
                            src="assets/img/partner/partner_08.png" alt=""></span>
                </div>
                <div class="partner-slider partner-slider-two ul_li">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_09.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_10.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_11.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_12.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_13.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_09.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_14.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_15.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_16.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_14.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="assets/img/partner/partner_15.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- partners section end  -->

            <!-- feature section start -->
            <!-- <section class="feature z-1 pos-rel pt-110">
                <div class="container">
                    <div class="section-title pb-55">
                        <h1 class="title">How It Works</h1>
                    </div>
                    <div class="row mt-none-30">
                        <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                            <div class="xb-feature pos-rel">
                                <div class="xb-item--holder text-center">
                                    <div class="xb-item--img">
                                        <img src="assets/img/feature/feature-icon1.png" alt="">
                                    </div>
                                    <h2 class="xb-item--title">Create Wallet</h2>
                                    <p class="xb-item--content">Secure your digital assets effortlessly.Join now for
                                        peace of mind.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                            <div class="xb-feature top-border pos-rel">
                                <div class="xb-item--holder text-center">
                                    <div class="xb-item--img">
                                        <img src="assets/img/feature/feature-icon2.png" alt="">
                                    </div>
                                    <h2 class="xb-item--title">Create Account</h2>
                                    <p class="xb-item--content">Get started in seconds. Sign up for your account
                                        effortlessly with us today.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                            <div class="xb-feature pos-rel">
                                <div class="xb-item--holder text-center">
                                    <div class="xb-item--img">
                                        <img src="assets/img/feature/feature-icon3.png" alt="">
                                    </div>
                                    <h2 class="xb-item--title">Register</h2>
                                    <p class="xb-item--content">Begin your journey swiftly. Sign up now and access
                                        limitless with ease.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                            <div class="xb-feature top-border pos-rel">
                                <div class="xb-item--holder text-center">
                                    <div class="xb-item--img">
                                        <img src="assets/img/feature/feature-icon1.png" alt="">
                                    </div>
                                    <h2 class="xb-item--title">Start Trading</h2>
                                    <p class="xb-item--content">Dive in now. Seamlessly begin your trading journey with
                                        us endless possibilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xb-feature-shape">
                    <div class="shape shape--1">
                        <img src="assets/img/shape/h_shape3.png" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img data-parallax='{"y":-70}' src="assets/img/shape/f_line_shape.png" alt="">
                    </div>
                </div>
            </section> -->
            <!-- feature section end -->

            <!-- Request Email and Wallet Address Section Start -->
            <section class="request-info z-1 pos-rel pt-110">
                <div class="container">
                    <div class="section-title pb-55 text-center" id="form">
                        <h1 class="title">Join the Airdrop</h1>
                        <p>Enter your email and wallet address to participate in the Greenwood AI airdrop and unlock
                            your crypto rewards.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <form id="airdrop-form" class="airdrop-form" action="submit_airdrop.php" method="POST">
                                <div class="form-group mb-20">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter your email address" required>
                                </div>
                                <div class="form-group mb-20">
                                    <label for="wallet" class="form-label">Wallet Address</label>
                                    <input type="text" id="wallet" name="wallet" class="form-control"
                                        placeholder="Enter your wallet address" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Display Success/Error Message from Session -->
                    <?php if (isset($_SESSION['status']) && isset($_SESSION['message'])): ?>
                        <div class="alert alert-<?= $_SESSION['status'] == 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show"
                            role="alert">
                            <strong>
                                <?= ucfirst($_SESSION['status']); ?>!
                            </strong>
                            <?= $_SESSION['message']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <?php if ($_SESSION['status'] == 'success'): ?>
                            <div class="text-center mt-3">
                                <p>Your Waitlist Position: <strong>
                                        <?= $_SESSION['position']; ?>
                                    </strong></p>
                                <p>Total Participants: <strong>
                                        <?= $_SESSION['total']; ?>
                                    </strong></p>
                                <p>Your Referral Code: <strong>
                                        <?= $_SESSION['referral_code']; ?>
                                    </strong></p>
                            </div>

                            <!-- Referral Link Section -->
                            <div id="referral-link-container" class="text-center" style="margin-top: 20px;">
                                <p><strong>Your Referral Code: </strong><span id="referral-link">
                                        <?= $referral_code; ?>
                                    </span></p>
                                <button class="btn btn-primary" id="copy-referral-link">Copy Referral Link</button>
                                <button class="btn btn-info" id="share-referral-link">Share Referral Link</button>
                            </div>
                        <?php endif; ?>

                        <!-- Clear session data after showing the message to avoid it showing again after page reload -->
                        <?php
                        unset($_SESSION['status']);
                        unset($_SESSION['message']);
                        unset($_SESSION['position']);
                        unset($_SESSION['referral_code']);
                        unset($_SESSION['total']);
                        ?>
                    <?php endif; ?>

                </div>
            </section>
            <!-- Request Email and Wallet Address Section End -->


            <!-- Advert -->
            <section id="features" class="feature pos-rel z-1 mt-130">
                <div class="feature-crypto-wrap pt-125 pb-120">
                    <div class="fea-shape">
                        <img src="assets/img/feature/fea-shape-01.png" alt="">
                        <img src="assets/img/feature/fea-shape-01.png" alt="">
                    </div>
                    <div class="feature-counter-wrap pt-130">
                        <div class="container">

                        </div>
                    </div>
                </div>
            </section>
            <!-- feature crypto end -->



            <!-- faq start -->
            <section class="faq pos-rel mt-130 pb-5">
                <div class="faq-shape_two">
                    <img src="assets/img/shape/faq-shape01.svg" alt="">
                    <img src="assets/img/shape/faq-shape01.svg" alt="">
                    <img class="topToBottom" src="assets/img/shape/faq-shape02.svg" alt="">
                    <img class="topToBottom2" src="assets/img/shape/faq-shape03.svg" alt="">
                </div>
                <div class="container">
                    <div class="section-title pb-55">
                        <h1 class="title">Frequently Asked Questions</h1>
                    </div>
                    <div class="faq__blockchain-two">
                        <ul class="accordion_box clearfix">
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q1:</span> What is Greenwood AI, and how does it contribute to the
                                        blockchain ecosystem?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Greenwood AI uses cutting-edge artificial intelligence to optimize
                                            blockchain processes, enhance security, and make cryptocurrency transactions
                                            faster and more efficient. By integrating AI into blockchain, we aim to
                                            create a smarter, greener, and more sustainable crypto ecosystem.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block active-block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q2:</span> How can I participate in the Greenwood AI airdrop?
                                    </div>
                                    <div class="acc_body current">
                                        <div class="content">
                                            To participate in the Greenwood AI airdrop, simply enter your email address
                                            and wallet address in the signup form on our website. Once you submit the
                                            form, you will receive instructions on how to claim your free tokens.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q3:</span> Is Greenwood AI planning to release a mobile app?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Yes, we are currently developing a mobile app for Greenwood AI, which will
                                            allow users to track their investments, interact with the blockchain, and
                                            manage their airdrop rewards seamlessly on their smartphones.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q4:</span> What are the benefits of using Greenwood AI's blockchain
                                        technology?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Greenwood AI's blockchain technology leverages artificial intelligence to
                                            improve transaction efficiency, reduce energy consumption, and enhance
                                            overall network security. This helps ensure faster, greener, and more secure
                                            cryptocurrency transactions, benefiting both users and the ecosystem.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q5:</span> How long does it take to receive rewards from the Greenwood AI
                                        airdrop?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            After you successfully submit your details for the Greenwood AI airdrop, you
                                            will receive your rewards once airdrop wallet submission is closed. Be sure
                                            to check your email regularly for updates and instructions on how to access
                                            your tokens.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- faq end -->


        </main>
        <!-- main area end  -->

        <!-- footer strt <footer class="footer z-1 second-footer pos-rel"> -->
        <footer class="footer z-1 pos-rel">
            <div class="footer-bg bg_img" data-background="assets/img/footer/footer-bg.png"></div>
            <div class="container">
                <!-- <div class="xb-contact-form">
                    <div class="row g-0 mt-none-30">
                        <div class="col-lg-7 mt-30">
                            <div class="xb-inner">
                                <h5 class="xb-item--sub-title"><span><img src="assets/img/footer/contact.svg"
                                            alt=""></span> Contact Us</h5>
                                <h2 class="xb-item--title">Do you have questions or went more information?</h2>
                                <form class="xb-item--form" action="#!">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="assets/img/footer/contact-user.svg" alt=""></span>
                                                <input type="text" placeholder="Steven Kevin">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="assets/img/footer/contact-email.svg" alt=""></span>
                                                <input type="email" placeholder="example@cryco.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="xb-item--field">
                                                <span><img src="assets/img/footer/contact-call.svg" alt=""></span>
                                                <input type="text" placeholder="+91 081 0256 023">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 xb-item--text-msg">
                                            <span><img src="assets/img/footer/contact-massage.svg" alt=""></span>
                                            <textarea class="xb-item--massage" name="message" id="message" cols="30"
                                                rows="10" placeholder="Simultaneously we had a problem..."></textarea>
                                        </div>
                                        <div class="col-lg-12 xb-item--contact-btn">
                                            <button class="them-btn" type="submit">
                                                <span class="btn_label" data-text="Send Message">Send Message</span>
                                                <span class="btn_icon">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                                            fill="white"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-30">
                            <div class="footer-apps">
                                <div class="xb-item--img pos-rel">
                                    <img src="assets/img/footer/footer-phn.png" alt="">
                                    <div class="xb-item--shadow">
                                        <img src="assets/img/footer/foote-app-shadow.png" alt="">
                                    </div>
                                </div>
                                <div class="xb-item--holder text-center">
                                    <h2 class="xb-item--title">Download and enjoy the experience</h2>
                                    <p class="xb-item--content">Don't miss out! Download now for seamless
                                        functionalities and endless possibilities.</p>
                                    <div class="xb-item--button">
                                        <a class="them-btn apps-btn" href="#!">
                                            <span class="btn_icon">
                                                <i class="fab fa-apple"></i>
                                            </span>
                                            <span class="btn_label" data-text="Apple iOS">Apple iOS</span>
                                        </a>
                                        <a class="them-btn apps-btn" href="#!">
                                            <span class="btn_icon"><svg width="21" height="14" viewBox="0 0 21 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.398804 12.1266C0.537847 10.5267 1.04394 9.05395 1.91712 7.70827C2.78967 6.3626 3.95204 5.29345 5.40423 4.50098L3.68942 1.63014C3.59672 1.49556 3.57354 1.35352 3.61989 1.204C3.66624 1.05447 3.76666 0.942338 3.92114 0.867577C4.04473 0.792815 4.18378 0.777861 4.33826 0.822713C4.49276 0.867577 4.61635 0.957281 4.70904 1.09186L6.42386 3.96269C7.75246 3.42441 9.14288 3.15528 10.5951 3.15528C12.0472 3.15528 13.4377 3.42441 14.7662 3.96269L16.4811 1.09186C16.5738 0.957281 16.6974 0.867577 16.8518 0.822713C17.0063 0.777861 17.1454 0.792815 17.269 0.867577C17.4235 0.942338 17.5239 1.05447 17.5702 1.204C17.6165 1.35352 17.5934 1.49556 17.5007 1.63014L15.7859 4.50098C17.238 5.29345 18.4007 6.3626 19.2739 7.70827C20.1464 9.05395 20.6523 10.5267 20.7913 12.1266V13.826H0.398804V12.1266ZM6.78336 9.3339C6.55904 9.55096 6.28467 9.6595 5.96025 9.6595C5.63581 9.6595 5.36175 9.55096 5.13805 9.3339C4.91374 9.1174 4.80158 8.85207 4.80158 8.53814C4.80158 8.22409 4.91374 7.95888 5.13805 7.74238C5.36175 7.5252 5.63581 7.41666 5.96025 7.41666C6.28467 7.41666 6.55904 7.5252 6.78336 7.74238C7.00706 7.95888 7.11891 8.22409 7.11891 8.53814C7.11891 8.85207 7.00706 9.1174 6.78336 9.3339ZM16.0527 9.3339C15.8283 9.55096 15.5539 9.6595 15.2296 9.6595C14.9051 9.6595 14.6311 9.55096 14.4074 9.3339C14.1831 9.1174 14.071 8.85207 14.071 8.53814C14.071 8.22409 14.1831 7.95888 14.4074 7.74238C14.6311 7.5252 14.9051 7.41666 15.2296 7.41666C15.5539 7.41666 15.8283 7.5252 16.0527 7.74238C16.2764 7.95888 16.3882 8.22409 16.3882 8.53814C16.3882 8.85207 16.2764 9.1174 16.0527 9.3339Z"
                                                        fill="#080B18"></path>
                                                </svg></span>
                                            <span class="btn_label" data-text="Android">Android</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="container pt-65">
                <div class="xb-footer">
                    <!-- <div class="xb-contact_info ul_li_between pb-50">
                        <div class="contact-method">
                            <span><img src="assets/img/footer/footer-msg-icon.png" alt=""></span>
                            contact@cryco.com
                        </div>
                        <div class="contact-method">
                            <span><img src="assets/img/footer/footer-call-icon.png" alt=""></span>
                            +(1) 1230 452 8597
                        </div>
                        <div class="contact-method">
                            <span><img src="assets/img/footer/footer-loc-icon.png" alt=""></span>
                            Waterloo, Park, Australia
                        </div>
                    </div>
                    <div class="xb-footer-widget ul_li_between">
                        <ul class="xb-item--footer_nav ul_li">
                            <li><a href="#!">Home</a></li>
                            <li><a href="#!">Features</a></li>
                            <li><a href="#!">Integration</a></li>
                            <li><a href="#!">Blog</a></li>
                            <li><a href="#!">Contact</a></li>
                        </ul>
                        <div class="xb-item--footer_eamil">
                            <span><img src="assets/img/footer/sms-tracking.png" alt=""></span>
                            <input type="email" placeholder="Enter your email">
                            <button>Subscribe</button>
                        </div>
                    </div> -->
                    <div class="footer-copyright ul_li_between pt-40 pb-40">
                        Copyright © 2025 GreenWordAI. All rights reserved.
                        <ul class="footer-link ul_li">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-telegram-plane"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ft-shape">
                <div class="shape shape--1 rotateme">
                    <img src="assets/img/shape/h_shape1.png" alt="">
                </div>
                <div class="shape shape--2 rotateme2">
                    <img src="assets/img/shape/h_shape2.png" alt="">
                </div>
                <div class="shape shape--3 rotateme">
                    <img src="assets/img/shape/h_shape1.png" alt="">
                </div>
                <div class="shape shape--4 rotateme2">
                    <img src="assets/img/shape/h_shape2.png" alt="">
                </div>
            </div>
            <div class="footer-line">
                <div class="line line--1">
                    <img data-parallax='{"y":-70}' src="assets/img/shape/ft_line.png" alt="">
                </div>
                <div class="line line--2">
                    <img data-parallax='{"y":70}' src="assets/img/shape/ft_line.png" alt="">
                </div>
            </div>
            <div class="xb-round_ranner">
                <img class="spin-img" src="assets/img/footer/round_ranner.png" alt="">
                <span><img src="assets/img/footer/xb-frame.png" alt=""></span>
            </div>
        </footer>
        <!-- footer end -->

    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   


    <!-- jquery include -->
    <!-- <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/main.js"></script> -->

    <?php
    include('footer.php');
    ?>


</body>

</html>
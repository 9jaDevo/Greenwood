<?php
// Include database connection
include('config.php');

// Get the total number of submissions from the database
$totalParticipantsQuery = "SELECT COUNT(*) AS total FROM submissions";
$result = $conn->query($totalParticipantsQuery);
$totalParticipants = $result->fetch_assoc()['total'];
$displayCount = 3000 + $totalParticipants; // Static 3000 + DB count
?>
<!doctype html>
<html lang="zxx">

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
                            <a href="index.html"><img src="assets/img/logo/Logo.svg" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">

                            <div class="xb-header-wrap">
                                <div class="xb-header-menu">
                                    <div class="xb-header-menu-scroll">
                                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                        <div class="xb-logo-mobile xb-hide-xl">
                                            <a href="index.html" rel="home"><img src="assets/img/logo/Logo.svg"
                                                    alt=""></a>
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

            <!-- Request Email and Wallet Address Section Start -->
            <section class="request-info z-1 pos-rel pt-110">
                <div class="container">
                    <div class="section-title pb-55 text-center">
                        <h1 class="title">Join the Airdrop</h1>
                        <p>Enter your email and wallet address to participate in the Greenwood AI airdrop and unlock your crypto rewards.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <form id="airdrop-form" class="airdrop-form">
                                <div class="form-group mb-20">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                </div>
                                <div class="form-group mb-20">
                                    <label for="wallet" class="form-label">Wallet Address</label>
                                    <input type="text" id="wallet" name="wallet" class="form-control" placeholder="Enter your wallet address" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Waitlist Info -->
                    <div id="waitlist-info" class="text-center" style="display: none; margin-top: 20px;">
                        <h3>Your Waitlist Position: <span id="position"></span></h3>
                        <p>Total Participants: <span id="total"></span></p>
                        <p>Your Referral Code: <strong id="referral-code"></strong></p>
                    </div>
                </div>
            </section>

            <!-- Request Email and Wallet Address Section End -->


            <!-- feature crypto start -->
            <section id="features" class="feature pos-rel z-1 mt-130">
                <div class="feature-crypto-wrap pt-125 pb-120">
                    <div class="fea-shape">
                        <img src="assets/img/feature/fea-shape-01.png" alt="">
                        <img src="assets/img/feature/fea-shape-01.png" alt="">
                    </div>
                    <div class="feature-counter-wrap pt-130">
                        <div class="container">
                            <div class="row mt-none-30">
                                <div class="col-lg-3 col-md-6 mt-30">
                                    <div class="xb-feature-inner">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="280">00</span><span class="suffix">K+</span></h2>
                                            <span class="sub-title">Your Waitlist Position</span>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-30">
                                    <div class="xb-feature-inner">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="99">00</span><span class="suffix">%</span></h2>
                                            <span class="sub-title">Total Participants</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-30">
                                    <div class="xb-feature-inner">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="100000">00</span><span
                                                    class="suffix">K+</span></h2>
                                            <span class="sub-title">Distributed Amount</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-30">
                                    <div class="xb-feature-item">
                                        <h2 class="title"><span class="xbo" data-count="100">00</span><span
                                                class="suffix">%</span></h2>
                                        <span class="sub-title">Security Certification</span>
                                    </div>
                                </div>
                            </div>
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
                                        <span>Q1:</span> How do I get started with trading on your platform?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            Here are some points about the cryptocurrencies you can trade on our
                                            exchange:
                                            <ul class="list-item">
                                                <li>Major Cryptocurrencies.</li>
                                                <li>New and Emerging Tokens.</li>
                                                <li>Popular Altcoins.</li>
                                            </ul>
                                            We offer a wide range of cryptocurrencies for trading, including popular
                                            options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                            Our platform regularly updates the list of available cryptocurrencies access
                                            options.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block active-block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q2:</span>What cryptocurrencies can I trade on your exchange?
                                    </div>
                                    <div class="acc_body current">
                                        <div class="content">
                                            <ul class="list-item">
                                                <li>Major Cryptocurrencies.</li>
                                                <li>New and Emerging Tokens.</li>
                                                <li>Popular Altcoins.</li>
                                            </ul>
                                            We offer a wide range of cryptocurrencies for trading, including popular
                                            options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                            Our platform regularly updates the list of available cryptocurrencies access
                                            options.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q3:</span>Is there a mobile app available for trading?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <ul class="list-item">
                                                <li>Major Cryptocurrencies.</li>
                                                <li>New and Emerging Tokens.</li>
                                                <li>Popular Altcoins.</li>
                                            </ul>
                                            We offer a wide range of cryptocurrencies for trading, including popular
                                            options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                            Our platform regularly updates the list of available cryptocurrencies access
                                            options.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q4:</span>What are your trading fees?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <ul class="list-item">
                                                <li>Major Cryptocurrencies.</li>
                                                <li>New and Emerging Tokens.</li>
                                                <li>Popular Altcoins.</li>
                                            </ul>
                                            We offer a wide range of cryptocurrencies for trading, including popular
                                            options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                            Our platform regularly updates the list of available cryptocurrencies access
                                            options.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>Q5:</span>How long do deposits and withdrawals take?
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <ul class="list-item">
                                                <li>Major Cryptocurrencies.</li>
                                                <li>New and Emerging Tokens.</li>
                                                <li>Popular Altcoins.</li>
                                            </ul>
                                            We offer a wide range of cryptocurrencies for trading, including popular
                                            options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                            Our platform regularly updates the list of available cryptocurrencies access
                                            options.
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

            </div>
            <div class="container pt-65">
                <div class="xb-footer">

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

    <script>
        $(document).ready(function() {
                    // Handle the form submission
                    $('#airdrop-form').submit(function(e) {
                        e.preventDefault(); // Prevent the form from submitting the traditional way

                        var email = $('#email').val();
                        var wallet = $('#wallet').val();

                        // Prepare the data to send
                        var formData = {
                            email: email,
                            wallet: wallet
                        };

                        // Perform the AJAX request
                        $.ajax({
                            url: 'submit_airdrop.php', // Path to your PHP script
                            type: 'POST',
                            data: formData,
                            dataType: 'json',
                            success: function(response) {
                                // Handle success
                                if (response.status === 'success') {
                                    $('#waitlist-info').show(); // Show the waitlist info section
                                    $('#position').text(response.position);
                                    $('#referral-code').text(response.referral_code);
                                    $('#total').text(response.total); // Assuming `total` is included in the response
                                } else {
                                    alert(response.message); // Show error message
                                }
                            },
                            error: function() {
                                alert('An error occurred. Please try again.');
                            }
                        });
                    });

                    // Waitlist data is stored in localStorage
                    const START_COUNT = 3000; // Starting number for participants
                    let currentPosition = parseInt(localStorage.getItem('lastPosition')) || START_COUNT;

                    document.getElementById('airdrop-form').addEventListener('submit', function(e) {
                        e.preventDefault();

                        const email = document.getElementById('email').value;
                        const wallet = document.getElementById('wallet').value;

                        // Increment position with a random number between 1 and 10
                        const increment = Math.floor(Math.random() * 10) + 1;
                        currentPosition += increment;

                        // Generate referral code
                        const referralCode = `REF-${Math.random().toString(36).substr(2, 8).toUpperCase()}`;

                        // Save data to localStorage
                        const participants = JSON.parse(localStorage.getItem('participants')) || [];
                        participants.push({
                            email,
                            wallet,
                            position: currentPosition,
                            referralCode
                        });
                        localStorage.setItem('participants', JSON.stringify(participants));
                        localStorage.setItem('lastPosition', currentPosition);

                        // Display the waitlist info
                        document.getElementById('position').textContent = currentPosition;
                        document.getElementById('total').textContent = currentPosition;
                        document.getElementById('referral-code').textContent = referralCode;
                        document.getElementById('waitlist-info').style.display = 'block';

                        // Show success toast
                        alert('Successfully joined the airdrop!');

                        // Reload the page after 2 seconds
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    });

                    // Share button functionality
                    document.getElementById('share-btn').addEventListener('click', function() {
                        const referralCode = document.getElementById('referral-code').textContent;
                        const shareText = `Join the Greenwood AI airdrop and claim your rewards! Use my referral code: ${referralCode}`;

                        // Set up social media links
                        const url = window.location.href;
                        const shareUrl = `${url}?referral=${referralCode}`;

                        // Facebook
                        document.getElementById('facebook-share').href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`;

                        // Twitter
                        document.getElementById('twitter-share').href = `https://twitter.com/intent/tweet?text=${encodeURIComponent(shareText)}&url=${encodeURIComponent(shareUrl)}`;

                        // WhatsApp
                        document.getElementById('whatsapp-share').href = `https://wa.me/?text=${encodeURIComponent(shareText)} ${encodeURIComponent(shareUrl)}`;

                        // Show share icons
                        document.getElementById('share-icons').style.display = 'block';
                    });

                    // Copy link functionality
                    document.getElementById('copy-link').addEventListener('click', function() {
                        const referralCode = document.getElementById('referral-code').textContent;
                        const shareUrl = `${window.location.href}?referral=${referralCode}`;
                        navigator.clipboard.writeText(shareUrl).then(function() {
                            alert('Referral link copied to clipboard!');
                        });
                    });
    </script>


    <!-- jquery include -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
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
    <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->

    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/slick.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/rangeSlider.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/dark.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <title>D Diamonds</title>

    <link rel="icon" type="image/png" href="<?= base_url('public/') ?>assets/img/favicon.png">
</head>

<body>

    <!-- Start Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <ul class="header-contact-info">
                        <li>Welcome to D. Diamond Jewellery</li>
                        <li>Call: +91 9674127456</li>

                    </ul>
                </div>


                <?php $session = session() ?>


                <div class="col-lg-6 col-md-12">
                    <ul class="header-top-menu">
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                    class='bx bx-heart'></i> Wishlist</a></li>
                        <?php if (!empty($session->get('user_auth')['is_logged'])): ?>

                            <li><a href="<?= base_url('/login') ?>"><i class='bx bxs-user'></i> My Account</a></li>
                            <li><a href="<?= base_url('/') ?>" action=<?php session_destroy(); ?>><i
                                        class='bx bxs-user'></i> Logout</a></li>

                        <?php else: ?>

                            <li><a href="<?= base_url('/login') ?>"><i class='bx bx-log-in'></i> Login</a></li>
                        <?php endif; ?>
                    </ul>

                    <ul class="header-top-others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                        class='bx bx-shopping-bag'></i><span>0</span></a>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->




    <!-- Start Navbar Area -->
    <div class="navbar-area">


        <div class="xton-responsive-nav">
            <div class="container">
                <div class="xton-responsive-menu">
                    <div class="logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('public/') ?>assets/img/logo.jpg" class="main-logo" alt="logo"
                                style="height: 90px; width: 400px;">
                            <img src="<?= base_url('public/') ?>assets/img/white-logo.jpg" class="white-logo"
                                alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="xton-nav" style="border-bottom: 1px solid #EBEBEB; padding:10px 0px;">
            <div class="container" style="max-width: 1500px;">
                <nav class="navbar navbar-expand-md navbar-light" style="justify-content:flex-end;">

                    <div class="collapse navbar-collapse mean-menu">
                        <div class="others-option">


                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/location') ?>"><i class='bx bx-map-pin'
                                            style="text-align: center;">
                                            <p>Location</p>
                                        </i></a>
                                </div>
                            </div>



                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/email') ?>">
                                        <i class="bx bx-envelope" style="text-align: center;">
                                            <p>Email</p>
                                        </i>
                                    </a>
                                </div>
                            </div>



                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/contact') ?>">
                                        <i class="bx bx-message-detail" style="text-align: center;">
                                            <p>Contact</p>
                                        </i>
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>

                    <a class="navbar-brand" href="<?= base_url('/') ?>">
                        <img src="<?= base_url('public/') ?>assets/img/logo.jpg" class="main-logo" alt="logo"
                            style=" height: 90px; width: 400px;">
                        <img src="<?= base_url('public/') ?>assets/img/white-logo.jpg" class="white-logo" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu " style="justify-content:flex-end;">
                        <div class="others-option">
                            <div class="option-item">
                                <div class="cart-btn">
                                    <i class="search-btn bx bx-search-alt" style="text-align: center; color:#9EA8AC;">
                                        <p>Search</p>
                                    </i>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="cart-btn" style="color:#9EA8AC;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='bx bx-shopping-bag' style="text-align: center;"></i><span
                                            style="text-align: center;">4</span>
                                        <p style="text-align: center;">Cart</p>
                                    </a>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="burger-menu" style="padding-bottom: 23px; color:#9EA8AC;"
                                    data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </nav>
            </div>
        </div>
        <div class="xton-nav" style="border-top: 1px solid #EBEBEB;">
            <div class="container saira-condensed-regular">
                <nav class="navbar navbar-expand-md navbar-light">

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item" style="margin-top:-20px;"><a href="<?= base_url('/') ?>"
                                    class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item megamenu"><a href="<?= base_url('/shop') ?>" class="nav-link">Jewellery
                                    and Collections<i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <h6 class="submenu-title">Categories</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>

                                                        <li><a href="#">EARRINGS</a>
                                                        </li>

                                                        <li><a href="#">PENDANTS</a></li>

                                                        <li><a href="#">BANGLES</a>
                                                        </li>

                                                        <li><a href="#">BRACELETS</a></li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>


                                                        <!-- <li><a href="products-sidebar-fullwidth.html">With Sidebar Full
                                                                Width</a></li> -->
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">MEN'S JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>


                                                    <h6 class="submenu-title">WOMEN'S JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>


                                                </div>





                                                <div class="col">
                                                    <h6 class="submenu-title">GEMSTONE</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>

                                                    <h6 class="submenu-title">DIAMOND JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">KIDS JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>

                                                    <h6 class="submenu-title">PLAIN GOLD JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>




                                            <div class="brand-slides owl-carousel owl-theme">
                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img1.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img2.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img3.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img4.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img5.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img6.png"
                                                            alt="image"></a>
                                                </div>
                                            </div>




                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item megamenu"><a href="#" class="nav-link">Love and Engagement<i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <h6 class="submenu-title">Wedding Rings</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">Men's Wedding Rings</a></li>

                                                        <li><a href="#">Women's Wedding Rings</a></li>

                                                        <!-- <li><a href="#">Right Sidebar</a></li>

                                                            <li><a href="#">Right Sidebar With Categories</a></li>

                                                            <li><a href="#">1 Products Per Row</a></li>

                                                            <li><a href="#">Without Sidebar</a></li>

                                                            <li><a href="#">With Sidebar Full Width</a></li> -->
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">Pendants</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">Men's Pendants</a></li>

                                                        <li><a href="#">Women's Pendants</a></li>

                                                        <li><a href="#">Gemstone Pendants</a></li>

                                                        <li><a href="#">Diamond Pendants</a></li>

                                                        <li><a href="#">Kids Pendants</a></li>

                                                        <li><a href="#">Plain Gold Pendants</a></li>

                                                    </ul>
                                                </div>



                                                <div class="col">
                                                    <ul class="megamenu-submenu">
                                                        <li>
                                                            <div class="aside-trending-products">
                                                                <img src="<?= base_url('public/') ?>/assets/img/categories/img1.jpg"
                                                                    alt="image">

                                                                <div class="category">
                                                                    <h4>Top Trending</h4>
                                                                </div>

                                                                <a href="products-right-sidebar.html"
                                                                    class="link-btn"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item" style="margin-top:-20px;"><a href="#" class="nav-link">Exclusive
                                    Diamond Collections<i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link">Rings</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Earrings</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Pendants</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">VIEW ALL<i
                                                class='bx bx-chevron-right' style="right: auto;"></i></a></li>
                                </ul>
                            </li>
                            <li class="nav-item megamenu"><a href="<?= base_url('/about') ?>" class="nav-link">Our
                                    Story</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->






    <!-- Start Sticky Navbar Area -->
    <div class="navbar-area header-sticky">
        <div class="xton-responsive-nav">
            <div class="container">
                <div class="xton-responsive-menu">
                    <div class="logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('public/') ?>assets/img/logo.jpg" class="main-logo" alt="logo"
                                style="height: 90px; width: 400px;">
                            <img src="<?= base_url('public/') ?>assets/img/white-logo.jpg" class="white-logo"
                                alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="xton-nav" style="border-bottom: 1px solid #EBEBEB; padding:10px 0px;">
            <div class="container" style="max-width: 1500px;">
                <nav class="navbar navbar-expand-md navbar-light" style="justify-content:flex-end;">

                    <div class="collapse navbar-collapse mean-menu">
                        <div class="others-option">


                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/location') ?>"><i class='bx bx-map-pin'
                                            style="text-align: center;">
                                            <p>Location</p>
                                        </i></a>
                                </div>
                            </div>



                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/email') ?>">
                                        <i class="bx bx-envelope" style="text-align: center;">
                                            <p>Email</p>
                                        </i>
                                    </a>
                                </div>
                            </div>



                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="<?= base_url('/contact') ?>">
                                        <i class="bx bx-message-detail" style="text-align: center;">
                                            <p>Contact</p>
                                        </i>
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>

                    <a class="navbar-brand" href="<?= base_url('/') ?>">
                        <img src="<?= base_url('public/') ?>assets/img/logo.jpg" class="main-logo" alt="logo"
                            style="height: 90px; width: 400px;">
                        <img src="<?= base_url('public/') ?>assets/img/white-logo.jpg" class="white-logo" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu " style="justify-content:flex-end;">
                        <div class="others-option">
                            <div class="option-item">
                                <div class="cart-btn">
                                    <i class="search-btn bx bx-search-alt" style="text-align: center; color:#9EA8AC;">
                                        <p>Search</p>
                                    </i>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="cart-btn" style="color:#9EA8AC;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='bx bx-shopping-bag' style="text-align: center;"></i><span
                                            style="text-align: center;">4</span>
                                        <p style="text-align: center;">Cart</p>
                                    </a>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="burger-menu" style="padding-bottom: 23px; color:#9EA8AC;"
                                    data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </nav>
            </div>
        </div>
        <div class="xton-nav" style="border-top: 1px solid #EBEBEB;">
            <div class="container saira-condensed-regular">
                <nav class="navbar navbar-expand-md navbar-light">

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item" style="margin-top:-20px;"><a href="<?= base_url('/') ?>"
                                    class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item megamenu"><a href="<?= base_url('/shop') ?>" class="nav-link">Jewellery
                                    and Collections<i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <h6 class="submenu-title">Categories</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>

                                                        <li><a href="#">EARRINGS</a>
                                                        </li>

                                                        <li><a href="#">PENDANTS</a></li>

                                                        <li><a href="#">BANGLES</a>
                                                        </li>

                                                        <li><a href="#">BRACELETS</a></li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>


                                                        <!-- <li><a href="products-sidebar-fullwidth.html">With Sidebar Full
                                                                Width</a></li> -->
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">MEN'S JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>


                                                    <h6 class="submenu-title">WOMEN'S JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>


                                                </div>





                                                <div class="col">
                                                    <h6 class="submenu-title">GEMSTONE</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>

                                                    <h6 class="submenu-title">DIAMOND JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">KIDS JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>

                                                    <h6 class="submenu-title">PLAIN GOLD JEWELLERY</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">RINGS</a></li>
                                                        <li><a href="#">EARRINGS</a>
                                                        </li>
                                                        <li><a href="#">PENDANTS</a>
                                                        </li>

                                                        <li><a href="#">VIEW ALL <i class='bx bx-chevron-right'
                                                                    style="right: auto;"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>




                                            <div class="brand-slides owl-carousel owl-theme">
                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img1.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img2.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img3.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img4.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img5.png"
                                                            alt="image"></a>
                                                </div>

                                                <div class="brand-item">
                                                    <a href="#"><img
                                                            src="<?= base_url('public/') ?>/assets/img/brand/img6.png"
                                                            alt="image"></a>
                                                </div>
                                            </div>




                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item megamenu"><a href="#" class="nav-link">Love and Engagement<i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <h6 class="submenu-title">Wedding Rings</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">Men's Wedding Rings</a></li>

                                                        <li><a href="#">Women's Wedding Rings</a></li>

                                                        <!-- <li><a href="#">Right Sidebar</a></li>

                                                            <li><a href="#">Right Sidebar With Categories</a></li>

                                                            <li><a href="#">1 Products Per Row</a></li>

                                                            <li><a href="#">Without Sidebar</a></li>

                                                            <li><a href="#">With Sidebar Full Width</a></li> -->
                                                    </ul>
                                                </div>

                                                <div class="col">
                                                    <h6 class="submenu-title">Pendants</h6>

                                                    <ul class="megamenu-submenu">
                                                        <li><a href="#">Men's Pendants</a></li>

                                                        <li><a href="#">Women's Pendants</a></li>

                                                        <li><a href="#">Gemstone Pendants</a></li>

                                                        <li><a href="#">Diamond Pendants</a></li>

                                                        <li><a href="#">Kids Pendants</a></li>

                                                        <li><a href="#">Plain Gold Pendants</a></li>

                                                    </ul>
                                                </div>



                                                <div class="col">
                                                    <ul class="megamenu-submenu">
                                                        <li>
                                                            <div class="aside-trending-products">
                                                                <img src="<?= base_url('public/') ?>/assets/img/categories/img1.jpg"
                                                                    alt="image">

                                                                <div class="category">
                                                                    <h4>Top Trending</h4>
                                                                </div>

                                                                <a href="products-right-sidebar.html"
                                                                    class="link-btn"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item" style="margin-top:-20px;"><a href="#" class="nav-link">Exclusive
                                    Diamond Collections<i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link">Rings</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Earrings</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Pendants</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">VIEW ALL<i
                                                class='bx bx-chevron-right' style="right: auto;"></i></a></li>
                                </ul>
                            </li>
                            <li class="nav-item megamenu"><a href="<?= base_url('/about') ?>" class="nav-link">Our
                                    Story</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Header Area -->



    <!-- Start Sidebar Modal -->
    <div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <div class="sidebar-about-content">
                        <h3>About The Store</h3>

                        <div class="about-the-store">
                            <p>One of the most popular on the web is shopping. Lorem ipsum
                                dolor sit amet, consectetur
                                adipiscing elit.</p>

                            <ul class="sidebar-contact-info">
                                <li><i class='bx bx-map'></i> <a href="#" target="_blank">30 A, Parbati Ghosh Ln, Simla,
                                        Machuabazar, Kolkata,West Bengal 
                                        700007</a></li>
                                <li><i class='bx bx-phone-call'></i> <a href="tel:+919674127456">+91 9674127456</a></li>
                                <li><i class='bx bx-envelope'></i> <a
                                        href="mailto:hello@d_diamonds.com">hello@d_diamonds.com</a>
                                </li>
                            </ul>
                        </div>

                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://twitter.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://www.instagram.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-instagram'></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.pinterest.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-pinterest-alt'></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-new-in-store">
                        <h3>New In Store</h3>

                        <ul class="products-list">
                            <li>
                                <a href="products-one-row-2.html"><img
                                        src="<?= base_url('public/') ?>assets/img/products/img1.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img
                                        src="<?= base_url('public/') ?>assets/img/products/img2.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img
                                        src="<?= base_url('public/') ?>assets/img/products/img3.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img
                                        src="<?= base_url('public/') ?>assets/img/products/img4.jpg" alt="image"></a>
                            </li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="<?= base_url('/') ?>" class="shop-now-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->


    <!-- Start Shopping Cart Modal -->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Cart (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img1.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img2.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img3.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>

                        <span class="subtotal">$524.00</span>
                    </div>

                    <div class="products-cart-btn">
                        <a href="<?= base_url('/checkout') ?>" class="default-btn">Proceed to Checkout</a>
                        <a href="<?= base_url('/cart') ?>" class="optional-btn">View Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart Modal -->

    <!-- Start Wishlist Modal -->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Wish List (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img1.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img2.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="<?= base_url('public/') ?>assets/img/products/img3.jpg"
                                        alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="products-cart-btn">
                        <a href="#" class="optional-btn">View Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist Modal -->
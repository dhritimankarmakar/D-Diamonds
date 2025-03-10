<?= $this->extend('web/components/assemble') ?>


<?= $this->section('content') ?>


<main>


    <!-- Start Search Overlay -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Overlay -->








    <div class="home-slides owl-carousel owl-theme">
        <?php foreach ($banner as $b): ?>
            <div class="main-banner">
                <picture>
                    <!-- Image for small screens -->
                    <source srcset="<?= base_url('public/assets/img/banner/' . $b['banner_image']) ?>"
                        media="(max-width: 768px)">
                    <!-- Image for larger screens -->
                    <img src="<?= base_url('public/assets/img/banner/' . $b['banner_image']) ?>"
                        alt="<?= $b['banner_title'] ?>" class="img-fluid">
                </picture>
            </div>
        <?php endforeach ?>

        <!-- <div class="main-banner">
            <picture>
                <source srcset="<?= base_url('public/') ?>assets/img/banner/4.jpg" media="(max-width: 768px)">
                <img src="<?= base_url('public/') ?>assets/img/banner/4.jpg" alt="Banner 2" class="img-fluid">
            </picture>
        </div> -->

        <!-- <div class="main-banner">
            <picture>
                <source srcset="assets/img/offer-bg.jpg" media="(max-width: 768px)">
                <img src="<?= base_url('public/') ?>assets/img/offer-bg.jpg" alt="Banner 3" class="img-fluid">
            </picture>
        </div> -->
    </div>
    <!-- End Main Banner Area -->












    <!-- Start Categories Banner Area -->
    <section class="categories-banner-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-categories-box">
                        <img src="<?= base_url('public/') ?>assets/img/offer-banner/10.jpg" alt="image">

                        <div class="content text-white">
                            <span>Don’t Miss Today</span>
                            <h3>50% OFF</h3>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-categories-box">
                        <img src="<?= base_url('public/') ?>assets/img/offer-banner/11.jpg" alt="image">

                        <div class="content">
                            <span>New Collection</span>
                            <h3>Need Now</h3>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-categories-box">
                        <img src="<?= base_url('public/') ?>assets/img/offer-banner/11.jpg" alt="image">

                        <div class="content">
                            <span>Your Looks</span>
                            <h3>Must Haves</h3>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-categories-box">
                        <img src="<?= base_url('public/') ?>assets/img/offer-banner/10.jpg" alt="image">

                        <div class="content text-white">
                            <span>Take 20% OFF</span>
                            <h3>Winter Spring!</h3>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories Banner Area -->

    <!-- Start Products Area -->



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="discover-jewelry-block" data-view="module/discover-jewelry-block/main">
                    <h2>Discover D.Diamonds Jewellery</h2>
                </div>
            </div>
        </div>

        <div class="row" style="padding:20px 0px;">

            <div class="col-lg-6 col-sm-12">
                <div class="single-products-box pb-2">
                    <div class="products-image">
                        <a href="#">
                            <img src="<?= base_url('public/') ?>assets/img/products/7.jpg" class="main-image"
                                alt="image" style="width: 100%;">
                            <img src="<?= base_url('public/') ?>assets/img/products/7.jpg" class="hover-image"
                                alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to
                                                Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick
                                                View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="products-content" style="margin:52px 20px;">
                        <h3><a href="#">Product 1</a></h3>
                        <div class="price">
                            <span class="old-price">₹ 4999</span>
                            <span class="new-price">₹ 2999</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="prod-1">
                    <?php
                    $count = 0;
                    foreach ($products as $p):
                        if ($count < 4): ?>
                            <div class="single-products-box pb-2" style="margin-bottom: 6px;">
                                <div class="products-image">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/img/products/') . $p['p_image_1'] ?>"
                                            class="main-image" alt="image">
                                        <img src="<?= base_url('public/assets/img/products/') . $p['p_image_2'] ?>"
                                            class="hover-image" alt="image">
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <li>
                                                <div class="wishlist-btn">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to
                                                            Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick
                                                            View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php if ($p['created_at'] > date('Y-m-d', strtotime('-1 month'))): ?>
                                        <div class="new-tag">New!</div>
                                    <?php endif ?>
                                </div>
                                <div class="products-content" style="margin:10px 20px;">
                                    <h3><a href="#"><?= $p['p_name'] ?></a></h3>
                                    <div class="price">
                                        <span class="old-price">₹ <?= $p['old_price'] ?></span>
                                        <span class="new-price">₹ <?= $p['new_price'] ?></span>
                                    </div>
                                    <div class="star-rating">
                                        <?php for ($i = 0; $i < $p['p_rating']; $i++): ?>
                                            <i class='bx bxs-star'></i>
                                        <?php endfor ?>
                                    </div>
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php
                        $count++;
                    endforeach ?>
                </div>

                <!-- <div class="single-products-box pb-2">
                    <div class="products-image">
                        <a href="#">
                            <img src="<?= base_url('public/') ?>assets/img/products/5.jpg" class="main-image"
                                alt="image">
                            <img src="<?= base_url('public/') ?>assets/img/products/5_1.jpg" class="hover-image"
                                alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to
                                                Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick
                                                View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="products-content" style="margin:10px 20px;">
                        <h3><a href="#">Product 1</a></h3>
                        <div class="price">
                            <span class="old-price">₹ 4999</span>
                            <span class="new-price">₹ 2999</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div> -->
            </div>
            <!-- <div class="col-lg-3 col-6">

                <!-- <div class="single-products-box pb-2">
                    <div class="products-image">
                        <a href="#">
                            <img src="<?= base_url('public/') ?>assets/img/products/6.jpg" class="main-image"
                                alt="image">
                            <img src="<?= base_url('public/') ?>assets/img/products/6_1.jpg" class="hover-image"
                                alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to
                                                Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick
                                                View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="products-content" style="margin:10px 20px;">
                        <h3><a href="#">Product 1</a></h3>
                        <div class="price">
                            <span class="old-price">₹ 4999</span>
                            <span class="new-price">₹ 2999</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>

                <div class="single-products-box pb-2">
                    <div class="products-image">
                        <a href="#">
                            <img src="<?= base_url('public/') ?>assets/img/products/8.jpg" class="main-image"
                                alt="image">
                            <img src="<?= base_url('public/') ?>assets/img/products/8_1.jpg" class="hover-image"
                                alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to
                                                Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick
                                                View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="products-content" style="margin:10px 20px;">
                        <h3><a href="#">Product 1</a></h3>
                        <div class="price">
                            <span class="old-price">₹ 4999</span>
                            <span class="new-price">₹ 2999</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div> -->
        </div> -->
    </div>

    </div>








    <!-- <section class="products-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">See Our Collection</span>
                <h2>Recent Products</h2>
            </div>

            <div class="row justify-content-center">



                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>



                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section> -->
    <!-- End Products Area -->

    <!-- Start Offer Area -->
    <section class="offer-area bg-image2 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="offer-content">
                        <h2>Nature’s Rarest Gift</h2>
                        <p></p>
                        <span class="sub-title">Diamonds symbolize love and eternity, cherished for their brilliance,
                            rarity, and timeless elegance.</span>

                        <!-- <p>Get The Best Deals Now</p> -->
                        <a href="#" class="default-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offer Area -->

    <!-- Start Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">See Our Collection</span>
                <h2>In-demand products</h2>
            </div>

            <div class="row justify-content-center">


                <?php $count = 0;
                foreach ($p_indemand as $p): 
                    if ($count < 6):
                    ?>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="single-products-box pb-2">
                            <div class="products-image">
                                <a href="#">
                                    <img src="<?= base_url('public/assets/img/products/') . $p['p_image_1'] ?>"
                                        class="main-image" alt="image">
                                    <img src="<?= base_url('public/assets/img/products/') . $p['p_image_2'] ?>"
                                        class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to
                                                        Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick
                                                        View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php if ($p['created_at'] > date('Y-m-d', strtotime('-1 month'))): ?>
                                    <div class="new-tag">New!</div>
                                <?php endif ?>
                            </div>
                            <div class="products-content" style="margin:10px 20px;">
                                <h3><a href="#"><?= $p['p_name'] ?></a></h3>
                                <div class="price">
                                    <span class="old-price">₹ <?= $p['old_price'] ?></span>
                                    <span class="new-price">₹ <?= $p['new_price'] ?></span>
                                </div>
                                <div class="star-rating">
                                    <?php for ($i = 0; $i < $p['p_rating']; $i++): ?>
                                        <i class='bx bxs-star'></i>
                                    <?php endfor ?>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="text-center">
                                <a href="#" class="default-btn">Show more</a>
                        </div>
                    <?php endif ?>
                        
                    <?php $count++;
                        endforeach ?>
                <!-- <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/11.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/11_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>



                    </div> -->


                <!-- <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/12.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/12_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/13.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/13_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/14.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/14_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/9.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/9_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/10.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/10_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End Products Area -->















    <!-- Start Facility Area -->
    <section class="facility-area pb-70">
        <div class="container">
            <div class="facility-slides owl-carousel owl-theme">




                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/ring.png" alt="Facility Icon">
                    </div>
                    <h3>RINGS</h3>
                </div>





                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/earring.png" alt="Facility Icon">
                    </div>
                    <h3>EARRINGS</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/pendant.png" alt="Facility Icon">
                    </div>
                    <h3>PENDANTS</h3>
                </div>


                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/ring.png" alt="Facility Icon">
                    </div>
                    <h3>RINGS</h3>
                </div>





                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/earring.png" alt="Facility Icon">
                    </div>
                    <h3>EARRINGS</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <img src="<?= base_url('public/') ?>assets/img/categories/pendant.png" alt="Facility Icon">
                    </div>
                    <h3>PENDANTS</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facility Area -->








    <!-- Start Offer Area -->
    <section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>\
        <div class="offer">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">

                        <div class="offer-content">
                            <span class="sub-title">Limited Time Offer!</span>
                            <h2>-40% OFF</h2>
                            <p>Get The Best Deals Now</p>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offer Area -->





    <!-- Start Products Area -->
    <section class="products-area pb-70">
        <div class="container pt-100">
            <div class="section-title">
                <span class="sub-title">See Our Collection</span>
                <h2>Best Selling Products</h2>
            </div>


            <div class="row justify-content-center">

                <!-- <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/16.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/16_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="new-tag">New!</div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div> -->

                <?php $count = 0;
                foreach ($p_bestseller as $p): 
                    if ($count < 6):
                    ?>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="single-products-box pb-2">
                            <div class="products-image">
                                <a href="#">
                                    <img src="<?= base_url('public/assets/img/products/') . $p['p_image_1'] ?>"
                                        class="main-image" alt="image">
                                    <img src="<?= base_url('public/assets/img/products/') . $p['p_image_2'] ?>"
                                        class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to
                                                        Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick
                                                        View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php if ($p['created_at'] > date('Y-m-d', strtotime('-1 month'))): ?>
                                    <div class="new-tag">New!</div>
                                <?php endif ?>
                            </div>
                            <div class="products-content" style="margin:10px 20px;">
                                <h3><a href="#"><?= $p['p_name'] ?></a></h3>
                                <div class="price">
                                    <span class="old-price">₹ <?= $p['old_price'] ?></span>
                                    <span class="new-price">₹ <?= $p['new_price'] ?></span>
                                </div>
                                <div class="star-rating">
                                    <?php for ($i = 0; $i < $p['p_rating']; $i++): ?>
                                        <i class='bx bxs-star'></i>
                                    <?php endfor ?>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="text-center">
                                <a href="#" class="default-btn">Show more</a>
                        </div>
                    <?php endif ?>
                    <?php
                    $count++;
                endforeach ?>


                <!-- <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/15.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/15_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>



                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/17.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/17_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/18.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/18_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/21.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/21_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div> -->




                <!-- <div class="col-lg-4 col-md-6 col-6">
                    <div class="single-products-box pb-2">
                        <div class="products-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/products/20.jpg" class="main-image"
                                    alt="image">
                                <img src="<?= base_url('public/') ?>assets/img/products/20_1.jpg" class="hover-image"
                                    alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to
                                                    Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick
                                                    View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content" style="margin:10px 20px;">
                            <h3><a href="#">Product 1</a></h3>
                            <div class="price">
                                <span class="old-price">₹ 4999</span>
                                <span class="new-price">₹ 2999</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div> -->
            </div>



        </div>
    </section>
    <!-- End Products Area -->

    <!-- Start Partner Area -->
    <!-- <div class="partner-area ptb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Partners</h2>
            </div>

            <div class="partner-slides owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>

                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>

                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>

                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>

                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>

                <div class="partner-item">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/') ?>assets/img/partner/1.jpg" alt="image"></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Partner Area -->



    <!-- Start Testimonials Area -->
    <section class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>What Clients Says About Us</h2>
            </div>

            <div class="testimonials-slides owl-carousel owl-theme">
                <?php foreach ($testimonials as $t): ?>

                    <div class="single-testimonials-item">
                        <p><?= $t['test_review'] ?></p>

                        <div class="info">
                            <img src="<?= base_url('public/assets/img/testimonials/' . $t['test_image']) ?>"
                                class="shadow rounded-circle" alt="image">
                            <h3><?= $t['test_name'] ?></h3>
                            <span><?= $t['test_profession'] ?></span>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Recent Story</span>
                <h2>From The D.Diamonds Blog</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>January 29, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <span class="category">Ideas</span>
                            <h3><a href="#">History of Jewellery</a></h3>
                            <a href="#" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/blog/2.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>January 29, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <span class="category">Advice</span>
                            <h3><a href="#">The Jewellery Editor</a>
                            </h3>
                            <a href="#" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="#">
                                <img src="<?= base_url('public/') ?>assets/img/blog/3.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>January 29, 2024</span>
                            </div>
                        </div>

                        <div class="post-content">
                            <span class="category">Social</span>
                            <h3><a href="#">Beyond the Jewelry</a></h3>
                            <a href="#" class="details-btn">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Instagram Area -->
    <div class="instagram-area">
        <div class="container-fluid">
            <div class="instagram-title">
                <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on
                    @D.Diamonds</a>
            </div>

            <div class="instagram-slides owl-carousel owl-theme">
                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>

                <div class="single-instagram-post">
                    <img src="<?= base_url('public/') ?>assets/img/instagram/1.jpg" alt="image">
                    <i class='bx bxl-instagram'></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Area -->


















    <!-- Start QuickView Modal Area -->
    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="products-image">
                            <img src="<?= base_url('public/') ?>assets/img/products/4.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="products-content">
                            <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>

                            <div class="price">
                                <span class="old-price">$210.00</span>
                                <span class="new-price">$200.00</span>
                            </div>

                            <div class="products-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <a href="#" class="rating-count">3 reviews</a>
                            </div>

                            <ul class="products-info">
                                <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                <li><span>Availability:</span> <a href="#">In stock (7
                                        items)</a></li>
                                <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                            </ul>

                            <div class="products-color-switch">
                                <h4>Color:</h4>

                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Black"
                                            class="color-black"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="White"
                                            class="color-white"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Green"
                                            class="color-green"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Yellow Green"
                                            class="color-yellowgreen"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Teal"
                                            class="color-teal"></a></li>
                                </ul>
                            </div>

                            <div class="products-size-wrapper">
                                <h4>Size:</h4>

                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn">Add to
                                    Cart</button>
                            </div>

                            <a href="#" class="view-full-info">View Full Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End QuickView Modal Area -->

















    <!-- Start Size Guide Modal Area -->
    <div class="modal fade sizeGuideModal" id="sizeGuideModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bx bx-x"></i></span>
                </button>

                <div class="modal-sizeguide">
                    <h3>Size Guide</h3>
                    <p>This is an approximate conversion table to help you find your size.
                    </p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Italian</th>
                                    <th>Spanish</th>
                                    <th>German</th>
                                    <th>UK</th>
                                    <th>US</th>
                                    <th>Japanese</th>
                                    <th>Chinese</th>
                                    <th>Russian</th>
                                    <th>Korean</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>34</td>
                                    <td>30</td>
                                    <td>28</td>
                                    <td>4</td>
                                    <td>00</td>
                                    <td>3</td>
                                    <td>155/75A</td>
                                    <td>36</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>32</td>
                                    <td>30</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>155/80A</td>
                                    <td>38</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>34</td>
                                    <td>32</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>160/84A</td>
                                    <td>40</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>36</td>
                                    <td>34</td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td>9</td>
                                    <td>165/88A</td>
                                    <td>42</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>38</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>6</td>
                                    <td>11</td>
                                    <td>170/92A</td>
                                    <td>44</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>40</td>
                                    <td>38</td>
                                    <td>14</td>
                                    <td>8</td>
                                    <td>13</td>
                                    <td>175/96A</td>
                                    <td>46</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>42</td>
                                    <td>40</td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>170/98A</td>
                                    <td>48</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>44</td>
                                    <td>42</td>
                                    <td>18</td>
                                    <td>12</td>
                                    <td>17</td>
                                    <td>170/100B</td>
                                    <td>50</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>46</td>
                                    <td>44</td>
                                    <td>20</td>
                                    <td>14</td>
                                    <td>19</td>
                                    <td>175/100B</td>
                                    <td>52</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>48</td>
                                    <td>46</td>
                                    <td>22</td>
                                    <td>16</td>
                                    <td>21</td>
                                    <td>180/104B</td>
                                    <td>54</td>
                                    <td>88</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Size Guide Modal Area -->

    <!-- Start Shipping Modal Area -->
    <div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="shipping-content">
                    <h3>Shipping</h3>
                    <ul>
                        <li>Complimentary ground shipping within 1 to 7 business days</li>
                        <li>In-store collection available within 1 to 7 business days</li>
                        <li>Next-day and Express delivery options also available</li>
                        <li>Purchases are delivered in an orange box tied with a Bolduc
                            ribbon, with the exception of
                            certain items</li>
                        <li>See the delivery FAQs for details on shipping methods, costs and
                            delivery times</li>
                    </ul>

                    <h3>Returns and Exchanges</h3>
                    <ul>
                        <li>Easy and complimentary, within 14 days</li>
                        <li>See conditions and procedure in our return FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shipping Modal Area -->

    <!-- Start Products Filter Modal Area -->
    <div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
                </button>

                <div class="modal-body">
                    <div class="woocommerce-widget-area">
                        <div class="woocommerce-widget filter-list-widget">
                            <h3 class="woocommerce-widget-title">Current Selection</h3>

                            <div class="selected-filters-wrap-list">
                                <ul>
                                    <li><a href="#"><i class='bx bx-x'></i> 44</a></li>
                                    <li><a href="#"><i class='bx bx-x'></i> XI</a></li>
                                    <li><a href="#"><i class='bx bx-x'></i> Clothing</a>
                                    </li>
                                    <li><a href="#"><i class='bx bx-x'></i> Shoes</a></li>
                                </ul>

                                <a href="#" class="delete-selected-filters"><i class='bx bx-trash'></i> <span>Clear
                                        All</span></a>
                            </div>
                        </div>

                        <div class="woocommerce-widget collections-list-widget">
                            <h3 class="woocommerce-widget-title">Collections</h3>

                            <ul class="collections-list-row">
                                <li><a href="#">Men's</a></li>
                                <li class="active"><a href="#" class="active">Women’s</a>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget price-list-widget">
                            <h3 class="woocommerce-widget-title">Price</h3>

                            <div class="collection-filter-by-price">
                                <input class="js-range-of-price" type="text" data-min="0" data-max="1055"
                                    name="filter_by_price" data-step="10">
                            </div>
                        </div>

                        <div class="woocommerce-widget size-list-widget">
                            <h3 class="woocommerce-widget-title">Size</h3>

                            <ul class="size-list-row">
                                <li><a href="#">20</a></li>
                                <li><a href="#">24</a></li>
                                <li class="active"><a href="#">36</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget color-list-widget">
                            <h3 class="woocommerce-widget-title">Color</h3>

                            <ul class="color-list-row">
                                <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                                <li><a href="#" title="Red" class="color-red"></a></li>
                                <li><a href="#" title="Yellow" class="color-yellow"></a>
                                </li>
                                <li><a href="#" title="White" class="color-white"></a></li>
                                <li><a href="#" title="Blue" class="color-blue"></a></li>
                                <li><a href="#" title="Green" class="color-green"></a></li>
                                <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a>
                                </li>
                                <li><a href="#" title="Pink" class="color-pink"></a></li>
                                <li><a href="#" title="Violet" class="color-violet"></a>
                                </li>
                                <li><a href="#" title="Blue Violet" class="color-blueviolet"></a>
                                </li>
                                <li><a href="#" title="Lime" class="color-lime"></a></li>
                                <li><a href="#" title="Plum" class="color-plum"></a></li>
                                <li><a href="#" title="Teal" class="color-teal"></a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget brands-list-widget">
                            <h3 class="woocommerce-widget-title">Brands</h3>

                            <ul class="brands-list-row">
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Virgil Abloh</a></li>
                                <li><a href="#">Balenciaga</a></li>
                                <li class="active"><a href="#">Moncler</a></li>
                                <li><a href="#">Fendi</a></li>
                                <li><a href="#">Versace</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget aside-trending-widget">
                            <div class="aside-trending-products">
                                <img src="<?= base_url('public/') ?>assets/img/offer-bg.jpg" alt="image">

                                <div class="category">
                                    <h3>Top Trending</h3>
                                    <span>Spring/Summer 2024 Collection</span>
                                </div>
                                <a href="#" class="link-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Filter Modal Area -->

</main>


<?= $this->endSection() ?>
<?= $this->extend('web/components/assemble') ?>
<?= $this->section('content') ?>



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

<!-- Start Page Title -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a>Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <h3>Here to Help</h3>
                    <p>Have a question? You may find an answer in our <a href="#">FAQs</a>. But you can also contact us.
                    </p>

                    <ul class="contact-list">
                        <li><i class='bx bx-map'></i> Location: <a href="https://maps.app.goo.gl/Y6ndzZ94i9u2k33i7">30 A, Parbati Ghosh Ln, Simla, Machuabazar, Kolkata, West Bengal 700007</a></li>
                        <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+919674127456">+91 9674127456</a>
                        </li>
                        <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:hello@d_diamonds.com">hello@d_diamonds.com</a>
                        </li>
                        <li><i class='bx bx-microphone'></i> Fax: <a href="tel:+123456789">+123456789</a></li>
                    </ul>

                    <h3>Opening Hours:</h3>
                    <ul class="opening-hours">
                        <li><span>Monday:</span> 8AM - 6AM</li>
                        <li><span>Tuesday:</span> 8AM - 6AM</li>
                        <li><span>Wednesday:</span> 8AM - 6AM</li>
                        <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul>

                    <h3>Follow Us:</h3>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-skype'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Drop Us A Line</h3>
                    <p>We're happy to answer any questions you have or provide you with an estimate. Just send us a
                        message in the form below with any questions you may have.</p>

                    <form id="contactForm">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                        required data-error="Please enter your phone number"
                                        placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" id="message" cols="30" rows="5" required
                                        data-error="Please enter your message" class="form-control"
                                        placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Map -->
<div id="map" style="padding-bottom:50px;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.873844175819!2d88.3610162758722!3d22.58382123255791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02764b3ba13d17%3A0xa11de47df7b7c3e2!2s30a%2C%20Parbati%20Ghosh%20Ln%2C%20Simla%2C%20Machuabazar%2C%20Kolkata%2C%20West%20Bengal%20700007!5e0!3m2!1sen!2sin!4v1733208075951!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map -->

<!-- Start Facility Area -->
<!-- <section class="facility-area pt-100 pb-70">
    <div class="container">
        <div class="facility-slides owl-carousel owl-theme">
            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-tracking'></i>
                </div>
                <h3>Free Shipping Worldwide</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-return'></i>
                </div>
                <h3>Easy Return Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-shuffle'></i>
                </div>
                <h3>7 Day Exchange Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-sale'></i>
                </div>
                <h3>Weekend Discount Coupon</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-credit-card'></i>
                </div>
                <h3>Secure Payment Methods</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-location'></i>
                </div>
                <h3>Track Your Package</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-customer-service'></i>
                </div>
                <h3>24/7 Customer Support</h3>
            </div>
        </div>
    </div>
</section> -->
<!-- End Facility Area -->

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



<!-- Start Instagram Area -->
<div class="instagram-area">
    <div class="container-fluid">
        <div class="instagram-title">
            <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on
                @d_diamonds</a>
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
                        <img src="<?= base_url('public/')?>assets/img/quick-view-img.jpg" alt="image">
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
                            <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
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

                            <button type="submit" class="default-btn">Add to Cart</button>
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
                <p>This is an approximate conversion table to help you find your size.</p>

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
<div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of
                        certain items</li>
                    <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
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
                                <li><a href="#"><i class='bx bx-x'></i> Clothing</a></li>
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
                            <li class="active"><a href="#" class="active">Women’s</a></li>
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
                            <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                            <li><a href="#" title="White" class="color-white"></a></li>
                            <li><a href="#" title="Blue" class="color-blue"></a></li>
                            <li><a href="#" title="Green" class="color-green"></a></li>
                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                            <li><a href="#" title="Pink" class="color-pink"></a></li>
                            <li><a href="#" title="Violet" class="color-violet"></a></li>
                            <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
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
                            <img src="<?= base_url('public/')?>assets/img/offer-bg.jpg" alt="image">

                            <div class="category">
                                <h3>Top Trending</h3>
                                <span>Spring/Summer 2024 Collection</span>
                            </div>
                            <a href="products-right-sidebar.html" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Filter Modal Area -->

<?= $this->endSection() ?>
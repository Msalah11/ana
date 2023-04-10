<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ana
 */

?>

<div class="footer-style-two theme-basic-footer">
    <div class="top-footer position-relative">
        <div class="container">
            <div class="inner-wrapper m-auto">
                <div class="row">
                    <div class="col-lg-3 footer-intro mb-40">
                        <div class="logo"><a href="<?php get_site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo_01.png" alt="" width="95"></a></div>
                        <a href="#" class="email tran3s fs-18 mt-35 mb-15 md-mt-10">januinc@company.com</a> <br>
                        <a href="#" class="mobile tran3s fs-20 fw-500">+757 699-4478</a>
                    </div>
                    <div class="col-lg-3 col-sm-4 ms-auto mb-30">
                        <h5 class="footer-title tx-dark fw-500">Links</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#ml">About us</a></li>
                            <li><a href="#ml">Careers</a></li>
                            <li><a href="#ml">Features</a></li>
                            <li><a href="#ml">Demo the product</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-30">
                        <h5 class="footer-title tx-dark fw-500">Legal</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Cookie policy</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 mb-30">
                        <h5 class="footer-title tx-dark fw-500">Products</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="#">Take the tour</a></li>
                            <li><a href="#">Live chat</a></li>
                            <li><a href="#">Self-service</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Collaboration</a></li>
                            <li><a href="#">Jano Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.inner-wrapper -->
        </div>
        <div class="shapes shape-one rounded-circle"></div>
        <div class="shapes shape-two rounded-circle"></div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/lazy.svg" data-src="<?php echo get_template_directory_uri() ?>/assets/images/shape/shape_42.svg" alt="" class="lazy-img shapes shape-three">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/lazy.svg" data-src="<?php echo get_template_directory_uri() ?>/assets/images/shape/shape_43.svg" alt="" class="lazy-img shapes shape-four">
    </div> <!-- /.top-footer -->
    <div class="bottom-footer position-relative">
        <div class="container">
            <div class="inner-wrapper m-auto">
                <div class="row">
                    <div class="col-lg-4 order-lg-0 mb-15">
                        <ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
                            <li><a href="#">Privacy &amp; Terms.</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-2 mb-15">
                        <ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-1 mb-15">
                        <p class="copyright text-center m0">Copyright @2022 janu inc.</p>
                    </div>
                </div>
            </div> <!-- /.inner-wrapper -->
        </div>
    </div> <!-- /.bottom-footer -->
</div> <!-- /.footer-style-two -->

<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>

</div> <!-- /.main-page-wrapper -->

<?php wp_footer(); ?>



</body>
</html>

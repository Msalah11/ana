<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ana
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1d2b40">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1d2b40">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1d2b40">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-page-wrapper">

    <!--
=============================================
    Theme Main Menu
==============================================
-->
    <header class="theme-main-menu sticky-menu theme-menu-two">
        <div class="inner-content position-relative">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo order-lg-0"><a href="<?php echo get_site_url() ?>" class="d-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo_01.png" alt="" width="95"></a></div>

                <div class="right-widget d-flex align-items-center ms-auto ms-lg-0 order-lg-3">
                    <a href="signin.html" class="login-btn-one fs-17 fw-500 tran3s me-3">Login</a>
                    <a href="contact-us.html" class="contact-btn-two fs-17 fw-500 tran3s d-none d-lg-block">Contact us</a>
                </div> <!-- /.right-widget -->

                <nav class="navbar navbar-expand-lg order-lg-2">
                    <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="d-block d-lg-none"><div class="logo"><a href="<?php echo get_site_url() ?>" class="d-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo_01.png" alt="" width="95"></a></div></li>
                            <?php create_header_menu('menu-1') ?>
                        </ul>
                        <!-- Mobile Content -->
                        <div class="mobile-content d-block d-lg-none">
                            <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                                <a href="contact-us.html" class="contact-btn-two fs-17 fw-500 tran3s">Contact us</a>
                            </div>
                        </div> <!-- /.mobile-content -->
                    </div>
                </nav>
            </div>
        </div> <!-- /.inner-content -->
    </header> <!-- /.theme-main-menu -->


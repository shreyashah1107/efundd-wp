<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />


    <title><?php wp_title(''); ?><?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <?php if (is_user_logged_in()): ?>
        <style>
            .fixed-top {
                top: 32px;
            }
        </style>
    <?php endif; ?>
</head>

<body>
    <!-- Start: Header -->
    <header class="header-landing" id="header" js-header>
        <div class="container">
            <div class="row justify-content-center flex-grow-1">
                <div class="col-xxl-11">
                    <div class="header-landing__container">
                        <div class="header-landing__wrapper">
                            <div class="header-landing__main">
                                <!-- Logo Wrapper -->
                                <div class="header-landing__logo-wrapper">
                                    <div class="header-landing__logo">
                                        <a href="<?php echo home_url() ?>"  class="header-landing__logo-link"
                                            title="<?php _e("Paayco Logo", "") ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/header-logo-primary-new.png"
                                                alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- Logo Wrapper -->

                                <ul class="header-landing__nav-list header-landing__nav-list--left" id="mainNavList" role="menubar">
                                    <li class="header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Corporate"> Corporate <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="title">
                                                    <span>Corporate</span>
                                                </div>
                                                <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                    <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                        <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Online Payments">
                                                            <div class="icon">
                                                                <img src="https://www.paayco.com/wp-content/uploads/2024/12/leak_add.png" alt="Online Payments">
                                                            </div>
                                                            <div class="text">
                                                                <span class="link-text">Online Payments</span>
                                                                <span class="link-subtext">Ecommerce payments</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Business"> Business <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="title">
                                                    <span>Business</span>
                                                </div>
                                                <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                    <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                        <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Mini Card Machine">
                                                            <div class="icon">
                                                                <img src="https://www.paayco.com/wp-content/uploads/2025/03/mini-card-machine.png" alt="Mini Card Machine">
                                                            </div>
                                                            <div class="text">
                                                                <span class="link-text">Mini Card Machine</span>
                                                                <span class="link-subtext">For payments on the go</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Personal"> Personal <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="title">
                                                    <span>Personal</span>
                                                </div>
                                                <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                    <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                        <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Fraud Detection">
                                                            <div class="icon">
                                                                <img src="https://www.paayco.com/wp-content/uploads/2024/12/mdi_safe-square.png" alt="Fraud Detection">
                                                            </div>
                                                            <div class="text">
                                                                <span class="link-text">Fraud Detection</span>
                                                                <span class="link-subtext">Machine AI fraud detection</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-landing__nav-list-item" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Pricing"> Pricing </a>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="header-landing__nav-list header-landing__nav-list--right">
                                    <li class="header-landing__nav-list-item lang-selector--wrapper" role="menuitem">
                                        <?php echo the_language_switcher() ?>
                                    </li>
                                    <li class="header-landing__nav-list-item" role="menuitem">
                                        <a href="http://app.paayco.com/" class="header-landing__nav-list-item-link" title="Log In">Log In</a>
                                    </li>
                                    <li class="header-landing__nav-list-item" role="menuitem">
                                        <a href="#" title="Open Account" class="btn btn-bright-green">Open Account</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Hamburger Button -->
                            <div class="header-landing__hamburger-wrapper">
                                <!-- Language Dropdown -->
                                <div class="lang-selector--wrapper">
                                    <?php echo the_language_switcher() ?>
                                </div>
                                <!-- Hamburger Icon -->
                                <div>
                                    <button class="header-landing__hamburger" aria-label="Toggle menu" aria-expanded="false"
                                        aria-controls="mobileNav" js-hamburger>
                                        <div class="header-landing__hamburger-inner">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <!-- Hamburger Button -->
                        </div>
                    </div>
                    <!-- Start: Mobile Navigation -->
                    <?php include 'header-landing-mobile.php'; ?>
                    <!-- End: Mobile Navigation -->
                </div>
            </div>
        </div>
    </header>
    <main>
<?php

/**
 * Template Name: Multi Currency Wallets Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
    <?php include "template-parts/multi-currency-wallets/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Features -->
    <?php include "template-parts/multi-currency-wallets/features.php" ?>
    <!-- End: Features -->

    <!-- Start: Content Section  -->
    <?php include "template-parts/multi-currency-wallets/content-section-first.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
    <?php include "template-parts/multi-currency-wallets/content-section-second.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
    <?php include "template-parts/multi-currency-wallets/content-section-third.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
    <?php include "template-parts/multi-currency-wallets/content-section-fourth.php" ?>
    <!-- End: Content Section -->
<?php get_footer(); ?>
<?php

/**
 * Template Name: Virtual Cards Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
    <?php include "template-parts/virtual-cards/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Hero -->
    <?php include "template-parts/virtual-cards/card-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Content Section  -->
    <?php include "template-parts/virtual-cards/content-section-first.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
    <?php include "template-parts/virtual-cards/content-section-second.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
    <?php include "template-parts/virtual-cards/content-section-third.php" ?>
    <!-- End: Content Section -->

<?php get_footer(); ?>
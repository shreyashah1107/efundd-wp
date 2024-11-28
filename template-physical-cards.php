<?php

/**
 * Template Name: Physical Cards Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
<?php include "template-parts/physical-cards/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Features -->
<?php include "template-parts/physical-cards/features.php" ?>
    <!-- End: Features -->

    <!-- Start: Content Section  -->
<?php include "template-parts/physical-cards/content-section-first.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/physical-cards/content-section-second.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/physical-cards/content-section-third.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/physical-cards/content-section-fourth.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/physical-cards/cta-section.php" ?>
    <!-- End: Content Section -->

<?php get_footer(); ?>
<?php

/**
 * Template Name: Team Management Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
<?php include "template-parts/team-management/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Content Section  -->
<?php include "template-parts/team-management/content-section-white.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/team-management/content-section-green.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/team-management/content-section-third.php" ?>
    <!-- End: Content Section -->

<?php get_footer(); ?>
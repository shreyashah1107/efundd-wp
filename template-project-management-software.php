<?php

/**
 * Template Name: Project Management Software Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
<?php include "template-parts/project-management/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Content Section  -->
<?php include "template-parts/project-management/content-section-first.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/project-management/content-section-second.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/project-management/content-section-green.php" ?>
    <!-- End: Content Section -->
    <!-- Start: Content Section -->
<?php include "template-parts/project-management/content-section-fourth.php" ?>
    <!-- End: Content Section -->

<?php get_footer(); ?>
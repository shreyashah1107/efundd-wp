<?php

/**
 * Template Name: Expense Cards Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
<?php include "template-parts/expense-cards/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Features -->
<?php include "template-parts/expense-cards/features.php" ?>
    <!-- End: Features -->

    <!-- Start: Content Section  -->
<?php include "template-parts/expense-cards/content-section-first.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/expense-cards/content-section-second.php" ?>
    <!-- End: Content Section -->

    <!-- Start: Content Section -->
<?php include "template-parts/expense-cards/content-section-third.php" ?>
    <!-- End: Content Section -->

<?php get_footer(); ?>
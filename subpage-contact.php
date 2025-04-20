<?php

/**
 * Template Name: Contact Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
    <!-- Start: Hero -->
    <?php include "template-parts/sub-contact/hero.php" ?>
    <!-- End: Hero -->

    <!-- Start: Content Section One -->
    <?php include "template-parts/sub-contact/content-section-one.php" ?>
    <!-- End: Content Section One -->

    <!-- Start: Content Section Two -->
    <?php include "template-parts/sub-contact/content-section-two.php" ?>
    <!-- End: Content Section Two -->

    <!-- Start: Content Section Three -->
    <?php include "template-parts/sub-contact/content-section-three.php" ?>
    <!-- End: Content Section Three -->

    <!-- Start: CTA -->
    <?php include "template-parts/sub-contact/cta.php" ?>
    <!-- End: CTA -->
<?php get_footer(); ?>
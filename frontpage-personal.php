<?php

/**
 * Template Name: Personal Landing Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/personal-landing/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Content Section One -->
<?php include "template-parts/personal-landing/content-section-one.php" ?>
<!-- End: Content Section One -->

<!-- Start: Security -->
<?php include "template-parts/home/security.php" ?>
<!-- End: Security -->

<!-- Start: CTA -->
<?php include "template-parts/home/cta-section.php" ?>
<!-- End: CTA -->

<?php get_footer(); ?>
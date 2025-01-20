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


<!-- Start: Security -->
<?php include "template-parts/home/security.php" ?>
<!-- End: Security -->

<!-- Start: CTA -->
<?php include "template-parts/home/cta-section.php" ?>
<!-- End: CTA -->

<?php get_footer(); ?>
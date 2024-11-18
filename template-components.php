<?php
/**
 * Template Name: Components Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/components/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Modular Solutions -->
<?php include "template-parts/components/content-section.php" ?>
<!-- End: Modular Solutions -->

<!-- Start: Modular Solutions -->
<?php include "template-parts/components/components-section.php" ?>
<!-- End: Modular Solutions -->

<!-- Start: CTA -->
<?php include "template-parts/components/cta-section.php"; ?>
<!-- End: CTA -->

<!-- Start: Partners -->
<?php include "template-parts/components/partners-section.php"; ?>
<!-- End: Partners -->
<?php get_footer(); ?>

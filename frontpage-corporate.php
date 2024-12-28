<?php
/**
 * Template Name: Corporate Landing Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/corporate-landing/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Modular Solutions -->
<?php include "template-parts/corporate-landing/modular-solutions.php" ?>
<!-- End: Modular Solutions -->

<!-- Start: Online Payments -->
<?php include "template-parts/corporate-landing/online-payments.php" ?>
<!-- End: Online Payments -->

<!-- Start: Payments -->
<?php include "template-parts/corporate-landing/payment-slider.php"; ?>
<!-- End: Payments -->

<!-- Start: In Person Payments -->
<?php include "template-parts/corporate-landing/in-person-payments.php"; ?>
<!-- End: In Person Payments -->

<!-- Start: Payments -->
<?php include "template-parts/corporate-landing/opportunities-global.php"; ?>
<!-- End: Payments -->

<!-- Start: Business Services -->
<?php include "template-parts/corporate-landing/business-services.php"; ?>
<!-- End: Business Services -->

<!-- Start: Digital Solution -->
<?php include "template-parts/corporate-landing/solutions-section.php"; ?>
<!-- End: Digital Solution -->

<!-- Start: Mobile App -->
<?php include "template-parts/corporate-landing/mobile-app-section.php"; ?>
<!-- End: Mobile App -->

<!-- Start: Payment acquiring solution -->
<?php //include "template-parts/corporate-landing/payment-acquiring-solution-section.php" ?>
<!-- End: Payment acquiring solution -->

<!-- Start: Payments -->
<?php include "template-parts/corporate-landing/opportunities.php"; ?>
<!-- End: Payments -->

<!-- Start: Payment Processing -->
<?php include "template-parts/corporate-landing/payment-processing.php" ?>
<!-- End: Payment Processing -->

<!-- Start: CTA -->
<?php include "template-parts/corporate-landing/cta-section.php"; ?>
<!-- End: CTA -->

<!-- Start: Partners -->
<?php include "template-parts/corporate-landing/partners-section.php"; ?>
<!-- End: Partners -->
<?php get_footer(); ?>

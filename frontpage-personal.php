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

    <!-- Start: Payments -->
<?php include "template-parts/personal-landing/banking-slider.php" ?>
    <!-- End: Payments -->

    <!-- Start: Monitor Transactions -->
<?php include "template-parts/personal-landing/account-management.php" ?>
    <!-- End: Monitor Transactions -->

    <!-- Start: Payment Methods -->
<?php include "template-parts/personal-landing/corporate-cards.php" ?>
    <!-- End: Payment Methods -->

    <!-- Start: Payments -->
<?php include "template-parts/personal-landing/services-section.php" ?>
    <!-- End: Payments -->

    <!-- Start: Money in Account -->
<?php include "template-parts/personal-landing/solution-section.php" ?>
    <!-- End: Money in Account -->

    <!-- Start: Mobile App -->
<?php include "template-parts/personal-landing/mobile-app-section.php" ?>
    <!-- End: Mobile App -->

    <!-- Start: Pricing -->
<?php include "template-parts/personal-landing/pricing-plans.php" ?>
    <!-- End: Pricing -->

    <!-- Start: Security -->
<?php include "template-parts/home/security.php" ?>
    <!-- End: Security -->

    <!-- Start: CTA -->
<?php include "template-parts/home/cta-section.php" ?>
    <!-- End: CTA -->

<?php get_footer(); ?>
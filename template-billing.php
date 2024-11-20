<?php

/**
 * Template Name: Billing Template
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/billing/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Features -->
<?php include "template-parts/billing/features.php" ?>
<!-- End: Features -->

<!-- Start: Billing -->
<?php include "template-parts/billing/billing.php" ?>
<!-- End: Billing -->

<!-- Start: Payment Solution -->
<?php include "template-parts/billing/payment-solution.php" ?>
<!-- End: Payment Solution -->

<!-- Start: Compatibility -->
<?php include "template-parts/billing/compatibility.php" ?>
<!-- End: Compatibility -->

<?php get_footer(); ?>
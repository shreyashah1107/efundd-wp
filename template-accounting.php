<?php

/**
 * Template Name: Accounting Template
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/accounting/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Features -->
<?php include "template-parts/accounting/features.php" ?>
<!-- End: Features -->

<!-- Start: accounting -->
<?php include "template-parts/accounting/billing.php" ?>
<!-- End: Billing -->

<!-- Start: Payment Solution -->
<?php include "template-parts/accounting/payment-solution.php" ?>
<!-- End: Payment Solution -->

<!-- Start: Compatibility -->
<?php include "template-parts/accounting/compatibility.php" ?>
<!-- End: Compatibility -->

<?php get_footer(); ?>
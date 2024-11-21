<?php

/**
 * Template Name: Card Controls Template
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/card-controls/hero-section.php" ?>
<!-- End: Hero -->

<!-- Start: Features -->
<?php include "template-parts/card-controls/features.php" ?>
<!-- End: Features -->

<?php include "template-parts/card-controls/content-section-gray.php" ?>

<!-- Start: Compatibility -->
<?php include "template-parts/card-controls/compatibility.php" ?>
<!-- End: Compatibility -->

<?php get_footer(); ?>
<?php
/**
 * Template Name: Checkout Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
<!-- Start: Hero -->
<?php include "template-parts/checkout/hero-section.php" ?>
<!-- End: Hero -->
<?php include "template-parts/checkout/features.php" ?>

<?php include "template-parts/checkout/content-section.php" ?>

<?php include "template-parts/checkout/white-content-section.php" ?>

<?php include "template-parts/checkout/api-section.php" ?>

<?php include "template-parts/checkout/payment-method-section.php" ?>

<?php get_footer(); ?>

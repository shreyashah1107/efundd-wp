<?php
/**
 * Template Name: Medium Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header('light-in-person');
$defaultImage = get_stylesheet_directory_uri() . "/assets/default-thumbnail.jpg";
?>
    <!-- Start: Hero -->
    <?php include "template-parts/medium/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Card reader qualities -->
    <?php include "template-parts/medium/qualities-section.php" ?>
    <!-- End: Card reader qualities -->

    <!-- Start: Why Choose Us -->
    <?php include "template-parts/medium/card-section.php" ?>
    <!-- End: Why Choose Us -->

    <!-- Start: Why Us -->
    <?php include "template-parts/medium/why-us-section.php" ?>
    <!-- End: Why Us -->

    <!-- Start: Charges -->
    <?php include "template-parts/medium/charges-section.php" ?>
    <!-- End: Charges -->

    <!-- Start: Choose card reader -->
    <?php include "template-parts/medium/pricing-plan-section.php" ?>
    <!-- End: Choose card reader -->

    <!-- Start: Find Product -->
    <?php include "template-parts/medium/cta-section.php" ?>
    <!-- End: Find Product -->

    <!-- Start: Transaction Overview Wrapper -->
    <?php include "template-parts/medium/payments-section.php" ?>
    <!-- End: Transaction Overview Wrapper -->
<?php
get_footer();
?>
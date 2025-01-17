<?php
/**
 * Template Name: Self Serve Kiosks Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header('light-in-person');
$defaultImage = get_stylesheet_directory_uri() . "/assets/default-thumbnail.jpg";
?>
    <!-- Start: Hero -->
    <?php include "template-parts/self-serve-kiosks/hero-section.php" ?>
    <!-- End: Hero -->

    <!-- Start: Card reader qualities -->
    <?php include "template-parts/self-serve-kiosks/qualities-section.php" ?>
    <!-- End: Card reader qualities -->

    <!-- Start: Why Choose Us -->
    <?php include "template-parts/self-serve-kiosks/card-section.php" ?>
    <!-- End: Why Choose Us -->

    <!-- Start: Charges -->
    <?php include "template-parts/self-serve-kiosks/charges-section.php" ?>
    <!-- End: Charges -->

    <!-- Start: Choose card reader -->
    <?php include "template-parts/self-serve-kiosks/pricing-plan-section.php" ?>
    <!-- End: Choose card reader -->

    <!-- Start: Find Product -->
    <?php include "template-parts/self-serve-kiosks/cta-section.php" ?>
    <!-- End: Find Product -->

    <!-- Start: Transaction Overview Wrapper -->
    <?php include "template-parts/self-serve-kiosks/payments-section.php" ?>
    <!-- End: Transaction Overview Wrapper -->
<?php
get_footer();
?>
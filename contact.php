<?php
/**
* Template Name: Contact Template
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); 
$defaultImage = get_stylesheet_directory_uri()."/assets/default-thumbnail.jpg";
?>
<!-- BreadCrumbs -->
        <?php //require('template-parts/breadcrumbs.php'); ?>
<!-- BreadCrumbs -->
        <!-- Main Content -->
        <main id="page">
            <div class="contact-page">
                <h1>Contact Page</h1>
            </div>
        </main>
        <!-- Main Content -->
<?php
  get_footer();
?>
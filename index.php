<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); 
 $defaultImage = get_stylesheet_directory_uri()."/public/img/default-thumbnail.jpg";

  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      if(get_the_post_thumbnail_url()){
        $post_img = get_the_post_thumbnail_url();
      }else{
        $post_img = $defaultImage;
      }
      the_content();
    endwhile;
  else :
      _e( 'Sorry, no posts matched your criteria.', 'fundd' );
  endif;
get_footer();
?>
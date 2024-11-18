<?php
/**
 * Default Home Page
 *
 * @package WordPress
 * @subpackage Fundd
 * @since fundd 1.0
 */

get_header();
$defaultImage = get_stylesheet_directory_uri()."/public/img/default-thumbnail.jpg";

?>
<!-- Section News Started -->    
<?php
    $postsPerPage = 10;
    $args = array(
            'posts_per_page' => $postsPerPage
    );
    $news = new WP_Query($args);
    if ( $news->have_posts() ) :
    
    while ($news->have_posts()) : $news->the_post();
    $avatar = get_avatar(get_the_author_meta('ID', $post->post_author));
    $author_id = get_the_author_meta('ID',  $post->post_author);
    
        if(get_the_post_thumbnail_url()){
          $post_img = get_the_post_thumbnail_url($post->ID,'news-thumbnail');
        }else{
          $post_img = $defaultImage;
        }
     the_content();
    endwhile;  
    else:
        _e( 'Sorry, no pages matched your criteria.', 'fundd' );
    endif;
    wp_reset_postdata();
?>
<!-- Section News Ended -->
<?php get_footer(); ?>
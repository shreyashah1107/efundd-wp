<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section -->
                    <section>

                        <h1 class="page-header"><?php echo sprintf( __( '%s Search Results for ', 'fundd' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

                        <?php get_template_part('loop'); ?>

                        <?php get_template_part('pagination'); ?>

                    </section>
                    <!-- /section -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
<?php get_footer(); ?>
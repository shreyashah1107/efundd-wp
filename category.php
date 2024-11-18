<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section -->
                    <section>

                        <h1 class="page-header"><?php _e( 'Categories for ', 'fundd' ); single_cat_title(); ?></h1>

                        <?php get_template_part('loop'); ?>

                        <?php get_template_part('pagination'); ?>

                    </section>
                    <!-- /section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
<?php get_footer(); ?>
<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section -->
                    <section>

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>


                            <!-- article -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <!-- post title -->
                                <h1>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h1>
                                <!-- /post title -->
                                <!-- Author -->
                                <p class="lead">
                                    <span class="author"><?php _e( 'Published by', 'fundd' ); ?> <?php the_author_posts_link(); ?></span>
                                </p>
                                <hr>
                                <!-- Date -->
                                <p>
							<span class="date">
								<?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>
							</span>
                                    <span class="text-muted">|</span>
                                    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'fundd' ), __( '1 Comment', 'fundd' ), __( '% Comments', 'fundd' )); ?></span>
                                </p>
                                <!-- /post details -->
                                <hr>

                                <!-- post thumbnail -->
                                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); // Fullsize image for the single post ?>
                                    </a>
                                    <hr>
                                <?php endif; ?>
                                <!-- /post thumbnail -->

                                <?php the_content(); // Dynamic Content ?>
                                <hr>
                                <p>
                                    <?php the_tags( __( 'Tags: ', 'fundd' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
                                </p>

                                <p>
                                    <?php _e( 'Categorised in: ', 'fundd' ); the_category(', '); // Separated by commas ?>
                                </p>

                                <p class="text-muted"><?php _e( 'This post was written by ', 'fundd' ); the_author(); ?></p>

                                <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

                                <?php comments_template(); ?>

                            </article>
                            <!-- /article -->

                        <?php endwhile; ?>

                        <?php else: ?>

                            <!-- article -->
                            <article>

                                <h1><?php _e( 'Sorry, nothing to display.', 'fundd' ); ?></h1>

                            </article>
                            <!-- /article -->

                        <?php endif; ?>

                    </section>
                    <!-- /section -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
<?php get_footer(); ?>
<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

            <div id="content">
                <div id="inner-content" class="wrap clearfix">
                    <?php get_sidebar(); ?>
                    <div class="article-container clearfix">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
                            <div class="twocol first">
                                <p class="day-month"><?php echo get_the_time('j/m'); ?></p>
                                <p class="year">&ndash;<?php echo get_the_time('Y'); ?>&ndash;</p>
                            </div>
                            <div class="tencol last">
                                <header class="article-header">
                                    <h1 class="h2"><?php the_title(); ?></h1>
                                </header>
                                <section class="entry-content clearfix">
                                    <?php the_content(); ?>
                                </section>
                                <?php // comments_template(); // uncomment if you want to use them ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                            <?php if ( function_exists( 'bones_page_navi' ) ) { ?>
                                    <?php bones_page_navi(); ?>
                            <?php } else { ?>
                                    <nav class="wp-prev-next">
                                            <ul class="clearfix">
                                                <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                                                <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
                                            </ul>
                                    </nav>
                            <?php } ?>
                        <?php else : ?>
                            No Posts Found.
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

<?php get_footer(); ?>

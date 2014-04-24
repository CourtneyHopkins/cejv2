<?php
/* portfolio single */
?>

<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap clearfix">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="sidebar port-header clearfix">
						<?php the_title(); ?>
					</div>
					<div class="portfolio-item-container clearfix">
						<div class="port-description">
							<?php echo get_field('description'); ?>
						</div>
						<img src="<?php echo courtney_get_image_src( get_field('image'), 'portfolio-full' ); ?>" alt="" />
						<?php if ( get_field('website_link') ): ?>
						<div class="hello">
							<div class="buttons clearfix">
								<a href="<?php echo get_field('website_link'); ?>" target="_blank"><div>Visit the Website</div></a>
							</div>
						</div>
						<?php endif; ?>
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
						<?php endif; ?>
					</div>
				</div>
			</div>

<?php get_footer(); ?>

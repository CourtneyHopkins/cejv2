<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap clearfix">
					<div class="portfolio-container">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="item" 
						style="background-image: url(<?php echo courtney_get_image_src( get_post_thumbnail_id(), 'full-screen-image' ); ?>);">
                            <a href="<?php the_permalink(); ?>">
	                            <div class="overlay">
	                                <?php the_title(); ?>
	                            </div>
	                        </a>    
                        </div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>

<?php get_footer(); ?>

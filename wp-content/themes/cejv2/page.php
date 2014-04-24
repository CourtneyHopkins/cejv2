<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="clearfix">
					<div id="hello">
						<span class="intro">
							Want to work with me? 
							Have any questions? 
							Want to say hello? 
							<span class="green">Feel free to reach me here!</span>
						</span>
						<br />
						<br />
						<br />
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>

<?php get_footer(); ?>

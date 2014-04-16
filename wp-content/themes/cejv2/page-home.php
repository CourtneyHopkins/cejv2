<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="clearfix">
					<div id="hello">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/hey-there-gray.png" class="hey-there" alt="" />
						<br /> 
						<br /> 
						<span class="intro">I'm <span class="green">Courtney Jones</span>,<br />
						a web developer &amp; interface designer.</span>
						<br />
						<span class="intro green">But that's not all I do... </span>
						<br /><br /><br /><br /> 
						<div class="buttons clearfix">
							<a href="/about/"><div class="fourcol first">Learn more about me !</div></a>
							<a href="/portfolio/"><div class="fourcol">View my work !</div></a>
							<a href="/about/"><div class="fourcol last">Contact me !</div></a>
						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>

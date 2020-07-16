<?php
/*
Template Name: VESTIBULUM-post
Template Post Type: post
*/

get_header(); ?>

<section class="main-content">
	<div class="main-heading">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>	
	</div>
	<div class="container">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>	
</section>
<?php get_footer(); ?>
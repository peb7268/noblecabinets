<?php /* Template Name: Homepage */
get_header(); ?>

<div class="outer-wrapper">
		<div class="inner-wrapper">
			<div id="theContent">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
				<?php the_content(); ?>
			<?php endwhile; ?>
			</div><!-- #theContent -->
			<?php //get_sidebar(); ?>
		</div><!-- .inner-wrapper -->
	</div><!-- outer-wrapper -->
<?php get_footer(); ?>
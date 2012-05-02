<?php /* Template Name: old-Homepage-old  */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
	<div class="outer-wrapper">
		<div class="inner-wrapper">
			<?php the_content(); ?>
		</div><!-- .inner-wrapper -->
	</div><!-- outer-wrapper -->
<?php endwhile; ?>

<?php get_footer(); ?>
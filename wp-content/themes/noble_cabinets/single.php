<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
	<div class="outer-wrapper">
		<div class="inner-wrapper">
			<div id="theContent">
				<h1 class="title"><?php the_title() ?></h1>
				<?php the_content(); ?>
			</div><!-- #theContent -->
			<?php get_sidebar(); ?>
		</div><!-- .inner-wrapper -->
	</div><!-- outer-wrapper -->
<?php endwhile; ?>
<?php get_footer(); ?>
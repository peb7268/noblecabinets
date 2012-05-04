<?php get_header(); ?>

	<div class="outer-wrapper">
		<div class="inner-wrapper">
			<div id="theContent">
			
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
				<h1 class="title"><?php the_title() ?></h1>
				<?php the_content(); ?>
			
			<?php endwhile; ?>
			</div><!-- #theContent -->
			<?php get_sidebar(); ?>
		</div><!-- .inner-wrapper -->
	</div><!-- outer-wrapper -->
<?php get_footer(); ?>
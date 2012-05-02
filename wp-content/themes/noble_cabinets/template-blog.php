<?php 
/* Template name: Blog Template */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="eachPost">
	<div class="featured_img left">
			<!-- Image goes here -->
	</div><!-- .featured_img -->

				<div class="theContent left">
					<h4><?php the_title(); ?></h4>
					<a href="" class=""></a>
					<p class="postMeta"><?php the_date(); ?>
						<span class="i_author"></span> | </span>
					</p>
				
					<div class="social-sharing">
						<div class="twitter-btn">
							<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
						</div><!-- .twitter-btn -->					
						<!-- .fblike goes here -->	
					</div><!-- .social-sharing -->
					
					<?php the_content(); ?>
					
				</div><!-- .theContent -->

	<div class="clear">&nbsp;</div><!-- .clear -->
</div><!-- .eachPost -->
<?php endwhile; ?>
<?php endif; ?>

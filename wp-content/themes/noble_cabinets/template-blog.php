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
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
						</div><!-- .twitter-btn -->
						
					<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="lucida grande"></div>						
					
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187996341275269";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					</div><!-- .social-sharing -->
					
					<?php the_content(); ?>
					
				</div><!-- .theContent -->

	<div class="clear">&nbsp;</div><!-- .clear -->
</div><!-- .eachPost -->
<?php endwhile; ?>
<?php endif; ?>

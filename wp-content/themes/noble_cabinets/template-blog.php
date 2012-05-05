<?php 
	/* Template name: Blog Template */
	get_header(); 
	
?>

<div class="outer-wrapper">
	<div class="inner-wrapper">
		<div id="theContent">
				
				<?php 
				$pagenum = $wp_query->query_vars;
				$pagenum = $pagenum['paged'];
				
				if(empty($pagenum)){
					$pagenum = 1;
				}
				query_posts("posts_per_page=10&cat=9&paged=$pagenum");
				global $more;
				$more = 0;
				
				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
				<div class="eachPost">
				<div class="featured_img left">
					<?php 
							//var_dump($post);
							if ( has_post_thumbnail() ) {
								echo get_the_post_thumbnail();
							} else {
								$img = bloginfo('stylesheet_directory')."/images/default_featured_img.png";
								echo "<img src=".$img." />";
							}
						?>		
				</div><!-- .featured_img .left-->
		
						<div class="theContent left">
							<a href="<?php the_permalink(); ?>"><h1 class="title"><?php the_title(); ?></a></h1>
								<div class="postMeta clearfix">
								<p><?php the_date(); ?><span class="i_author"></span> | <?php the_author(); ?></span></p>
						
							<div class="social-sharing clearfix">
								<div class="twitter-btn">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
								</div><!-- .twitter-btn -->
								
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="lucida grande"></div>						
							
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187996341275269";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							</div><!-- .social-sharing -->
							</div><!-- .postMeta -->
							<?php the_content('Read More &raquo;'); ?>
		
						</div><!-- .theContent -->
		
			<div class="clear">&nbsp;</div><!-- .clear -->
		</div><!-- .eachPost -->

				
			<?php endWhile; ?>
		</div><!-- #theContent -->
		<?php get_sidebar(); ?>
	</div><!-- .inner-wrapper -->
</div><!-- .outer-wrapper -->

<?php get_footer(); ?>

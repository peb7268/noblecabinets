<div id="sidebar">
<ul class="sidebar-block">	 
	<ul id="ads">
		<li id="ad-banner" class="large"><a href="#"></a></li>
		<li id="ad-1"><a href="#"></a></li>
		<li id="ad-2"><a href="#"></a></li>
	</ul>
	<div class="clear">&nbsp;</div>
	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		<li>
			<h3 class="almendra"><?php _e( 'Archives', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>
	<?php endif; // end primary widget area ?>
</ul><!-- .sidebar -->
</div><!-- #sidebar -->
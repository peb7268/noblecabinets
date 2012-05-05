<div id="sidebar">
<ul class="sidebar-block">	 
	<ul id="ads">
		<li id="ad-banner" class="large"><a href="/blog/how-home-improvements-can-save-you-money"></a></li>
		<li id="ad-1"><a href="/blog/a-noble-refferal/"></a></li>
		<li id="ad-2"><a href="/client-testimonials"></a></li>
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
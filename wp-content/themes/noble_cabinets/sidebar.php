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

		<li>
			<h3><?php _e( 'Meta', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	<?php endif; // end primary widget area ?>
</ul><!-- .sidebar -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="sidebar-block ">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
<?php endif; ?>
</div><!-- #sidebar -->
<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		
		<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?= do_shortcode('[latestfilms]');?>

	</div><!-- #secondary -->

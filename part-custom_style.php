<?php

function get_color_channels($color, $alpha = 1.0)
{
	list($red, $green, $blue) = array_map('hexdec', sscanf($color, '#%02s%02s%02s'));
	return "rgba($red, $green, $blue, $alpha)";
}

?>
<style type="text/css">

	.first_menu a:hover span,
	.first_menu li.current-menu-item > a span {
		border-bottom-color: <?php echo ot_get_option('first_menu_color', '#e22'); ?>;
	}
	
	.top_post_link {
		box-shadow: -.1666em -.1666em 0 <?php echo get_color_channels(ot_get_option('top_post_color', '#e22'), '.5'); ?>;
	}

	.top_post_link:hover {
		box-shadow: -.1666em -.1666em 0 <?php echo get_color_channels(ot_get_option('top_post_color', '#e22'), '1'); ?>;
	}

	.top_post_cont {
		border-top: .25em solid <?php echo ot_get_option('top_post_color', '#e22'); ?>;
	}

</style>
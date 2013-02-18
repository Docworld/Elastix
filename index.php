<?php

if (function_exists('ot_get_option'))
{
	$test = ot_get_option('background');
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('title'); ?></title>

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/elastix.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" media="screen" />

		<?php get_template_part('part', 'custom_style'); ?>

		<script src="<?php bloginfo('template_url'); ?>/javascript/jquery.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/javascript/script.js" type="text/javascript"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(''); ?>>

		<nav id="first_menu_container" class="ex_wrap">
			<?php wp_nav_menu(array(
				'theme_location' => 'first_menu',
				'container' => false,
				'link_before' => '<span>',
				'link_after' => '</span>',
				'menu_class' => 'first_menu ex_cont clearfix',
				'depth' => 2
			)); ?>
		</nav>

		<?php if (1) : ?>
		<section class="ex_wrap">
			<div class="ex_cont breadcrumb">
				<?php the_breadcrumb(); ?>
			</div>
		</section>
		<?php endif; ?>

		<section class="ex_wrap">
			<div class="ex_cont">
				<div class="ex_one_three ex_1">
					<a href="<?php bloginfo('url'); ?>" class="logo_link">
						<img src="<?php echo ot_get_option('logo', get_bloginfo('template_url') . 'images/logo.png'); ?>" class="logo" />
					</a>
				</div>
				<div class="ex_two_three ex_2">
					<div class="top_post_cont">
						<img class="top_post_image" src="http://placekitten.com/g/700/200" />
						<a class="top_post_link" href="#">This is last or top news<br />or it is featured</a>
					</div>
				</div>
			</div>
		</section>

		<section class="ex_wrap">
			<div class="ex_cont">
				<div class="ex_one_two ex_1">asdf
				</div>
				<div class="ex_one_two ex_2">asdf
				</div>
			</div>
		</section>

		<section class="ex_wrap">
			<div class="ex_cont">
				<div class="ex_one_three ex_1">asdf
				</div>
				<div class="ex_one_three ex_2">asdf
				</div>
				<div class="ex_one_three ex_3">asdf
				</div>
			</div>
		</section>

		<?php wp_footer(); ?>
	</body>
</html>
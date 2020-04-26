<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

	<style>
		.dm{
			background: yellow;
		}

		.dm{
			height: 100px;
		}

		.dm{
			width: 100px;
		}
	</style>
</head>

<body <?php body_class();?>>

<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<h1 class="site-title"><?php bloginfo('name');?></h1>

	<nav class="main-navigation">
		<?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
	</nav>
</header>

<div id="content" class="site-content">


<div style="background:  <?php echo get_theme_mod('devmonsta_custom_box_color'); ?> ; height:200px; width:200px;">

<h1 class="dm_h1" style="color: <?php echo get_theme_mod('devmonsta_custom_text_color'); ?> "><?php echo get_theme_mod('dm_box_text'); ?></h1>

</div>

<div class="dm"></div>
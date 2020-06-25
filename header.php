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


<?php 

	//test post and customizer values here
	// dm_print(dm_theme_option('slider_widget'));
	// dm_print(dm_theme_option('dm_switcher'));

?>

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
<!-- <?php print_r(get_theme_mod('devmonsta_repeater_control')); ?> -->
<table>
<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Date of birth</td>
	<td>Child</td>
	<td>Test field</td>
</tr>
<?php

?>
</table>
<?php


$customizer_repeater_example = get_theme_mod('customizer_repeater_example', json_encode(array( /*The content from your default parameter or delete this argument if you don't want a default*/)));
/*This returns a json so we have to decode it*/
$customizer_repeater_example_decoded = json_decode($customizer_repeater_example);
foreach ($customizer_repeater_example_decoded as $repeater_item) {
    // echo $repeater_item->icon_value;
    // echo $repeater_item->text;
    // echo $repeater_item->link;
    // echo $repeater_item->image_url;
    // echo $repeater_item->choice;
    ?>
<div style="padding: 10px; border:2px solid black">
<h1><?php echo $repeater_item->title; ?></h1>
</div>
<?php

  
    // echo $repeater_item->shortcode;
    /*Social repeater is also a repeater so we need to decode it*/
    // $social_repeater = json_decode($repeater_item->social_repeater);
    // foreach($social_repeater as $social_repeater){
    //      echo $social_repeater->link;
    //      echo $social_repeater->icon;
    // }
}

?>
<?php

/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support('title-tag');

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));

/**
 * Include primary navigation menu
 */
function untheme_nav_init()
{
    register_nav_menus(array(
        'menu-1' => 'Primary Menu',
    ));
}
add_action('init', 'untheme_nav_init');

/**
 * Register widget area.
 *
 */
function untheme_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'description' => 'Add widgets',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'untheme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function untheme_scripts()
{
    wp_enqueue_style('untheme-style', get_stylesheet_uri());
    wp_enqueue_style('untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'untheme_scripts');

function untheme_create_post_custom_post()
{
    register_post_type('custom_post',
        array(
            'labels' => array(
                'name' => __('Custom Post', 'untheme'),
            ),
            'public' => true,
            'hierarchical' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'custom-fields',
                'thumbnail',
            ),
            'taxonomies' => array(
                'post_tag',
                'category',
            ),
        ));
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type

function devmonsta_customizer_css()
{
    ?>
		 <style type="text/css">
			 a { color: <?php echo get_theme_mod('devmonsta_link_color'); ?> !important;  }
		 </style>
	<?php
} // end tcx_customizer_css
add_action('wp_head', 'devmonsta_customizer_css');

// customizer test

// $wp_customize->add_setting( 'customizer_repeater_example', array(
//     'sanitize_callback' => 'customizer_repeater_sanitize'
//  ));
//  $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_example', array(
// 'label'   => esc_html__('Example','customizer-repeater'),
// 'section' => 'my_section',
// 'priority' => 1,
// 'customizer_repeater_image_control' => true,
// 'customizer_repeater_icon_control' => true,
// 'customizer_repeater_title_control' => true,
// 'customizer_repeater_subtitle_control' => true,
// 'customizer_repeater_text_control' => true,
// 'customizer_repeater_link_control' => true,
// 'customizer_repeater_shortcode_control' => true,
// 'customizer_repeater_repeater_control' => true
// ) ) );

// require get_template_directory() . '/cr/repeater.php';

// if (!class_exists('Devmonsta_Repeater')) {
//     require_once get_template_directory() . '/cr/class/repeater-class.php';
//     if (class_exists('Devmonsta_Repeater')) {
//         $wp_customize->add_setting('customizer_repeater_example', array(
//             'sanitize_callback' => 'customizer_repeater_sanitize',
//         ));
//         $wp_customize->add_control(new Devmonsta_Repeater($wp_customize, 'customizer_repeater_example', array(
//             'label' => esc_html__('Movie info', 'customizer-repeater'),
//             'section' => 'devmonsta_text_settings_section',
//             'priority' => 1,
//             'customizer_repeater_title_control' => true,
//             'customizer_repeater_subtitle_control' => true,
           
//         )));
//     } else {
//         error_log('Cusomizer repeater does not class exists');
//     }
// }
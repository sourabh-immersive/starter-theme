<?php
/*-----------------------------------------------------------------------------------*/
/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define('NAKED_VERSION', 1.0);

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if (!isset($content_width)) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support('automatic-feed-links');

/*-----------------------------------------------------------------------------------*/
/* Add Post Thumbnails
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'main'	=>	__('Main', 'dev'),
		'footer'	=>	__('Footer', 'dev'),
		'mobile'	=>	__('Mobile', 'dev'),
		// 'nav-column-1'	=>	__('nav-column-1', 'dev'),
		// 'nav-column-2'	=>	__('nav-column-2', 'dev'),

		// 'social'	=>	__('social', 'handels'),

		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);


/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function theme_scripts()
{

	// Foundation
	wp_enqueue_style('foundation.css', get_stylesheet_directory_uri() . '/assets/dist/css/foundation.css');

	// Vendor
	// This is now in the cachebuster function below
	// wp_enqueue_script('vendor-js', get_stylesheet_directory_uri() . '/assets/dist/js/vendor.min.js', array(), null, true);

	// get the theme directory style.css and link to it in the header
	// This is now in the cachebuster function below
	// wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/dist/css/main.css');

	// Main
	// This is now in the cachebuster function below
	// wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js', array(), null, true );        

}
add_action('wp_enqueue_scripts', 'theme_scripts'); // Register this fxn and allow Wordpress to call it automatcally in the header




/**
 * Enqueue styles with cachebuster timestamp added as a version.
 */

function cachebuster_styles()
{

	// Main Style
	$filePath = get_stylesheet_directory() . '/assets/dist/css/main.css';
	$timeEditedStyle = filectime($filePath);
	wp_enqueue_style(
		'main-style',
		get_stylesheet_directory_uri() . '/assets/dist/css/main.css',
		false,
		$timeEditedStyle,
		false // Place in footer
	);

	// Main JS
	$filePath = get_stylesheet_directory() . '/assets/dist/js/main.min.js';
	$timeEdited = filectime($filePath);


	// Check when the CSS and JS files were last changed
	// Change BOTH to whatever the latest is
	$latestEditedFile = $timeEditedStyle > $timeEdited ? $timeEditedStyle : $timeEdited;

	// Vendor JS
	$filePath = get_stylesheet_directory() . '/assets/dist/js/vendor.min.js';
	// $timeEdited = filectime($filePath);
	wp_enqueue_script(
		'vendor',
		get_stylesheet_directory_uri() . '/assets/dist/js/vendor.min.js',
		false,
		$latestEditedFile,
		true // Place in footer
	);

	// Main JS
	wp_enqueue_script(
		'main-js',
		get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js',
		false,
		$latestEditedFile,
		true // Place in footer
	);
}
add_action('wp_enqueue_scripts', 'cachebuster_styles');





/*-----------------------------------------------------------------------------------*/
/* News Pagination
/*-----------------------------------------------------------------------------------*/

// Numbered Pagination
function wplift_pagination()
{
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'prev_next' => false

	));
}


//Category Pagination
function wpse_modify_category_query($query)
{
	if (!is_admin() && $query->is_main_query()) {
		if ($query->is_category()) {
			$query->set('posts_per_page', 2);
		}
	}
}
add_action('pre_get_posts', 'wpse_modify_category_query');



/*-----------------------------------------------------------------------------------*/
/* Add Post Thumbnails
/*-----------------------------------------------------------------------------------*/

add_image_size('post-thumbs', 1400, 1000, true);
add_image_size('post-thumbs-small', 700, 500, true);
add_image_size('post-thumbs-smallest', 350, 250, true);
// add_image_size('fuzzy', 10, 10, true);



/*-----------------------------------------------------------------------------------*/
/* Custom Shortcodes!
/*-----------------------------------------------------------------------------------*/
add_shortcode('button', 'action_button_shortcode');
// [button title="this is the title" url="https://www.google.com"]
function action_button_shortcode($atts)
{
	extract(shortcode_atts(
		array(
			'title' => 'Title',
			'url' => '',
			'colour' => "",
			'align' => "left",
			'icon' => '',
		),
		$atts
	));
	return button($align, [$title, $url, $colour, null, null, $icon]);
}

/*-----------------------------------------------------------------------------------*/
/* Hide the Jetpack "nag" to upgrade to paid plans etc
/*-----------------------------------------------------------------------------------*/
add_filter('jetpack_just_in_time_msgs', '_return_false');


/*-----------------------------------------------------------------------------------*/
/* Reusable Functions
/*-----------------------------------------------------------------------------------*/
include_once(get_stylesheet_directory() . '/functions/button.php');
include_once(get_stylesheet_directory() . '/functions/buttons.php');
include_once(get_stylesheet_directory() . '/functions/blog_post_card.php');
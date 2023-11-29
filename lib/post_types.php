<?php

include_once('CPT.php');

/*
|--------------------------------------------------
| Projects
|--------------------------------------------------
*/

$projects = new CPT([
	'post_type_name'    => 'project',
	'singular'          => 'Project',
	'plural'            => 'Projects',
	'slug'              => 'projects'
], [
	'supports' => ['thumbnail', 'title']
]);

$projects->register_taxonomy(array(
	'taxonomy_name' => 'project_category',
	'singular' => 'Category',
	'plural' => 'Categories',
	'slug' => 'project-category'
));

// $projects->columns(array(
// 	'cb' => '<input type="checkbox" />',
// 	'title' => 'Title',
//     'name' => 'Name',
//     'website'  => 'Website',
// 	'date' => __('Date')
// ));

// $projects->populate_column('name', function($column, $post) {
// 	// gets post types acf field to display on all post types page
// 	echo get_field('name');
// });

// $projects->populate_column('website', function($column, $post) {
// 	// gets post types acf field to display on all post types page
// 	echo get_field('website');
// });

$projects->menu_icon("dashicons-hammer");

/*
|--------------------------------------------------
| Testimonials
|--------------------------------------------------
*/

$testimonials = new CPT(array(
	'post_type_name'    => 'testimonial',
	'singular'          => 'Testimonial',
	'plural'            => 'Testimonials',
	'slug'              => 'testimonials'
));

$testimonials->menu_icon("dashicons-format-quote");

$testimonials->columns(array(
	'cb' => '<input type="checkbox" />',
	'title' => 'Title',
    'quote' => 'Quote',
    'cite'  => 'Cite',
	'date' => __('Date')
));

$testimonials->populate_column('quote', function($column, $post) {
	// gets post types acf field to display on all post types page
	echo get_field('quote');
});

$testimonials->populate_column('cite', function($column, $post) {
	// gets post types acf field to display on all post types page
	echo get_field('cite');
});
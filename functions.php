<?php

/**
 * Indice
 * 1. Generales
 * 2. DIVI
 * 3. Otros
 */

function my_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

/* 1. Generales */
/* Activar rss para posts, galerias y productos */
function add_cpts_to_rss_feed($args)
{
	if (isset($args['feed']) && !isset($args['post_type']))
		$args['post_type'] = array('post', 'gallery', 'product');
	return $args;
}
add_filter('request', 'add_cpts_to_rss_feed');
/* FIN Generales */

/* 2. DIVI */
/* Ocultar el tipo de contenido Proyecto de Divi */
function mytheme_et_project_posttype_args($args)
{
	return array_merge($args, array(
		'public' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => false,
		'show_in_nav_menus' => false,
		'show_ui' => false
	));
}
add_filter('et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1);
/* FIN DIVI */

/* 3. Otros */
/* FIN Otros */
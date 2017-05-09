<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
					wp_get_theme()->get('Version')
					    );
}

add_action( 'wp_enqueue_scripts', 'yblass_dequeue', 19 );
function yblass_dequeue () {
	wp_dequeue_script( 'twentyseventeen-global' );
}

add_filter( 'body_class', 'yblass_body_classes', 11 );
function yblass_body_classes($classes) {
	if (is_single()) {
		$classes = array_filter($classes, function($class) { return $class != "has-sidebar"; } );
	}
	return $classes;
}

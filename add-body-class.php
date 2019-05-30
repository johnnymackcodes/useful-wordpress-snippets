<?php
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
	if ( is_archive() ) {
		$classes[] = 'blog';
	}

	if ( is_singular( 'post' ) ) {
		$classes[] = 'single';
	}

	return $classes;
}

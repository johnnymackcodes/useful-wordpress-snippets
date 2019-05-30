<?php
function custom_excerpt_length( $length ) {
	return $length;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
<?php
function register_shortcodes() {
	add_shortcode( 'shortcode-name', 'function-name' );
}

add_action( 'init', 'register_shortcodes' );
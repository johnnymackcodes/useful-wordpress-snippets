<?php

function getCustomPostType() {
	$type = 'custom-post-type-slug';
	$args = array(
		'post_type'   => $type,
		'post_status' => 'publish',
		'order'       => 'ASC',
		'showposts'   => - 1
	);

	$my_query      = new WP_Query( $args );
	$return_string = '';

	if ( $my_query->have_posts() ) {
		while ( $my_query->have_posts() ) : $my_query->the_post();
			$title            = get_the_title();
			$image            = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			$acf_custom_field = get_field( 'acf_field_slug' );
			$return_string    .= '<div class="new-div">' . $acf_custom_field . $title . $image . '</div>';
		endwhile;
	}

	$return_string .= '</div>';
	wp_reset_query();

	return $return_string;
}
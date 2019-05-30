<?php
function secondWednesday() {
	date_default_timezone_set( 'America/New_York' );
	$wednesday = date( 'l' );
	$date      = (int) date( 'j' );
	$hour      = (int) date( 'G' );
	if ( $date > 7 && $date <= 14 && $hour >= 8 && $hour < 15 && $wednesday === 'Wednesday' ) {
		$button_text = 'Button text';
		$status      = 'Status';
	} else {
		$button_text = 'Different Button Text';
		$status      = 'Different Status';
	}

	return '<div class="wait-status"><div class="info">Waiting list status<br /><a href="#" target="_blank">' . $button_text . '</a></div><div class="status"><span class="' . $status . '"></span></div></div>';
}
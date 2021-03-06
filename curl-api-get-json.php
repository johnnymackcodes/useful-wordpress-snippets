<?php
function getApiJson() {
	$curl = curl_init();

	$url = '';

	debug_to_console( $url );

	curl_setopt_array( $curl, array(
		CURLOPT_URL            => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING       => '',
		CURLOPT_MAXREDIRS      => 10,
		CURLOPT_TIMEOUT        => 30,
		CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST  => 'GET',
		CURLOPT_HTTPHEADER     => [
			'Cache-Control: no-cache',
		],
	) );

	$response = curl_exec( $curl );
	$err      = curl_error( $curl );

	curl_close( $curl );

	if ( $err ) {
		echo 'cURL Error #:' . $err;
	}

	$response = json_decode( $response, true );

	return $response['data'];
}
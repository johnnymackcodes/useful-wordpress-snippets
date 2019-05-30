<?php
function myscript() {
	if ( wp_script_is( 'jquery', 'done' ) ) {
		?>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.tag').closest('.tag-two').prepend('[html]');
            });
        </script>
		<?php
	}
}

add_action( 'wp_footer', 'myscript' );
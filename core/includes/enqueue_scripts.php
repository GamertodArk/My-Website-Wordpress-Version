<?php  
	function wpga_enqueue_scripts()
	{

		// Stylesheets
		wp_enqueue_style('main-stylesheet', CSS_URL . 'main_styles.css', false, '1.0', 'all');

		// Javascripts files
		wp_enqueue_script('main-script-file', JS_URL . 'main.js', null, '1.0', true );
		wp_enqueue_script('send_email_script', JS_URL . 'send_email_ajax.js', null, '1.0', true );

	}

	add_action('wp_enqueue_scripts', 'wpga_enqueue_scripts');
?>
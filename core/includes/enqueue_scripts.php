<?php  
	function wpga_enqueue_scripts()
	{
		// wp_enqueue_style('main-stylesheet', get_template_directory_uri() . CSS_URL . 'main-stylesheet.css');
		// wp_enqueue_scripts('wpga-main-stylesheet', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'wpga_enqueue_scripts');
?>
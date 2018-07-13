<?php  

	// Server constants
	define('TEMP_URL', dirname(__DIR__) . '\app\templates\\');

	// Client constants
	define('CSS_URL', get_template_directory_uri() . '/app/stylesheets/css/');
	define('JS_URL', get_template_directory_uri() . '/app/scripts/');
	define('IMG_URL', get_template_directory_uri() . '/app/img/');
	define('FAVICON_URL', get_template_directory_uri() . '/app/img/favicon/');

	// PHPMailer
	define('SMTP_SERVER_PORT', 465);
	define('SMTP_SERVER_SECURE', 'ssl');
	define('SMTP_SERVER_PASSWORD', '21042001');
	define('SMTP_SERVER_HOST', 'smtp.gmail.com');
	define('SMTP_SERVER_USERNAME', 'gamertodark@gmail.com');

	// Functions
	// include 'core/functions/email_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Freelance web developer, improve your business with an awesome web page">

	<meta charset="UTF-8">
	<title>Elvis Garcia - Web Developer</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo FAVICON_URL ?>apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo FAVICON_URL ?>apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo FAVICON_URL ?>apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo FAVICON_URL ?>apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo FAVICON_URL ?>apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo FAVICON_URL ?>apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo FAVICON_URL ?>apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON_URL ?>apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo FAVICON_URL ?>apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FAVICON_URL ?>android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON_URL ?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo FAVICON_URL ?>favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON_URL ?>favicon-16x16.png">
	<link rel="manifest" href="<?php echo FAVICON_URL ?>manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo FAVICON_URL ?>ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

<?php wp_head() ?>
</head>
<body>
	<header>
		<div id="lg_wrap" class="lg_wrap">
			<?php  
				$es_fl = '<img src="'. IMG_URL .'spain-flag.png" alt="Español">';
				$us_fl = '<img src="'. IMG_URL .'us-flag.png" alt="English">';

				if (isset($_GET['lg'])) {
					if (strtolower($_GET['lg']) == 'es') {

						// We are in the spanish version
						echo $es_fl;
						echo '<a href="?lg=en" class="lang_btn">'. $us_fl .'</a>';

					}elseif (strtolower($_GET['lg']) == 'en') {
						
						// We are in the english version
						echo $us_fl;
						echo '<a class="lang_btn" href="?lg=es">'. $es_fl .'</a>'; 

					}
				}else {
					echo $es_fl;
					echo '<a href="?lg=en" class="lang_btn">'. $us_fl .'</a>';
				}
			?>
		</div>
		<div class="header-overlay"></div>
		<div class="header_data">
			<img src="<?php echo IMG_URL ?>face.jpg" alt="Elvis Garcia" title="Elvis Garcia - desarrollador web">
			<!-- <h2>Elvis Garcia</h2> -->
			<!-- <p>Full Stack - Web Developer</p> -->
			<h2>
				<?php echo get_theme_mod('wpga_gen_text_name'); ?>
			</h2>
			<p>
				<?php echo get_theme_mod('wpga_gen_text_description'); ?>
			</p>
		</div>
	</header>
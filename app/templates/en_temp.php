<?php get_header(); ?>
	<main>
		<section class="section section-1">
			<div class="section-content">
				<h2>Who am I?</h2>
				<p>
 					<?php echo get_theme_mod('wpga_eng_text_1'); ?>	
 				</p>	
			</div>
		</section>

		<section class="section section-2">
			<div class="section-content">
				<h2>What can I do?</h2>
				<p>
					<?php
						$search = ['[', ']'];
						$replace = ['<', '>'];

						$text = str_replace($search, $replace, get_theme_mod('wpga_eng_text_2'));

						echo $text;
					?>
				</p>
				<div class="lists">
					<ul>
						<li>CSS3</li>
						<li>AJAX</li>
						<li>HTML5</li>
						<li>JavaScript</li>
						<li>Websockets</li>
					</ul>
					<ul>
						<li>PHP</li>
						<li>MySQL</li>
						<li>MongoDB</li>
						<li>NODE.JS</li>
						<li>Apache server</li>
					</ul>

				</div>
			</div>
		</section>
	</main>
<?php get_footer() ?>
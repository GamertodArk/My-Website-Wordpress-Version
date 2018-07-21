	<div class="form_modal">

		<?php  
			if (isset($_GET['lg'])) {
				if (strtolower($_GET['lg']) == 'es') {
					
					// We are is the Spanish Version
					$tl = 'Envíame un mensaje';
					$msg_1 = 'Tienes que llenar todos los campos';
					$msg_2 = 'Mensaje Enviado!';

				}elseif (strtolower($_GET['lg']) == 'en') {

					// We are in the English Version
					$tl = 'Send me a message';
					$msg_1 = 'All the fields must be filled';
					$msg_2 = '¡Message Sent!';

				}
			}else {

				// The defualt language is Spanish
				$tl = 'Envíame un mensaje';
				$msg_1 = 'Tienes que llenar todos los campos';
				$msg_2 = 'Mensaje Enviado!';
			}
		?>

		<div id="modal_form" class="modal_form">
			<h2><?php echo $tl; ?></h2>
			<p class="hide" id="error_msg"><?php echo $msg_1; ?></p>
			<p class="hide" id="msg_sent"><?php echo $msg_2; ?></p>

			<form action="">
				<input type="email" name="email" id="email_input" placeholder="Email">
				<textarea name="msg_content" id="msg_content" placeholder="Message"></textarea>
				<input id="send_mail_btn" type="button" value="Send">
			</form>
		</div>

		<div id="modal_btn" class="modal_btn">
			<p id="modal_btn_icon" class="mail"></p>
		</div>
	</div>

<footer>
	<div class="social_media">
		<span class="icon_wrapper">
			<a class="instagram" href="https://www.instagram.com/elvis.erikvan/">1</a>
		</span>

		<span class="icon_wrapper">
			<a class="twitter" href="https://twitter.com/elvisgarcia6">1</a>
		</span>

		<span class="icon_wrapper">
			<a class="github" href="https://github.com/GamertodArk">1</a>
		</span>
	</div>
	<p>
		<?php echo get_theme_mod('wpga_gen_text_footer') ?>
	</p>
</footer>


<?php wp_footer(); ?>

</body>
</html>
	<div class="form_modal">
		<div id="modal_form" class="modal_form">
			<h2>Send me a message</h2>
			<p class="hide" id="error_msg">All the fields must be filled</p>
			<p class="hide" id="msg_sent">¡Message Sent!</p>

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
	<p><strong>Elvis Garcia</strong> - Desarrollador web</p>
</footer>


<?php wp_footer(); ?>
<script src="<?php echo JS_URL ?>main.js"></script>
<script src="<?php echo JS_URL ?>send_email_ajax.js"></script>

</body>
</html>
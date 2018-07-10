
// Elements
var btn = document.getElementById('send_mail_btn');
var email = document.getElementById('email_input');
var message = document.getElementById('msg_content');
// var modal_msg = document.getElementById('modal_msg');
var error_msg = document.getElementById('error_msg');
var success_msg = document.getElementById('msg_sent');


btn.addEventListener('click', (e) => {
	e.preventDefault();


	if (email.value == '' || message.value == '') {
		error_msg.classList.remove('hide');
		success_msg.classList.add('hide');
	}else {
		error_msg.classList.add('hide');
		success_msg.classList.add('hide');

		//Create the json object
		var json = {
			'email': email.value,
			'message': message.value
		}

		var post_data = 'data=' + JSON.stringify(json);

		// Send data width ajax
		var http = XMLHttpRequest ? new XMLHttpRequest() : ActiveXObject('Microsoft.XMLHTTP');
		http.onreadystatechange = function () {
			if (http.readyState == 4 && http.status == 200) {
				if (http.responseText == 1) {	
					error_msg.classList.add('hide');
					success_msg.classList.remove('hide');
				}else {
					console.log(http.responseText);
				}
			}
		}
		http.open('POST', 'ajax.php');
		http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		http.send(post_data);
	}
});
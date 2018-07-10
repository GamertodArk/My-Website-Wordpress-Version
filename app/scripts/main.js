
// Elements
var modal_btn = document.getElementById('modal_btn');
var modal_form = document.getElementById('modal_form');
var modal_btn_icon = document.getElementById('modal_btn_icon');
// var lang_btn_1 = document.getElementsByClassName('lang_btn')[0];
// var lang_btn_2 = document.getElementsByClassName('lang_btn')[1];
var lg_wrap = document.getElementById('lg_wrap');

// Show and hide the contact form
var hide = 1;
modal_btn.addEventListener('click', () => {
	
	if (hide == 1) {
		hide = 0;
		modal_form.style.bottom = '40px';

		modal_btn_icon.classList.add('close');
		modal_btn_icon.classList.remove('mail');
	}else {
		hide = 1;
		modal_form.style.bottom = 'calc(-100% - 200px)';

		modal_btn_icon.classList.add('mail');
		modal_btn_icon.classList.remove('close');

	}

});

// Click on the lang button
var lg_hide = 1;
lg_wrap.addEventListener('click',function(event){
	if (lg_hide === 1) {
		lg_hide = 0;
		this.classList.add('show');
	}else {
		lg_hide = 1;
		this.classList.remove('show');
	}
});
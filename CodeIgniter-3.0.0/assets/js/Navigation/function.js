$(document).ready(function() {

	/* MAIN MENU */
	$('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	$('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	$('#menu-toggle').click(function() {
		$('#main-menu').slideToggle(300);
		return false;
	});

	$(window).resize(function() {
		if ($(window).width() > 700) {
			$('#main-menu').removeAttr('style');
		}
	});

	/* LOGIN MENU */

	$('.dropdown-menu').find('form').click(function(e) {
		e.stopPropagation();
	});
	

	$(function() {
		$('#login-form').submit(function() {
			$.post($(this).attr('action'), $(this).serialize(), function(json) {
				if (json.st == 0) {
					$('#error-message').html(json.msg);
				} else {
					$('#error-message').html("");

					location.reload();
				}
			}, 'json');
			return false;
		});
	});

});

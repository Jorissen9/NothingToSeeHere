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

	/* LOGIN MENU (deprecated)*/

	$('.dropdown-menu').find('form').click(function(e) {
		e.stopPropagation();
	});

	$('.selectpicker').selectpicker({

	});

	/* EVENT CONTROL PANEL */

	$("#AddEventForm").hide();

	$("#AddEventButton").click(function() {

		var visible = $("#AddEventForm").is(":visible");

		if (visible) {
			$("#AddEventButton").attr("value", "Add New Event +");
			$("#AddEventButton").css("color", "#eee");
		} else {
			$("#AddEventButton").attr("value", "Add New Event -");
			$("#AddEventButton").css("color", "#FF2B06");
		}

		$("#AddEventForm").slideToggle(500);

	});

});

function ChangeHeader() {
	document.getElementById("SignIn").innerHTML = 'Sign Out';
	document.getElementById("SignIn").setAttribute("href", "forum/#/entry/signout/");
	document.getElementById("SignUp").innerHTML = 'Name';
}


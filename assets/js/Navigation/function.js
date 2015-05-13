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


});

function changeHeader()
{
	document.getElementById("SignIn").innerHTML = 'Sign Out';
	document.getElementById("SignIn").setAttribute("href", "forum/#/entry/signout/");
		
	document.getElementById("SignUp").innerHTML = 'Name';
}

$(function(){
$('#Form_SignIn').click(function() {
	e.preventDefault();
	alert("test");
		$.ajax({
			
		url: '/NothingToSeeHere/vanilla/index.php?p=/profile.json',
		
  		success: function() {
  		  	
			this.changeHeader();
		}
		

		});
	});  

});
/*$.ajax({

	url : 'http://localhost/NothingToSeeHere/vanilla/index.php?p=/profile.json',
	dataType : 'json',
	success : function() {
		alert('success');
		//document.getElementById("SignIn").innerHTML = 'Sign Out';
		if (json_object.hasOwnProperty('profile')) {
			//do struff
		}

	},
	error : function() {
		alert('failure');
		// check status && error
	}

});


 $.ajax({
 url:'http://localhost/NothingToSeeHere/vanilla/applications/dashboard/js/profile.js',
 dataType: 'json',
 async: false,
 cache: false,
 success: function(profile) {
 if (profile) {
 alert("WIN");
 } else {
 alert("LOSS");
 }
 }
 });*/

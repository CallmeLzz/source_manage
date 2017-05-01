$(document).ready(function() {
	$(".lms_search_toggle").click(function() {
		$('.lms_search_wrapper').slideToggle(200);
	});
	
	$('.scrollToTop').on("click",function(){
			$('html, body').animate({scrollTop : 0}, 800);
			return false;
		});
	}
);

jQuery(document).ready(function($) {
	"use strict";
	$('#mailchimp_subscribe').submit(function() {
		var email = $("#subscribe-email").val();
		if (!validEmail(email)) {
			$("#subscribe-message").html('Please make sure you enter a valid email address.');
		}
		return false;
	});
	
	function validEmail(email) {
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		return pattern.test(email);
	}
	
	$(window).scroll(function() {
		var width = $(document).width();
		if (width < 991) {
			if ($(window).scrollTop() > 30) {
				$('#lms_header').addClass('lms_mobile_header');
				$('#lms_header').removeClass('lms_fixed_header');
			} else {
				$('#lms_header').removeClass('lms_mobile_header');
			}
		}
		else {
			if ($(window).scrollTop() > 30) {
				$('#lms_header').addClass('lms_fixed_header');
			} else {
				$('#lms_header').removeClass('lms_fixed_header');
			}
		}
	});

});
	
	
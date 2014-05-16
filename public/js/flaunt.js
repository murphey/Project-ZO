/*
	Flaunt.js v1.0.0
	by Todd Motto: http://www.toddmotto.com
	Latest version: https://github.com/toddmotto/flaunt-js
	
	Copyright 2013 Todd Motto
	Licensed under the MIT license
	http://www.opensource.org/licenses/mit-license.php

	Flaunt JS, stylish responsive navigations with nested click to reveal.
*/

;(function($) {

	// DOM ready
	$(function() {
		
		// Append the mobile icon nav
		// $('.navbar-inner').append($('<div class="nav-mobile"></div>'));
		
		// Add a <span> to every .nav-item that has a <ul> inside
		$('.li-nav').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('#uitklappen').click(function(){

			$('.nav-list').slideToggle();

		

		});
	
		

	
		// Dynamic binding to on 'click'
		$('.nav-list').on('click', '.nav-click', function(){
		
			// Toggle the nested nav
			$(this).siblings('.nav-submenu').slideToggle()();
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav -arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);
$(function(){
	var pull = $('#uitklappen');
		menu = $('.navbar-inner ul');
		menuHeight = menu.height();

		$(pull).on('click', function(e){
			e.preventDefault();
/*			menu.slideToggle();
*/			

		});

		$(window).resize(function(){
var w = $(window).width();
if(w > 320 && menu.is(':hidden')){
	menu.removeAttr('style');

}
});
		});

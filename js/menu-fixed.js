$(document).ready(function(){
	var altura = $('#hader-main').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('#hader-main').addClass('menu-fixed');
		} else {
			$('#hader-main').removeClass('menu-fixed');
		}
	});

});
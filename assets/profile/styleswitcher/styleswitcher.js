$(document).ready(function($) {
	
	$("#no-parallax" ).click(function()		{ $('.parallax').each(function(){ jQuery(this).addClass('no-parallax') }); });
	$("#yes-parallax" ).click(function()		{ $('.parallax').each(function(){ jQuery(this).removeClass('no-parallax') }); });

	$("#lemon" ).click(function()		{ $("#colors" ).attr("href", "colors/lemon.css" ); })
	$("#orange" ).click(function()		{ $("#colors" ).attr("href", "colors/orange.css" ); });
	$("#blue" ).click(function()			{ $("#colors" ).attr("href", "colors/blue.css" );	});
	$("#navy-blue" ).click(function()	{ $("#colors" ).attr("href", "colors/navy-blue.css" ); });
	$("#red" ).click(function()			{ $("#colors" ).attr("href", "colors/red.css" ); });
	$("#yellow" ).click(function()		{ $("#colors" ).attr("href", "colors/yellow.css" ); });
	$("#pink" ).click(function()			{ $("#colors" ).attr("href", "colors/pink.css" ); });
	$("#violet" ).click(function()		{ $("#colors" ).attr("href", "colors/violet.css" ); });
	
	$('.color-switcher li a').click(function(e){
		$(this).parent().parent().find('a').removeClass('active');
		$(this).addClass('active');
	})
	
	$('.parallax-switcher li a').click(function(e){
		$(this).parent().parent().find('a').removeClass('active');
		$(this).addClass('active');
	})
	
	$('#style-selector').animate({
		right: '-205px'
	});

	$('#style-switcher a.close').click(function(e){
		e.preventDefault();
		var div = $('#style-switcher');
		if (div.css('right') === '-210px') {
			$('#style-switcher').animate({
				right: '0'
			});
			$(this).removeClass('icon-chevron-left');
			$(this).addClass('icon-chevron-right');
		} else {
			$('#style-switcher').animate({
				right: '-210px'
			});
			$(this).removeClass('icon-chevron-right');
			$(this).addClass('icon-chevron-left');
		}
	})
	
})
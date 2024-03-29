$(document).ready(function (){
  
	"use strict";
	
	/* Page Loader
	-----------------------------------------------------*/
	
	$(window).load(function() {
	  $('#page-loader .loader').fadeOut(300);
	  $('#page-loader').delay(500).fadeOut(800);
	});
	
	/* Smooth Scrolling
	-----------------------------------------------------*/
	
	$.localScroll({
		offset: -70
	});
	
	/* Responsive Nav
	-----------------------------------------------------*/
  
	var navigation = responsiveNav("#nav",{ // Selector: The ID of the wrapper
		animate: true, // Boolean: Use CSS3 transitions, true or false
    	transition: 400, // Integer: Speed of the transition, in milliseconds
		label: "", // String: Label for the navigation toggle
		insert: "after", // String: Insert the toggle before or after the navigation
		customToggle: "", // Selector: Specify the ID of a custom toggle
		openPos: "static", // String: Position of the opened nav, relative or static
		jsClass: "js", // String: 'JS enabled' class which is added to <html> el
		init: function(){}, // Function: Init callback
		open: function(){}, // Function: Open callback
		close: function(){} // Function: Close callback
	});
	
	/* Intro & Home
	-----------------------------------------------------*/
	
	$('#home').css({'height': ($(window).height()) + 'px'});
	$(window).resize(function() {
	  $('#home').css({'height': ($(window).height()) + 'px'});
	});
	
	var introHeight = ($('#intro').outerHeight());
	var navigationHeight = ($('#navigation').outerHeight());
	
	var topHeight = introHeight+navigationHeight+1;
	
	$('#home').css({'margin-top': -(introHeight+1) + 'px'});
	$(window).resize(function() {
	  $('#home').css({'margin-top': -(introHeight+1) + 'px'});
	})
	
	$('.headings ul.slides > li').css({'margin-top': (($(window).height())/2) + 'px' });	
	$(window).resize(function() {
	  $('.headings ul.slides > li').css({'margin-top': (($(window).height())/2) + 'px' });	
	});
	
	var pinfoHeight = $('.project-info').outerHeight();
	
	/* Sticky Nav
	-----------------------------------------------------*/
	
	var stickyNavTop = $('#navigation').offset().top;  
	  
	var stickyNav = function() {  
	  var scrollTop = $(window).scrollTop();  
	  
	  if (scrollTop > stickyNavTop) {   
		  $('#navigation').addClass('sticky');
	  } else {  
		  $('#navigation').removeClass('sticky');  
	  }  
	};  
	 
	stickyNav();  
	  
	$(window).scroll(function() {  
		stickyNav();  
	}); 
		
	
	/* Home Slider (Flexslider)
	-----------------------------------------------------*/
		
	$('.flexslider').flexslider({  
	  namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
	  selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
	  animation: "slide",              //String: Select your animation type, "fade" or "slide"
	  easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	  direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
	  reverse: false,                 //{NEW} Boolean: Reverse the animation direction
	  animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	  smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode 
	  startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
	  slideshow: false,                //Boolean: Animate slider automatically
	  slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	  animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
	  initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
	  randomize: false,               //Boolean: Randomize slide order
	   
	  // Usability features
	  pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	  pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	  useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
	  touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
	  video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
	   
	  // Primary Controls
	  controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	  directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
	  prevText: "",           //String: Set the text for the "previous" directionNav item
	  nextText: "",               //String: Set the text for the "next" directionNav item
	   
	  // Secondary Navigation
	  keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
	  multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
	  mousewheel: true,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
	  pausePlay: false,               //Boolean: Create pause/play dynamic element
	  pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
	  playText: 'Play',               //String: Set the text for the "play" pausePlay item
	   
	  // Special properties
	  controlsContainer: "",          //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
	  manualControls: "",             //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
	  sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
	  asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
	   
	  // Carousel Options
	  itemWidth: 0,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
	  itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
	  minItems: 0,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
	  maxItems: 0,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
	  move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
									   
	  // Callback API
	  start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
	  before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
	  after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
	  end: function(){},              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
	  added: function(){},            //{NEW} Callback: function(slider) - Fires after a slide is added
	  removed: function(){}   
	});
	
	/* Defalut (bxSlider)
	-----------------------------------------------------*/
	
	$('.bx-slider').bxSlider({
		mode: 'horizontal',
		touchEnabled: true,
		oneToOneTouch: true
	});
	
	/* Qotes Slider (bxSlider)
	-----------------------------------------------------*/
	
	$('.quotes-slider').bxSlider({
		mode: 'fade',
		touchEnabled: true,
		oneToOneTouch: true,
		pagerCustom: '#quotes-pager',
		controls: false
	});
	
	/* Projects Feed
	-----------------------------------------------------*/
	
	$('.projects-feed li').mouseenter(function() {
		$(this).delay(160).animate({'top': '-' + pinfoHeight/2 + 'px'},160);
		$(this).children('a').children('.project-info').animate({'margin-bottom': '-' + pinfoHeight + 'px'},160);
	}).mouseleave(function() {
		$(this).animate({'top': 0 + 'px'},160);
		$(this).children('a').children('.project-info').animate({'margin-bottom': 0 + 'px'},160);
	})
	
	/* Ajax Project Details
	-----------------------------------------------------*/
	
	var toLoad;
	
	function loadContent() {　
	  $('.project-content').load(toLoad,showNewContent());
　 }　
	function showNewContent() {
	  $('.project-content').slideDown(500);
	}
	
	toLoad = $('.projects-feed li:first-child a').attr('href');　
	$('.project-content').show(0,loadContent);
	$('.project-content').hide(0);
	
	$('.project-content').show(0,loadContent);
	$('.project-content').hide(0);
	
	$('.projects-feed li a').click(function() {
		$('html, body').animate({scrollTop:$('#works').position().top}, 500);
		toLoad = $(this).attr('href');　
		$('.project-close').delay(500).fadeIn(500);
		$('.project-content').slideUp(500,loadContent);
		$('.project-loader').fadeIn(500);　
		return false;
	});
	
	$(".project-close").click(function() {
		$('.project-content').slideUp(500);
		$(this).fadeOut(500);
		$('html, body').animate({scrollTop:$('#works').position(-200).top-70},1000);
	});

	/* Form Fields
	-----------------------------------------------------*/
		
	$('.form-field input').on('focus', function() {
		$(this).prev('.field-icon').addClass('active');
	})
	
	$('.form-field input').on('focusout', function() {
		$(this).prev('.field-icon').removeClass('active');
	})
	
	/* Contact Form
	-----------------------------------------------------*/
	
	var $contactform  = $('#contact-form');

    // Validate form on keyup and submit
    $contactform.validate({
        rules: {
            name: {
                required    : true,
                minlength   : 1
            },
            email: {
                required    : true,
                email       : true
            },
            message: {
                required    : true,
                minlength   : 1
            }
        },
        messages: {
            name: {
                required    : "Please enter your name.",
                minlength   : jQuery.format("Your name needs to be at least {0} characters")
            },
            email: {
                required    : "Please enter your email address.",
                minlength   : "You entered an invalid email address."
            },
            message: {
                required    : "Please enter a message.",
                minlength   : jQuery.format("Enter at least {0} characters")
            }
        },
    });

    // Send the email
    $contactform.submit(function(){
        var $success      = '<strong>Success!</strong> Your message was sent.';
	    var $error      = '<strong>Error!</strong> Your message was not sent - try again later...';
      	var response;
        if ($contactform.valid()){
            $.ajax({
                type: "POST",
                url: "php/contact-form.php",
                data: $(this).serialize(),
                success: function(msg) {
                    if (msg === 'SEND') {
                        response = '<div class="alert alert-success">'+ $success +'</div>';
                    }
                    else {
                        response = '<div class="alert alert-error">'+ $error +'</div>';
                    }
                    $(".alert-error,.alert-success").remove();
                    $contactform.prepend(response);
                }
             });
            return false;
        }
        return false;
    });
	
	/* Animations
	-----------------------------------------------------*/
	
	jQuery('.animated').appear();

	jQuery(document.body).on('appear', '.fade-in', function() {
		jQuery(this).each(function(){ jQuery(this).addClass('fade-in-animation') });
	});
	
	jQuery(document.body).on('appear', '.zoom-in', function() {
		jQuery(this).each(function(){ jQuery(this).addClass('zoom-in-animation') });
	});
	
	jQuery(document.body).on('appear', '.bounce-in', function() {
		jQuery(this).each(function(){ jQuery(this).addClass('bounce-in-animation') });
	});
	
	/* Accordion
	-----------------------------------------------------*/

	 $(function() {
		$(".accordion").accordion({
			collapsible: true
		});
	 });
	 
	/* Tabs
	-----------------------------------------------------*/
	
	$(function() {
	  $(".tabs").tabs()
	});
	 
	 /* Parallax
	-----------------------------------------------------*/
	
	$('.parallax_background_01').parallax("50%", 0.3);
	$('.parallax_background_02').parallax("50%", 0.2);
	$('.parallax_background_03').parallax("50%", 0.15);
	$('.parallax_background_04').parallax("50%", 0.3);
	
	/* Responsive Videos
	-----------------------------------------------------*/

	$(function(){
	  $('body').fitVids();
	});
	

});

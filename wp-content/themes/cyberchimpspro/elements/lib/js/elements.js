/**
 * Elements JS
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

/*	Boxes element make all the same height and make whole box a link */
jQuery(document).ready(function($) {
	
	if($(window).width() > 767) {
		setTimeout(function() {
		
		$('#boxes-container .box').css('height', $('#boxes-container').height() - 20)
		}, 500 );
	}
	
	$('#boxes-container .boxes .box').each(function(){
		var url = $(this).children('.box-link').attr('href');
		$(this).hover(function(){
			if(url && url != '')
			$(this).css('cursor', 'pointer');
		},
		function(){
			$(this).css('cursor', 'default');
		});
		$(this).click(function(){
			if(url && url != '')
			window.location = url;
		})
	});

});

function mycarousel_initCallback(carousel)
{
	// Disable autoscrolling if the user clicks the prev or next button.
	carousel.buttonNext.bind('click', function() {
		carousel.startAuto(0);
	});

	carousel.buttonPrev.bind('click', function() {
		carousel.startAuto(0);
	});

	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
};

/*	Initiating jcarousel while page is ready	*/
jQuery(document).ready(function() {
	jQuery('#mycarousel').jcarousel({
		vertical: true,
		auto: 2,
		wrap: 'last',
		initCallback: mycarousel_initCallback
	});
});

/* ************** JS for featured post element *************** */

jQuery(document).ready(function() 
{
jQuery('#featured-post ul li:first').show();

jQuery('#featured-list ul li').click(function(e) 
	{ 
		var id = jQuery(this).attr('id');
		jQuery('#featured-post li').css("display", "none");
		jQuery('#featured-post li.' + id).fadeIn('slow');
		
	});
});

/* ********** JS for carousle starts **************** */
jQuery(document).ready(function ($) {

	// Initializing elastislide
	$("#carousel").elastislide({
		imageW 		: 140,
		margin		: 10,
		minItems	: 2
	});
	
	// Fix of image stacking issue in small screen
	$(window).triggerHandler('resize.elastislide');
	$('#carousel').elastislide({
		imageW : 140
	});
	$(window).triggerHandler('resize.elastislide');
	 
});
/* ********** JS for carousle ends **************** */
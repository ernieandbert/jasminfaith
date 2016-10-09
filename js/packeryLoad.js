$(document).ready(function($) {
	var container = document.querySelector('.packery');
	var pckry = new Packery( container, {
	    itemSelector: '.item',
	    columnWidth: '.grid-sizer'
	});

	 $('.packery img').bind('load', function() {
            //when an image inside the packery class loads loads trigger pckry to re layout the images
            pckry.layout();
        });
});
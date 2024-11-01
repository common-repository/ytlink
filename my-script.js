var myOptions = {
	// you can declare a default color here,
 	// or in the data-default-color attribute on the input
	defaultColor: false,
	// a callback to fire whenever the color changes to a valid color
	change: function(event, ui){
		jQuery('img[id*="picol_"]').attr('src',function(i,e){
		  return e.replace(/=.*$/,"=" + ui.color.toString().replace("#","")); 
		})
		jQuery('input[name="pfeil"]').val(ui.color.toString().replace("#",""));		
	},
	// a callback to fire when the input is emptied or an invalid color
	clear: function() {},
	// hide the color picker controls on load
	hide: true,
	// show a group of common colors beneath the square
	// or, supply an array of colors to customize further
	palettes: true
	
}; 											

jQuery(document).ready(function($){
	$('.my-color-field').wpColorPicker(myOptions);
});

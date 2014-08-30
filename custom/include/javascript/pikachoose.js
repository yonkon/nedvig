/*    8/14/2009
		PikaChoose
	Jquery plugin for photo galleries
    Copyright (C) 2009 Jeremy Fry

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
*/

$(document).ready(
	function (){
		$(".pikame").PikaChoose();
	});
jQuery.iPikaChoose = {
	build : function(user_options)
	{
		var user_options;
		var defaults = {
			thumb_width: 50,
			thumb_height: 42,
		};
		//this div is used to make image and caption fade together
		var main_div = $("#pika_main");
		var main_img = main_div.children("#pika_subdiv").children("img");				
		$(main_img).css(
				{
					margin:"0 auto",
					border:"2px solid #222"
				});
		var caption_div = main_div.children("#pika_caption");				
		return jQuery(this).each(
			function() {
				//bring in options
				var options = jQuery.extend(defaults, user_options);
				//Set styles
				$(jQuery(this).children('li')).css(
				{
					margin:"5px",
					float: "left",
					border:"2px solid #222",
					position:"relative",
					overflow:"hidden"
				});
				// grab our images
				var images = jQuery(this).children('li').children('img');
				//hide the images so the user doesn't see crap
				images.fadeOut(1);
				
				//save our list for future ref
				var ulist = jQuery(this);
				images.each(LoadImages);
				//start building structure
				
								
				function LoadImages()
				{
					jQuery(this).bind("load", function()
					{
						//had to make a seperate function so that the thumbnails wouldn't have problems
						//from beings resized before loaded, thus not h/w
						
						//delete hidden image to clean up things.
						jQuery(this).next('img').remove();
						var w = jQuery(this).width();
						var h = jQuery(this).height();
						if(w===0){w = jQuery(this).attr("width");}
						if(h===0){h = jQuery(this).attr("height");}
						//grab a ratio for image to user defined settings
						var rw = options.thumb_width/w;
						var rh = options.thumb_height/h;
						
						//determine which has the smallest ratio (thus needing
						//to be the side we use to scale so our whole thumb is filled)
						if(rw<rh){
							//we'll use ratio later to scale and not distort
							var ratio = rh;
							var left = ((w*ratio-options.thumb_width)/2)*-1;
							left = Math.round(left);
							//set images left offset to match
							jQuery(this).css({left:left});
						}else{
							var ratio = rw;
							//you can uncoment this lines to have the vertical picture centered
							//but usually tall photos have the focal point at the top...
							//var top = ((h*ratio-options.thumb_height)/2)*-1;
							//var top = Math.round(top);
							var top = 0;
							jQuery(this).css({top:top});
						}
						//use those ratios to calculate scale
						var width = Math.round(w*ratio);
						var height = Math.round(h*ratio);
						jQuery(this).css("position","relative");
						jQuery(this).width(width).height(height);
						var imgcss={
							width: width,
							height: height
						};
						jQuery(this).css(imgcss);					
						jQuery(this).hover(
							function(){jQuery(this).fadeTo(250,1);},
							function(){if(!jQuery(this).hasClass("pika_selected")){jQuery(this).fadeTo(250,0.5);}}
						);
						jQuery(this).fadeTo(250,0.5);	
						
						if(jQuery(this).hasClass('pika_first')){
							jQuery(this).trigger("click",["auto"]);
						}
						
					});
				
					//clone so the on loads will fire correctly
					var newImage = jQuery(this).clone(true).insertBefore(this);
					
					jQuery(this).hide();
	
					//reset images to the clones
					images = ulist.children('li').children('img');
				}
			function activate()
			{
				//sets the intial phase for everything
				
				//image_click is controls the fading
				images.bind("click",image_click);
				//css for the list
				var licss = {
					width: options.thumb_width+"px",
					height: options.thumb_height+"px",
					"list-style": "none",
					overflow: "hidden"
				};
				images.each(function(){
					jQuery(this).parent('li').css(licss);
					//fixes a bug where images don't get the correct display after loading
					if(jQuery(this).attr('complete')==true && jQuery(this).css('display')=="none")
					{
						jQuery(this).css({display:'inline'});
					}
				});
			}//end activate function

			function image_click(event, how){
					//catch when user clicks on an image 
					
					
					image_source = jQuery(this).attr("src");
					
					var image_link = jQuery(this).attr("ref");
					var image_caption = jQuery(this).next("span").html();
								
					//fade out the old thumb
					images.filter(".pika_selected").fadeTo(250,0.5); 
					images.filter(".pika_selected").removeClass("pika_selected"); 
					//fade in the new thumb
					jQuery(this).fadeTo(250,1);
					jQuery(this).addClass("pika_selected");
					//fade the old image out and the new one in
					caption_div.fadeTo(500,0,function(){
						caption_div.html(image_caption);
						caption_div.fadeTo(500,1);
					});

					main_img.fadeTo(500,0,function(){
						
						//make the image fade in on load, which should hopefully get rid of any jumping
						main_img.unbind('load');
						main_img.bind('load',function()
 						{
							main_img.fadeTo(500,1)
						});
						main_img.attr("src",image_source);
					});
			}//end image_click function
			
			activate();

		});//end return this.each
	}//end build function
	
	//activate applies the appropriate actions to all the different parts of the structure.
	//and loads the sets the first image
};//end jquery.ipikachoose		
jQuery.fn.PikaChoose = jQuery.iPikaChoose.build;
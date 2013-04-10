$(window).load(function() {    

	var theWindow        = $(window),
	    $bg              = $("#bg"),
	    aspectRatio      = $bg.width() / $bg.height();
	    			    		
	function resizeBg() {
		console.log("resize");
		if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
		    $bg
		    	.removeClass()
		    	.addClass('bgheight');
		if (theWindow.width() < $bg.width() ) {
		  	var decalage = ($bg.width() - theWindow.width())/2;
			
			 $bg.css('margin-left',-decalage+"px")
		}
		
		} else {
		    $bg
		    	.removeClass()
		    	.addClass('bgwidth');
		}
					
	}
	                   			
	theWindow.resize(function() {
		resizeBg();
	}).trigger("resize");

});
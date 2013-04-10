
			  
			 $(document).ready(function() {
			  console.log("Dom ready");
 			  active=true;
			  lastItem =0;
			  $('#title').hide();
			  
			});
			$(document).keydown(function (e) {
			  var keyCode = e.keyCode || e.which,
				  arrow = {left: 37, up: 38, right: 39, down: 40 };
			
			  switch (keyCode) {
				case arrow.left:
				  //..
					
					//prev current diaporama if diaporama
				break;
				case arrow.up:
				  //..
			  		console.log("--------> key up pressed ");
				break;
				case arrow.right:
				  //..
			  		console.log("right ");
					//next current diaporama if diaporama
				break;
				case arrow.down:
				  //..
			  		console.log("--------> key down pressed");
				break;
			  }
			});
/*
			$(window).scroll(function () {
				
		  		//console.log("scrollTop"+$(window).scrollTop());
				//console.log("hauteur section"+$('.section').height());
			
				
				if(active)
				{
				var h = $('.section').height();
				var sT = $(window).scrollTop();
				var ratio = sT/h;
				
				var percentage = ratio - Math.floor(ratio); 
				    currentItem = Math.ceil(ratio);
				if(lastItem ==0 && currentItem >1)
				{
					lastItem=currentItem;
				}
				
					console.log("currentItem =>"+currentItem);
					console.log("ratio =>"+ratio);
					console.log("percentage =>"+percentage);
					console.log("last =>"+lastItem);
				
				
				
				if(currentItem > lastItem && percentage<0.60 && percentage>0.02 && active)
				{
					
					console.log("go down");
					active=false;
					
					var sens=1;
                 
					
                    $('html, body').stop().animate(
					{
                        scrollTop: ((currentItem)*(h))
                    },
					{
                        complete: function(){active=true; lastItem=currentItem; console.log("new currentItem"+lastItem);console.log("------------------------")}
                    },
					1500,
					'easeInOutExpo'
					);
					
					//stop event
					//re event after animate
                    
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                   
                }
				
				else if( ratio < lastItem &&  active )
				{
					console.log("goBacward");
					
					
					var sens=1;
					active=false;
                 	currentItem--;
					
                    $('html, body').stop().animate(
					{
                        scrollTop: ((currentItem)*(h))
                    },
					{
                        complete: function(){active=true;lastItem=currentItem;console.log("new currentItem up"+currentItem);console.log("------------------------")}
                    },
					1500,
					'easeInOutExpo'
					);
				}
				
				}
				
				
    		});
			*/
            $(function() {
                $('nav a').bind('click',function(event){
					
             		 console.log(" dazdaz  ");
                    active=false;
                    var $anchor = $(this);
					var $title =  $anchor.attr('href').replace('#', '') ;
					
					if($title!="homePage" && $title!="nogo" )
					{
             	
			  
			 		$('#title p').text($title);
			  
			  		$('#title').fadeIn(200);
			 	
            
					}
			  		
					
                    $(' body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    },{
                        complete: function(){active=true;writeTitle($title);}
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
			function writeTitle($titleIn) 
			{
				
				if($titleIn!="homePage"  && $titleIn!="nogo")
				{
             		 console.log("----> write  "+$titleIn);
			  
			  
			 		$('#title').delay(800).fadeOut('slow');
            
				}
			}
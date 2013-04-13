// JavaScript Document
var itemMenu =[];
var open = true;

var isPlaying = false;
var firstTime = true;
var timer;

$(document).ready(function(){
	 
	var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    if (!mobile) {  
    console.log('notmobile');
	getMenuItems();
	setRolls();
	setHoverHandler();
	}
  
 });
 
function setRolls() {


 $("nav a[class^=itemMenu]").hover(function(){
	$("img", this).stop().animate({top:"-90px"},{queue:false,duration:150});
	},function(){
		$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
		});
}	

//------------DOM select---------------------
 function getMenuItems() {
    $('nav a[class^=itemMenu]:not(#logo)').each(function() {
	itemMenu.push($(this));
	});
	
	
	
}
 function setHoverHandler() {
   
	
	
	 $("nav").mouseenter(function(){
		showMenu();
		});
	 
		
		$("nav").mouseleave(function(){
		  hideMenu();
		});
		
		
		
	
	
	
	
}

//------------INTRO---------------------
function beginTimer() {
	open=true;
	timer  = $.timer(hideMenu);
	timer.once(3000);
	
	
	
	
}
 
 
 //------------motion---------------------
function hideMenu() {
	
	for(var i = itemMenu.length - 1; i >= 0; --i)
		{
		 var currentI = itemMenu[i];
		 var time=(1/(i+1)) * 300;
		
		currentI.animate({
			opacity: 0
		  }, time, function() {
			// Animation complete.
			
		  });
		}
	
		 console.log(" hideMenu menu ");
	
	open=false;
	isPlaying=false;
}


function showMenu() {
	
	 isPlaying=true;
	 
	if(!open)
	{
     console.log(" show menu ");
			$('nav').width(544);
	 for(var i = 0; i <= itemMenu.length-1; ++i)
		{
		 var currentI = itemMenu[i];
		 var time=(1/(i+1)) * 1000;
		
		currentI.animate({
			opacity: 1
		  }, 5, function() {
			// Animation complete.
			currentI.show();
			
		  });
		}
	
	}
	open=true;
	isPlaying=false;
	
	//$('nav').width(540);
}
 
 
 
 //------------ROLLOVERS ---------------

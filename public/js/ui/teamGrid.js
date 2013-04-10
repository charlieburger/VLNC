// JavaScript Document
var membersTeam =[];


$(document).ready(function(){
	 
	getTeamMembers();
	 
	  setRollsTeam();
	
	
	
  
 });
 
function setRollsTeam() {
	$('.member').hover(RollOverMember,RollOutMember);
}	

//------------DOM select---------------------
 function RollOverMember() {
	 
	 var currentMember = $(this, this);
	 	currentMember.css('overflow', "visible");
	 	currentMember.css('z-index', "999");
	var img =currentMember.children("a").children("img");
    var src1= img.attr('src'); // initial src
    var newSrc = src1.substring(0, src1.lastIndexOf('.'));; // let's get file name without extension
    
        img.attr('src', newSrc+ '_over.' + /[^.]+$/.exec(src1)); //last part is for extension   
    
		
		 $('.member').each(function() {
			other = $(this);
			
			 if(other!=currentMember)
			 { 
			 $(this).css('z-index', "999");
			 $(this).css('opacity', "0.4");
			 }
			
		});
		currentMember.css('opacity', "1");
		
		/*	
		$(this, this).animate({
			left: '+=50',
			overflow:show;
		  }, 200, function() {
			// Animation complete.
		});*/
		
 }
  function RollOutMember() {
	   
	 var currentMember = $(this, this);
	var img =currentMember.children("a").children("img");
    var src1= img.attr('src'); // initial src
    var newSrc = src1.substring(0, src1.lastIndexOf('_over.'));; // let's get file name without extension
    
    	img.attr('src', newSrc + '.' + /[^.]+$/.exec(src1)); currentMember.css('z-index', "888");
			 currentMember.css('opacity', ".4");
			 currentMember.css('overflow', "hidden");
 }

//------------DOM select---------------------
 function getTeamMembers() {
	 $('.member').each(function() {
		membersTeam.push($(this));
		
	
		});
}
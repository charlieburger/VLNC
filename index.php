<?php
	class bg
	{
    var $idx= null;
    var $author= "";
    var $type= "";
    var $url="";
	}

	/* 
	$bg1=new bg(); 
	
	$bg1->idx = 1;
	$bg1->author = "Gus Malluceli";
	$bg1->type = "jpg";
	$bg1->url = "01.jpg";
		
	$bg2=new bg(); 
	
	$bg2->idx = 1;
	$bg2->author = "Romain Montagut";
	$bg2->type = "jpg";
	$bg2->url = "02.jpg";*/
	$bg3 = new bg();
	
	$bg3->idx = 2;
	$bg3->author = "WE ARE A HAPPY (and violent) FAMILY";
	$bg3->type = "jpg";
	$bg3->url = "team.jpg";

  $bgs = array($bg3); // array of filenames

  $i = rand(0, count($bgs)-1); // generate random number size of the array
  $selectedBg = "public/img/wp/".$bgs[$i]->url; // set variable equal to which random filename was chosen
  $selectedBgAuthor = $bgs[$i]->author; // set variable equal to which random filename was chosen
?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head>
	<meta name="viewport" content="user-scalable=no,width=device-width" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    
	<title>VLNC COLLECTIVE : IDEA MAKERS</title>
    <link href='http://api.tiles.mapbox.com/mapbox.js/v0.6.5/mapbox.css' rel='stylesheet' />
    
    <link rel="stylesheet" type="text/css" href="public/css/styleJSslider.css" />
    <link rel="stylesheet" media="all" href="public/css/style.css" />
	<link rel="stylesheet" media="(max-width: 640px)" href="public/css/style640.css" />
    <link href='public/js/wax/theme/controls.css' rel='stylesheet' type='text/css' />
	 <link rel="stylesheet" type="text/css" href="public/js/shadowbox/shadowbox.css">
   
    <script src='public/js/wax/ext/modestmaps.min.js' type='text/javascript'></script>
    <script src='public/js/wax/dist/wax.mm.js' type='text/javascript'></script>
  
    <!-- general-->
    <script src="public/js/jquery.min.js"></script>	
    <script type='text/javascript' src='public/js/queryLoader.js'></script>
    <script src="public/js/jquery.timer.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23909896-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
    <!-- plug in-->	
    <script type="text/javascript" src="public/js/shadowbox/shadowbox.js"></script>
    <script type="text/javascript">Shadowbox.init({
    handleOversize:     "drag",
    handleUnsupported:  "remove",
    autoplayMovies:     false,
	viewportPadding: 0,
	animSequence:"wh"
	});
	
    </script>
    <script src='http://api.tiles.mapbox.com/mapbox.js/v0.6.5/mapbox.js'></script>
 
  
    
    <!-- perso-->
     <script src="public/js/ui/resizeBG.js"></script>
    <script src="public/js/ui/dropDownMenu.js"></script>
    <!--<script src="public/js/ui/teamMember.js"></script>-->
    <script src="public/js/ui/slideHandler.js"></script>
    <script src="public/js/ui/teamGrid.js"></script>
   
       <style type="text/css">
		#homepage {
			background-image:url('<?php echo $selectedBg ?>');
		}
		</style> 	

</head>
<body>


<header>
    <nav id="menu-top">
       <a href="#homePage" id="logo" class="itemMenu"><img src="public/img/ui/logo.gif" alt="violence Collective Logo" /></a>
       <a href="#about" class="itemMenu scrollRoll"><img src="public/img/ui/iWork.gif" alt="" /></a>
       <a href="#projects" class="itemMenu scrollRoll"><img src="public/img/ui/iWwork.gif" alt="" /></a>
       <a href="#team" class="itemMenu scrollRoll"><img src="public/img/ui/iTeam.gif" alt="" /></a>
       <a href="#contact" class="itemMenu scrollRoll"><img src="public/img/ui/iContact.gif" alt="" /></a>
    </nav>
</header>

	 <!--------------title---------------> 
    <div id='title' id="tempTitle">
    	<p id='titleTex'>HOME</p>
   </div>	
   <!--------------HOMEPAGE---------------> 
    <div id='homePage' class="section">
       	
        <div id="labelPicture"><?php echo $selectedBgAuthor?></div>
   </div>	
   
    <!--------------about---------------> 
    <div id='about' class="section">
    	<div id="VLNCDescription">
         	<p id="firstline">Film makers, photographers, digital creatives, illustrators</p>
        	<p id='aboutText'>We are a small collection of creative minds raised by the experience of life and shaped by our passions. Each one of these minds has its own skillset and personnality, but we all strive for quality and an enjoyable working process.</p>
        </div>
   </div>	
   
    <!--------------projects---------------> 
    <div class="section diapo" id="projects">
       		
            	 
                <div  class="ei-slider">
                
                    
                     
                     
                    <ul class="ei-slider-large">
                    	<li> <video class="videoProjet"     poster="public/video/bmx.jpg"  preload="none" controls>
                              <source src="public/video/bmx.mp4" type="video/mp4" />
                              <source src="public/video/bmx.webm" type="video/webm" />
                             
  								
                            </video>
                            <img src="public/img/projects/bmx.jpg" alt="BgMathias" />
                           
                             <div class="ei-title">
                                <h2>Matthias Dandois X VLNC</h2>
                                <h3>EDITING, DIRECTION</h3>
                            </div>
                        </li>
                        
                    	<li> <video class="videoProjet"   poster="public/video/r16.jpg"  preload="none" controls>
                              <source src="public/video/r16.mp4" type="video/mp4" />
                              <source src="public/video/r16.webm" type="video/webm" />
  								
                            </video>
                            <img src="public/img/projects/R16BG.jpg" alt="BgR16" />
                           <div class="ei-title">
                                <h2>R16 - SOLO Trailer</h2>
                                <h3>EDITING, DIRECTION</h3>
                            </div>
                        </li>
                    	<li>
                            
                           <img src="public/img/projects/kid.jpg" alt="image02" />
                           <img class="videoProjet" src="public/img/projects/kidScreen.png" alt="BgKID" />
                            
                             <div class="ei-title">
                                <h2>KID BOMBARDOS x VLNC</h2>
                                <h3>EDITING, ART DIRECTION, PHOTOGRAPHY</h3>
                                <h4>   <a target="_blank" href='http://www.vlnc.fr/kidBombardos'> Visit Website</a></h4>
                            </div>
                            
                            
                        </li>
                        <li>
                            <video class="videoProjet"   poster="public/video/bb.jpg"  preload="none" controls>
                              <source src="public/video/bb.mp4" type="video/mp4" />
                              <source src="public/video/bb.webm" type="video/webm" />
                              Your browser does not support the video tag.
                            </video>
                            <img src="public/img/projects/bbui.jpg" alt="image02" /></a>
                            
                             <div class="ei-title">
                                <h2>Barbara Bui Backstage</h2>
                                <h3>EDITING, DIRECTION</h3>
                            </div>
                            
                            
                        </li>
                    	
                      </ul><!-- ei-slider-large -->
                    
                    
                    <ul class="ei-slider-thumbs">
                      <li class="ei-slider-element">Current</li>
                         <li><a href="#">Matthias Dandois x VLNC</a><img src="images/thumbs/1.jpg" alt="thumb01" /></li>
                        <li><a href="#">R16</a><img src="images/thumbs/1.jpg" alt="thumb01" /></li>
                        <li><a href="#">Kid Bombardos</a><img src="images/thumbs/1.jpg" alt="thumb01" /></li>
                        <li><a href="#">Barbara Bui</a><img src="images/thumbs/1.jpg" alt="thumb01" /></li>
                    </ul><!-- ei-slider-thumbs -->
               
                <div class="thisProjectNav">
               		 	<ul class="ei-slider-arrows">
                            <li class="arrowRight"><img class="imgarrow" src='public/img/ui/next_B.jpg'/></li>
                			<li class="arrowLeft"><img class="imgarrow"src='public/img/ui/previous_B.jpg'/></li>
           		 		</ul>
           		</div>
                </div><!-- ei-slider -->
        </div>	
     
     
    <!--------------TEAM--------------->
     <div id='team' class="section">
     
    	<ul id="teamMembers">
        <li class="member">
        	<a class="memberLink" href="team/antoine.html" rel="shadowbox[members]"><img src="public/img/team/antoine.jpg" alt="Pofil Antoine schrer" /></a>
            <h3 class="nomMembre">Antoine Schirer</h3>
        </li>
        <li class="member">
        	<a class="memberLink" href="team/romain.html" rel="shadowbox[members]"><img src="public/img/team/romain.jpg" alt="Pofil Romain Montagut "/></a>
           <h3 class="nomMembre">Romain Montagut</h3>
        </li>
        <li class="member">
        	<a class="memberLink" href="team/jeremie.html" rel="shadowbox[members]"><img src="public/img/team/jeremie.jpg" alt="Pofil Jeremie Carrere"/></a>
           <h3 class="nomMembre">Jeremie Carrere</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/andre.html" rel="shadowbox[members]"><img src="public/img/team/andre.jpg" alt="Pofil André Tinberg"/></a>
           <h3 class="nomMembre">Andre Tinberg</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/kevin.html" rel="shadowbox[members]"><img src="public/img/team/kevin.jpg" alt="Pofil Kevin Calvez"/></a>
           <h3 class="nomMembre">Kevin Calvez</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/thom.html" rel="shadowbox[members]"><img src="public/img/team/thom.jpg" alt="Pofil Thom Huuxtable"/></a>
           <h3 class="nomMembre">Thom Huxtable</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/gus.html" rel="shadowbox[members]"><img src="public/img/team/gus.jpg" alt="Pofil Guz Malucelli"/></a>
           <h3 class="nomMembre">Guz Malucelli</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/george.html" rel="shadowbox[members]"><img src="public/img/team/george.jpg" alt="Pofil George Hastings"/></a>
           <h3 class="nomMembre">George Hastings</h3>
        </li>
        
       <li class="member">
        	<a class="memberLink" href="team/leo.html" rel="shadowbox[members]"><img src="public/img/team/leo.jpg" alt="Pofil Leo Rousseo"/></a>
           <h3 class="nomMembre">Leo Rousseau</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/victor.html" rel="shadowbox[members]"><img src="public/img/team/victor.jpg" alt="Pofil Victor Mark"/></a>
           <h3 class="nomMembre">Victor Mark</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/charlie.html" rel="shadowbox[members]"><img src="public/img/team/charlie.jpg" alt="Pofil Charlie Montagut"/></a>
           <h3 class="nomMembre">Charlie Montagut</h3>
        </li>
       <li class="member">
        	<a class="memberLink" href="team/tom.html" rel="shadowbox[members]"><img src="public/img/team/tom.jpg" alt="Pofil Thomas Siemieniec"/></a>
           <h3 class="nomMembre">Thomas Siemienec</h3>
        </li>
         <li class="member">
        	<a class="memberLink" href="team/olivier.html" rel="shadowbox[members]"><img src="public/img/team/oliv.jpg" alt="Pofil Olivier Le Reun"/></a>
           <h3 class="nomMembre">Olivier Le Reun</h3>
        </li>
         <li class="member">
        	<a class="memberLink" href="team/guillaume.html" rel="shadowbox[members]"><img src="public/img/team/guillaume.jpg" alt="Pofil Guillaume Simonneau"/></a>
           <h3 class="nomMembre">Guillaume Simonneau</h3>
        </li>
         <li class="member">
        	<a class="memberLink" href="team/jesper.html" rel="shadowbox[members]"><img src="public/img/team/jesper.jpg" alt="Profil Jesper Johannesson"/></a>
           <h3 class="nomMembre">Jesper Johannesson</h3>
        </li>
         <li class="member">
        	<a class="memberLink" href="team/angele.html" rel="shadowbox[members]"><img src="public/img/team/angelique.jpg" alt="Profil Jesper Johanesson"/></a>
           <h3 class="nomMembre">Angelique Labbe</h3>
        </li>
       
        </ul>
     
     </div>
     
      
        
          <!--------------contact---------------> 
            <div id='contact' class="section">
             <div id='contactBlack'>
             		<div id="emailContact"><a href='mailto:peace@vlnc.fr' > peace@vlnc.fr</a></div>
                <ul id="listContact">
                	<li class="first"><a href='https://www.facebook.com/WEAREVLNC' target="_blank"><img src="public/img/ui/fIco.jpg" id="fico"/><p class="textLink">Facebook</p></a></li>
               		<li><a href='https://twitter.com/vlnc_co' target="_blank"><img src="public/img/ui/tico.jpg" id="tico"/><p  class="textLink">Twitter</p></a></li>
                	<li><a href='https://vimeo.com/user7085047 '  target="_blank"><img src="public/img/ui/vico.jpg" id="vico"/> <p  class="textLink">Vimeo</p></a></li>
                </ul>
                  <div id="townlist">
                  					<p><b>We live in </b> Paris, Stockholm, Bordeaux, Berlin, New York</p>
                  					<p><b>We are from</b> Brazil,Danemark,England, France, Sweden,  USA</p>
                   </div>
           		 </div>
               
                <div id='VLNCmap'>
                
           		 </div>
           </div>	
           
         <script>
		 // Create map
		  var layer = mapbox.layer().id('vlnccollective.map-38yudet4');
		
		  // Create map with no handlers
		  // The 4th argument is a list of handlers (drag, mousewheel, doubleclick).
		  // Here we have it empty, to disable zooming and panning.
		  var map = mapbox.map('VLNCmap', layer, null, [
  		  easey_handlers.DragHandler(),
  		  easey_handlers.TouchHandler()]);
		
		  map.centerzoom({lat: 40.6, lon: -33.4 }, 4);
		
			
			// Create an empty markers layer
		  var markerLayer = mapbox.markers.layer();
		
		  // Add interaction to this marker layer. This
		  // binds tooltips to each marker that has title
		  // and description defined.
		  map.addLayer(markerLayer);
		
	
		  // Add a single feature to the markers layer.
		  // You can use .features() to add multiple features.
		  markerLayer.add_feature({
			  geometry: {
				  coordinates: [2.3, 47.9]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
				  title: 'Example Marker',
			  }
		  });
		   markerLayer.add_feature({
			  geometry: {
				  coordinates: [13, 52]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		   markerLayer.add_feature({
			  geometry: {
				  coordinates: [-0.5, 44]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		   markerLayer.add_feature({
			  geometry: {
				  coordinates: [18, 59]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		   markerLayer.add_feature({
			  geometry: {
				  coordinates: [-73, 40.9]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		   markerLayer.add_feature({
			  geometry: {
				  coordinates: [12.567, 55.717]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		  markerLayer.add_feature({
			  geometry: {
				  coordinates: [-46.650, -23.550]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		  markerLayer.add_feature({
			  geometry: {
				  coordinates: [-0.167, 51.500]
			  },
			  properties: {
				  'marker-color': '#999',
				  'marker-symbol': 'circle',
			  }
		  });
		  /*
		 	mapbox.load('vlnccollective.map-38yudet4', function(o) {
		var map = mapbox.map('VLNCmap',null,null,);
			map.addLayer(mapbox.layer().id('vlnccollective.map-38yudet4'));
			map.addLayer(o.layer);
			map.smooth(true);
			map.center({ lat: 40.32, lon: -33.622});
			map.zoom(4, true);
			
		});
		 // disable inertial panning

		  /* 
		 
        mapbox.auto('VLNCmap', 'vlnccollective.map-38yudet4');
		  var map = mapbox.load('vlnccollective.map-38yudet4');
		  	 map.ui.zoomer.remove();*/
		  
        </script>
<script type="text/javascript" src="public/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript">	
		
		
		  
            $(function() {
                $('#projects').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					// easing for the sliding animation
					titlespeed	: 1200,
					animation : 'center',
					thumbMaxWidth       : 15
                });
				
            });
			
			
	
			
			
        </script>
 
</body>
</html>

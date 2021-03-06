<?php include_once(“home.html”); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Drive through cities and listen to some amazing music with various radio stations.">
	<title>Drive through Indian Cities</title>
	<meta name="google" content="notranslate">	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="video-background">

		<div class="video-foreground">
			<div id="player"></div>
    	</div>

    	<i class="fa fa-eye"></i>

	    <div id="side">
	    	<div id="list">
	            <p><strong>Select a City</strong></p>

	            <div id="cities">
	                <ul id="city">	                	
	                    <li class="li">Ahmedabad</li>
	                    <li class="li">Bangalore</li>
	                    <li class="li">Bhopal</li>
	                    <li class="li">Chandigarh</li>
	                    <li class="li">Chennai</li>
	                    <li class="li">Dehradun</li>
	                    <li class="li">Delhi</li>
	                    <li class="li">Gandhinagar</li>
	                    <li class="li">Greater Noida</li>
	                    <li class="li">Gurgaon</li>
	                    <li class="li">Hyderabad</li>
	                    <li class="li">Indore</li>
	                    <li class="li">Jaipur</li>
	                    <li class="li">Kolkata</li>
	                    <li class="li">Mumbai</li>
	                    <li class="li">Mumbai Sealink</li>
	                    <li class="li">Mysore</li>
	                    <li class="li">Pune</li>	                
	                    <li class="li">Shimla</li>
	                    <li class="li">Sikkim</li>
	                    <li class="li">Surat</li>	                   
	                    <li class="li">Vadodara</li>
	                </ul>
	            </div>
	        </div>

	        <div id="box">
		        <audio preload="auto" id="song" controls="controls">
		            <source src="https://sg1.fastcast4u.com/proxy/dzcwbfih?mp=/1" type="audio/mpeg">
		        </audio>

		        <img src="./icons/play.png" onclick="playPause()" id="play-pause" />
		        <img src="./icons/forward.png" onclick="nextSong()" id="next-song" />
		        <img src="./icons/backward.png" onclick="previousSong()" id="previous-song" />

		        <div class="song-title">Big FM</div>
	    	</div> 

	    <!--	<div id="noise">
	    		<p style="margin:auto;" onclick="noise()" id="toggle">Street Noise : Off</p>
	    	</div>
-->
	    	<div id="black">
	    		<div id="source">
	            <a href="https://www.youtube.com/watch?v=v=4hUQrosIR00&t=2s" target="_self" id="vid-src">Video Source&nbsp</a>
	        </div>

	        <div id="credits">
	        	<p>By:Mehul Talajia</p>  	        	
	        </div>
	    	</div>
	  	</div>

    </div>

    

  <script type="text/javascript" src="plainCode.js"></script>
</body>
</html>
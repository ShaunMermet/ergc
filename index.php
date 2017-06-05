<?php

?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>-->
		<script src="jquery/jquery-3.2.1.js"></script>
		<!--<script src="https://cdn.rawgit.com/wilq32/jqueryrotate/master/jQueryRotate.js"></script>-->
		<script src="jquery/jQueryRotate.js"></script>
	</head>
	<body style="margin: 2px">
	<div id="full">
		<div id="outer" style="position:relative;width:100%;padding-bottom: 56.25%;;border:1px solid black; overflow:hidden;">
			<div id='imageDiv' style="position: absolute;width:100%;">
				<img id='image' unselectable='on'  src='img/BackgroundFullResized.png' width="100%" style="margin-left: -7.58%;margin-top: -101.85%;width: 115%;"/>
			</div>
			<div id='pitchDiv' style="position: absolute;width:100%;">
				<img id='pitchImage' unselectable='on' src='img/pitch.png' width="100%" style="margin-left: -7.58%;margin-top: -101.85%;width: 115%;"/>	
			</div>
			<div style="position: absolute;width:100%;">
				<img id='rollImage' unselectable='on'  type="text/javascript" src='img/roll.png' width="100%"/>	
			</div>
			<div style="position: absolute;width:100%;">
				<img id='image2' unselectable='on'  type="text/javascript" src='img/fixed.png' width="100%"/>	
			</div>
		</div>
	</div>
		<!--<br><br>
		
		<div id="outer" style="position:relative;width:100%;padding-bottom: 56.25%;;border:1px solid black; overflow:hidden;">
			<div id='testimage' style="position: absolute;width:100%;">
			<div>
				<img  unselectable='on'  src='img/background.png' width="100%" />
				</div>
			</div>
			<div style="position: absolute;width:100%;">
				<img id='testimage2' unselectable='on'  type="text/javascript" src='img/fixed.png' width="100%"/>	
			</div>
		</div>-->

		<script type="text/javascript" src="tempjs/hud.js"></script>
	</body>
	
</html>

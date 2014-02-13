<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EduPi - ApplePi release</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
   <link rel="stylesheet" href="/css/drag_game.css">



	<script>
		$(function() {
			$( "#draggable_tri, #draggable_square" ).draggable({ revert: "invalid" });
			
			$( "#droppable_tri" ).droppable({
				accept: "#draggable_tri",
				activeClass: "droppable_tri_hover",
				hoverClass: "droppable_tri_hover",
			
				drop: function( event, ui ) {
					$( this )
					.addClass( "droppable_tri_hover" )
					
					
				}
			});


		});


	</script>
	
</head>
<body>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_square" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>
	<div id="draggable_tri" style="left:<?php echo mt_rand(0,1000); ?>px; top:<?php echo mt_rand(0,500); ?>px">
	</div>


	<div id="droppable_tri" >
		
	</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EduPi - ApplePi release</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
   <link rel="stylesheet" href="/css/drag_game.css">
   <link rel="stylesheet" href="/css/style.css">

	<script>
		$(function() {
			$( "#draggable_circle, #draggable_square, #draggable_tri, #draggable_hex, #draggable_octa" ).draggable({ revert: "invalid" });
			
			$( "#droppable_circle" ).droppable({
				accept: "#draggable_circle",
				activeClass: "droppable_circle_hover",
				hoverClass: "droppable_circle_hover",
			
				drop: function( event, ui ) {
					$( this )
					.addClass( "droppable_circle_hover" )									
				}
			});

		});

	</script>
	
</head>
<body>
	<?php include "inc/nav.php" ?>


	<div id="draggable_circle" style="left:25px; top:175px">
	</div>
	<div id="draggable_tri" style="left:25px; top:325px">
	</div>
	<div id="draggable_hex" style="left:25px; top:475px">
	</div>
	<div id="draggable_octa" style="left:25px; top:625px">
	</div>
	<div id="draggable_tri" style="left:25px; top:775px">
	</div>
	<div id="draggable_circle" style="left:25px; top:925px">
	</div>


	<div id="draggable_hex" style="left:175px; top:175px">
	</div>
	<div id="draggable_circle" style="left:175px; top:325px">
	</div>
	<div id="draggable_octa" style="left:175px; top:475px">
	</div>
	<div id="draggable_square" style="left:175px; top:625px">
	</div>
	<div id="draggable_octa" style="left:175px; top:775px">
	</div>
	<div id="draggable_tri" style="left:175px; top:925px">
	</div>


	<div id="draggable_square" style="left:325px; top:175px">
	</div>
	<div id="draggable_tri" style="left:325px; top:325px">
	</div>
	<div id="draggable_circle" style="left:325px; top:475px">
	</div>
	<div id="draggable_hex" style="left:325px; top:625px">
	</div>
	<div id="draggable_circle" style="left:325px; top:775px">
	</div>
	<div id="draggable_square" style="left:325px; top:925px">
	</div>

	<div id="draggable_tri" style="left:475px; top:175px">
	</div>
	<div id="draggable_hex" style="left:475px; top:325px">
	</div>
	<div id="draggable_square" style="left:475px; top:475px">
	</div>
	<div id="draggable_tri" style="left:475px; top:625px">
	</div>
	<div id="draggable_square" style="left:475px; top:775px">
	</div>
	<div id="draggable_circle" style="left:475px; top:925px">
	</div>


	<div id="draggable_circle" style="left:625px; top:175px">
	</div>
	<div id="draggable_tri" style="left:625px; top:325px">
	</div>
	<div id="draggable_hex" style="left:625px; top:475px">
	</div>
	<div id="draggable_octa" style="left:625px; top:625px">
	</div>
	<div id="draggable_tri" style="left:625px; top:775px">
	</div>
	<div id="draggable_circle" style="left:625px; top:925px">
	</div>





	<div id="droppable_circle" >
		
	</div>

</body>
</html>
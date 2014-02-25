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


	<div id="draggable_circle" style="left:25px; top:150px">
	</div>
	<div id="draggable_tri" style="left:25px; top:225px">
	</div>
	<div id="draggable_hex" style="left:25px; top:300px">
	</div>
	<div id="draggable_octa" style="left:25px; top:375px">
	</div>
	<div id="draggable_tri" style="left:25px; top:450px">
	</div>


	<div id="draggable_hex" style="left:100px; top:150px">
	</div>
	<div id="draggable_circle" style="left:100px; top:225px">
	</div>
	<div id="draggable_octa" style="left:100px; top:300px">
	</div>
	<div id="draggable_square" style="left:100px; top:375px">
	</div>
	<div id="draggable_octa" style="left:100px; top:450px">
	</div>



	<div id="draggable_square" style="left:175px; top:150px">
	</div>
	<div id="draggable_tri" style="left:175px; top:225px">
	</div>
	<div id="draggable_circle" style="left:175px; top:300px">
	</div>
	<div id="draggable_hex" style="left:175px; top:375px">
	</div>
	<div id="draggable_circle" style="left:175px; top:450px">
	</div>

	<div id="draggable_tri" style="left:250px; top:150px">
	</div>
	<div id="draggable_hex" style="left:250px; top:225px">
	</div>
	<div id="draggable_square" style="left:250px; top:300px">
	</div>
	<div id="draggable_tri" style="left:250px; top:375px">
	</div>
	<div id="draggable_square" style="left:250px; top:450px">
	</div>



	<div id="draggable_circle" style="left:325px; top:150px">
	</div>
	<div id="draggable_tri" style="left:325px; top:225px">
	</div>
	<div id="draggable_hex" style="left:325px; top:300px">
	</div>
	<div id="draggable_octa" style="left:325px; top:375px">
	</div>
	<div id="draggable_tri" style="left:325px; top:450px">
	</div>






	<div id="droppable_circle" >
		
	</div>

</body>
</html>
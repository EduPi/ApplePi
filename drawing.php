<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EduPi - ApplePi release</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="/css/draw_game.css">


  <style>
  #draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>

</head>
<body>
	<div id="buttons">

		<button id="clear">CLEAR</button>
		<div class="color_pick" id="color_blue"></div>
		<div class="color_pick" id="color_brown"></div>
		<div class="color_pick" id="color_green"></div>
		<div class="color_pick" id="color_erase">ERASER</div>
		<div class="size_pick" data-size="12" id="size_12"></div>
		<div class="size_pick" data-size="24" id="size_24"></div>
		<div class="size_pick" data-size="32" id="size_32"></div>
		<div class="size_pick" data-size="64" id="size_64"></div>
	</div>
	<canvas id="canvas" width="1700" height="900"></canvas>
	<script src="js/drawing_game.js"></script>

</body>
</html>
context = document.getElementById('canvas').getContext("2d");
context.fillStyle = "#CCC";
context.fillRect(0,0,1920,900);


$('#canvas').mousedown(function(e){
  var mouseX = e.pageX - this.offsetLeft;
  var mouseY = e.pageY - this.offsetTop;
		
  paint = true;
  addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
  redraw();
});

$('#canvas').mouseup(function(e){
  paint = false;
});

$('#canvas').mouseleave(function(e){
  paint = false;
});

$('#canvas').mousemove(function(e){
  if(paint){
    addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
    redraw();
  }
});

var clickX = new Array();
var clickY = new Array();
var clickDrag = new Array();
var paint;
var pickedColor = "#943";
var strokeWidth = 12;
var clickColor = new Array();
var clickStroke = new Array();
var base_image = new Image();
load_image();


function addClick(x, y, dragging)
{
  clickX.push(x);
  clickY.push(y);
  clickDrag.push(dragging);
  clickColor.push(pickedColor);
  clickStroke.push(strokeWidth);

}

function redraw(){
  context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
  context.fillStyle = "#CCC";
  context.fillRect(0,0,1920,900);
  i
  //context.strokeStyle = pickedColor;
  context.lineJoin = "round";
  //context.lineWidth = strokeWidth;
			
  for(var i=0; i < clickX.length; i++) {		
    context.beginPath();
    if(clickDrag[i] && i){
      context.moveTo(clickX[i-1], clickY[i-1]);
     }else{
       context.moveTo(clickX[i]-1, clickY[i]);
     }
     context.lineTo(clickX[i], clickY[i]);
     context.strokeStyle = clickColor[i];
     context.closePath();
     context.lineWidth = clickStroke[i];
     context.stroke();
  }

  insert_image();
}

$('#clear').click(function(e){
  context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
  context.fillStyle = "#CCC";
  context.fillRect(0,0,1920,900);
  insert_image();
  clickX = [];
  clickY = [];
  clickDrag = [];
  clickColor = [];
});

$('.color_pick').click(function(e){
	pickedColor = rgb2hex($(this).css("background-color"));
	console.log(rgb2hex($(this).css("background-color")));
});

$('.size_pick').click(function(e){
	strokeWidth = $(this).data("size");
	console.log($(this).data("size"));
});


var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

//Function to convert hex format to a rgb color
function rgb2hex(rgb) {
 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function hex(x) {
  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
 }

 function insert_image()
{

  
    context.drawImage(base_image, 100, 100);
  
}

function load_image() 
{
	base_image.src = '/img/tree.png';
	base_image.onload = function(){
    context.drawImage(base_image, 100, 100);
  }
}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EduPi - ApplePi release</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
  #draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
  /*
    $( "#draggable" ).draggable({ revert: "valid" });
    $( "#draggable2" ).draggable({ revert: "invalid" });
 
    $( "#droppable" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  */

var alphabet = new Array();
alphabet[1] = "a";
alphabet[2] = "b";
alphabet[3] = "c";
alphabet[4] = "d";
alphabet[5] = "e";
alphabet[6] = "f";
alphabet[7] = "g";
alphabet[8] = "h";
alphabet[9] = "i";
alphabet[10] = "j";
alphabet[11] = "k";
alphabet[12] = "l";
alphabet[13] = "m";
alphabet[14] = "n";
alphabet[15] = "o";
alphabet[16] = "p";
alphabet[17] = "q";
alphabet[18] = "r";
alphabet[19] = "s";
alphabet[20] = "t";
alphabet[21] = "u";
alphabet[22] = "v";
alphabet[23] = "w";
alphabet[24] = "x";
alphabet[25] = "y";
alphabet[26] = "z";

    $(".letters").click(function() {

      if($(this).data('number') == $(".main_pic img").data('number')){
        
        $(".main_pic img").attr('src', 'img/alphabet/tick.svg');

        $(this).removeClass('show');
        var new_alphabet = new Array();

        $( ".show" ).each(function(index) {
          new_alphabet[index] = $(this).data('number');
        });

        var rand = new_alphabet[Math.floor(Math.random() * new_alphabet.length)];
        $(".main_pic img").data('number', rand);
        $(".main_pic img").animate({
          opacity: 0.25
        }, 1000, function() {
          $(".main_pic img").attr('src', 'img/alphabet/pictures/' + alphabet[rand] + '.jpg').css('opacity','100');
        });
        

      }else{

        alert( 'Sorry!') ;
      }
      
    });

  });

  </script>
</head>
<body>
 <!--
<div id="draggable" class="ui-widget-content">
  <p>I revert when I'm dropped</p>
</div>
 
<div id="draggable2" class="ui-widget-content">
  <p>I revert when I'm not dropped</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>Drop me here</p>
</div>
-->
 <?php
    $alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $rand = rand(0,25);
 ?>

 <table width="100%">
  <tr>
    <td width="20%">&nbsp;</td>
      <td width="60%" align="center">
        <div class="main_pic">
          <img data-number="<? echo $rand+1?>" src="img/alphabet/pictures/<? echo $alphabet[$rand]?>.jpg" />
        </div>
    </td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="60%" align="center" class="letters_box">
      <? foreach ($alphabet as $key => $letter) { ?>
        <div class="letters show letter_<? echo $key+1?>" data-number="<? echo $key+1?>"><img src="img/alphabet/letters/<? echo $letter?>.png"/></div>
      <? } ?>
    </td>
    <td width="20%">&nbsp;</td>
  </tr>
 </table>
 
</body>
</html>
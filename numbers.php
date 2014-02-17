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
          $(".main_pic img").attr('src', 'img/numbers/picture/' + rand + '.jpg').css('opacity','100');
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
    $rand = rand(1,10);
 ?>

 <table width="100%">
  <tr>
    <td width="20%">&nbsp;</td>
      <td width="60%" align="center">
        <div class="main_pic">
          <img data-number="<? echo $rand?>" src="img/numbers/picture/<? echo $rand?>.jpg" />
        </div>
    </td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="60%" align="center" class="letters_box">
      <? for ($i=1; $i < 11; $i++) { ?>
        <div class="letters show letter_<? echo $i?>" data-number="<? echo $i?>"><img src="img/numbers/number/<? echo $i?>.jpg"/></div>
      <? } ?>
    </td>
    <td width="20%">&nbsp;</td>
  </tr>
 </table>
 
</body>
</html>
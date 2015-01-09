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

  </style>
  <script>
  $(function() {
    
    $(".choice").on("click", function(){

      console.log("answer: "+$("#correct").data("correct")+"    choice: "+$(this).data("fruit"));

      if ($("#correct").data("correct") == $(this).data("fruit")){
        $(this).attr("src","../img/fruit/choices/y.jpg");
        setTimeout(function(){
          document.location.href = "/fruits.php";
        },1000);
      }else{
        $(this).attr("src","../img/fruit/choices/x.jpg");
      }
    });


  });

  </script>
</head>
<body>

<?php include "inc/nav.php" ?>

 <?php
  $patterns = Array();

  array_push($patterns, array(0,1,0,1,0,1,0,1,0));
  array_push($patterns, array(0,1,2,0,1,2,0,1,2));
  array_push($patterns, array(1,1,0,1,1,0,1,1,0));
  array_push($patterns, array(0,1,1,0,1,1,0,1,1));

  $use_pattern = $patterns[rand(0,3)];

  $rand1 = rand(1,8);
  $rand2 = rand(1,8);
  $rand3 = rand(1,8);

  while (($rand1 == $rand2) || ($rand1 == $rand3) || ($rand2 == $rand3)){
    $rand1 = rand(1,8);
    $rand2 = rand(1,8);
    $rand3 = rand(1,8);
  }

  $fruits = array($rand1, $rand2, $rand3);

  $pos = array(rand(0,2), rand(0,2), rand(0,2));

  while (($pos[0] == $pos[1]) || ($pos[1] == $pos[2]) || ($pos[0] == $pos[2])){
    $pos = array(rand(0,2), rand(0,2), rand(0,2));
  }
 ?>

<div class="sequence">
    <img src="img/fruit/<? echo $fruits[$use_pattern[0]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[1]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[2]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[3]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[4]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[5]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[6]]?>.jpg" />
    <img src="img/fruit/<? echo $fruits[$use_pattern[7]]?>.jpg" />
    <img id="correct" data-correct="<? echo $fruits[$use_pattern[8]]?>" src="img/fruit/q.jpg" />
</div>



<div class="options">
  <img id="choice1" class="choice" data-fruit="<?php echo $fruits[$pos[0]] ?>" src="img/fruit/choices/<? echo $fruits[$pos[0]]?>.jpg"/>

  <img id="choice2" class="choice" data-fruit="<?php echo $fruits[$pos[1]] ?>" src="img/fruit/choices/<? echo $fruits[$pos[1]]?>.jpg"/>

  <img id="choice3" class="choice" data-fruit="<?php echo $fruits[$pos[2]] ?>" src="img/fruit/choices/<? echo $fruits[$pos[2]]?>.jpg"/>
  
</div>
 
</body>
</html>
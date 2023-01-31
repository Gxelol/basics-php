<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
  <?php
  $text = "Hello? Yes, Parrow";
    
  echo strtolower($text); #lowercase
  
  echo "<br>";
    
  echo strtoupper($text); #uppercase
    
  echo "<br>";
    
  echo strlen($text); #lenght
    
  echo "<br>";
    
  echo $text[0]; #index
    
  echo "<br>";
    
  echo "soda"[1]; #index
    
  echo "<br>";
    
  $text[8] = "s"; #index
    
  echo $text; #index
    
  echo "<br>";
  
  echo str_replace("Yss", "WOW", $text);
  
  echo "<br>";
  
  echo substr($text, 12);
  
  echo "<br>";
  
  echo substr($text, 12, 3);
  ?>

</body>
</html>
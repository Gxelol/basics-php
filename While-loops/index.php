<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    $index = 0;

    while($index <= 10){
      echo "$index <br>";
      $index++;
    }
    
//     $index = 1;
    
//     while($index = 1){         #ATTENTION
//      echo "$index <br>";       #Infinite loop
//     }
    
    $index = 6;
    
    do {
      echo "$index <br>";
      $index++;  
    } while($index <= 5);


  ?>
</body>
</html>
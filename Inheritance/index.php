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
    class Computer {
      function turnOn() {
        echo "Computer is starting";
      }
      function google() {
        echo "Computer is googling";
      }
      function turnOff() {
        echo "Computer is shutting down";
      }
    }

    class GamingPC extends Computer {
      function gaming() {
        echo "Computer is starting a new Game";
      }
      function google() {
        echo "Computer is googling fast";
      }
    }

    $computer = new Computer();
    $computer->google();

    echo "<br>";
    
    $gamingPC = new GamingPC();
    $gamingPC->google();
    echo "<br>";
    $gamingPC->gaming();
  ?>

</body>
</html>
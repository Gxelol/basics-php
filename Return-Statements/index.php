<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=], initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="index.php" method="post">
    <label for="number">Your number:</label>
    <input type="number" name="number">
    <button type="submit">Do it</button>
  </form>

  <?php
    $num = $_POST["number"];
    
    function square($num){
      return $num * $num;
    }
    
    function cube($num){
      return $num * $num * $num;
    }

    $squareResult = square($num);
    $cubeResult = cube($num);
    
    echo "Square: $squareResult";
    
    echo "<br>";
    
    echo "Cube: $cubeResult";
  ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
  <form action="index.php" method="get">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1">
    <label for="num2">Number 2:</label>
    <input type="number" name="num2">
    <button type="submit">Submit</button>
  </form>

  <br>
  
  <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

    echo "$num1";
    echo "<br>";
    echo "$num2";
    echo "<br>";
    echo "The sum is $sum";
    echo "<br>";
    echo "The subtraction is $sub";
    echo "<br>";
    echo "The multiplication is $mul";
    echo "<br>";
    echo "The division is $div";
  ?>

</body>
</html>
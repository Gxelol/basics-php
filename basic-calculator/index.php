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
    <br>
    <label for="operator">Operator: </label>
    <input type="text" name="operator">
    <br>
    <label for="num2">Number 2:</label>
    <input type="number" name="num2">
    <button type="submit">Submit</button>
  </form>

  <br>
  
  <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $op = $_GET["operator"];

    if ($op == "+" && is_numeric($num1) && is_numeric($num2)) {
      echo $num1 + $num2;
    } elseif($op == "-" && is_numeric($num1) && is_numeric($num2)) {
      echo $num1 - $num2;
    } elseif($op == "*" && is_numeric($num1) && is_numeric($num2)){
      echo $num1 * $num2;
    } elseif($op == "/" && is_numeric($num1) && is_numeric($num2)){
      echo $num1 / $num2;
    } else {
      echo "invalid operator or number";
    }
  ?>

</body>
</html>
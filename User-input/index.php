<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
  <form action="index.php" method="get">
    <label for="username">Name:</label>
    <input type="text" name="username">
    <br>
    <br>  
    <label for="age">Age:</label>
    <input type="number" name="age">
    <br>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email">
    <button type="submit">Submit</button>
  </form>

  <br>
  
  <?php
    echo $_GET["username"];
    echo "<br>";
    echo $_GET["age"];
    echo "<br>";
    echo $_GET["email"];
  ?>

</body>
</html>
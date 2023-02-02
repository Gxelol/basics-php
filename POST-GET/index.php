<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
  <form action="index.php" method="get">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
  </form>

  <form action="index.php" method="post">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
  </form>

  <br>
  
  <?php
    echo $_POST["password"];
  ?>

</body>
</html>
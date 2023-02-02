<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="index.php" method="post">
    <label for="fruits[]">Apple</label>
    <input type="checkbox" name="fruits[]" value="apples"><br>
    <label for="fruits[]">Bananas</label>
    <input type="checkbox" name="fruits[]" value="bananas"><br>
    <label for="fruits[]">Lemon</label>
    <input type="checkbox" name="fruits[]" value="lemon"><br>
    <button type="submit">Submit</button>
  </form>

  <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[0];
  ?>

</body>
</html>
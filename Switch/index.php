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
    <label for="grade">Your grade:</label>
    <input type="text" name="grade">
    <button type="submit">Submit</button>
  </form>

  <?php
    $grade = $_POST["grade"];

    switch($grade){
      case "A":
        echo "Spectacular!";
        break;
      case "B":
        echo "Congrats!";
        break;
      case "C":
        echo "You can do better!";
        break;
      case "D":
        echo "Study!";
        break;
      case "F":
        echo "Fail!";
        break;
      default: 
        echo "Invalid Grade";
    }
  ?>

</body>
</html>